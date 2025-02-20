<?php
/*
 * @Author       :  　 @祥💥　技术支持
 * @Mail         : 5110@shejiz.cn
 * @Date         : 2025-02-10 08:43:53
 * @LastEditTime : 2025-02-15 08:56:02
 * @LastEditors  :  　 @祥💥　技术支持
 * @Description  : 
 * @FilePath     : \35dir\source\extend\smarty\sysplugins\smarty_internal_write_file.php
 * It's up to you ^_^
 * Copyright (c) 2025 by 5110@shejiz.cn, All Rights Reserved. 
 */
/**
 * Smarty write file plugin
 *
 * @package Smarty
 * @subpackage PluginsInternal
 * @author Monte Ohrt
 */

/**
 * Smarty Internal Write File Class
 *
 * @package Smarty
 * @subpackage PluginsInternal
 */
class Smarty_Internal_Write_File {

    /**
     * Writes file in a safe way to disk
     *
     * @param string $_filepath complete filepath
     * @param string $_contents file content
     * @param Smarty $smarty    smarty instance
     * @return bool true
     */
    public static function writeFile(string $_filepath, string $_contents, Smarty $smarty): bool
    {
        // 保存当前的错误报告级别
        $_error_reporting = error_reporting();
        // 临时屏蔽 NOTICE 和 WARNING 级别的错误报告
        error_reporting($_error_reporting & ~E_NOTICE & ~E_WARNING);
        $old_umask = null;
        if ($smarty->_file_perms !== null) {
            // 保存旧的 umask 值
            $old_umask = umask(0);
        }

        $_dirpath = dirname($_filepath);
        // 如果有子目录且目录不存在，创建目录结构
        if ($_dirpath !== '.' && !file_exists($_dirpath)) {
            mkdir($_dirpath, $smarty->_dir_perms === null ? 0777 : $smarty->_dir_perms, true);
        }

        // 生成临时文件名
        $_tmp_file = $_dirpath . '/' . uniqid('wrt', true);
        try {
            // 尝试将内容写入临时文件
            if (!file_put_contents($_tmp_file, $_contents)) {
                // 恢复原始的错误报告级别
                error_reporting($_error_reporting);
                throw new SmartyException("unable to write file {$_tmp_file}");
            }
            
            /*
             * Windows' rename() fails if the destination exists,
             * Linux' rename() properly handles the overwrite.
             * Simply unlink()ing a file might cause other processes 
             * currently reading that file to fail, but linux' rename()
             * seems to be smart enough to handle that for us.
             */
            $success = false;
            if (Smarty::$_IS_WINDOWS) {
                // 移除原始文件
                @unlink($_filepath);
                // 重命名临时文件
                $success = @rename($_tmp_file, $_filepath);
            } else {
                // 重命名临时文件
                $success = @rename($_tmp_file, $_filepath);
                if (!$success) {
                    // 移除原始文件
                    @unlink($_filepath);
                    // 再次尝试重命名临时文件
                    $success = @rename($_tmp_file, $_filepath);
                }
            }

            if (!$success) {
                // 恢复原始的错误报告级别
                error_reporting($_error_reporting);
                echo "unable to write file {$_filepath} 请尝试刷新页面";
                throw new SmartyException("unable to write file {$_filepath}");
            }
        } catch (SmartyException $e) {
            // 恢复原始的错误报告级别
            error_reporting($_error_reporting);
            // 确保临时文件被删除
            @unlink($_tmp_file);
            return false;
        }

        if ($smarty->_file_perms !== null) {
            // 设置文件权限
            chmod($_filepath, $smarty->_file_perms);
            // 恢复旧的 umask 值
            umask($old_umask);
        }
        // 恢复原始的错误报告级别
        error_reporting($_error_reporting);
        return true;
    }

}
?>
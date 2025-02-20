<?php
/*
 * @Author       :  　 @祥💥　技术支持
 * @Mail         : shejiz@qq.com
 * @Date         : 2025-02-12 15:22:31
 * @LastEditTime : 2025-02-15 16:58:26
 * @LastEditors  :  　 @祥💥　技术支持
 * @Description  : 
 * @FilePath     : \35dir\index.php
 * It's up to you ^_^
 * Copyright (c) 2025 by shejiz@qq.com, All Rights Reserved. 
 */
$mtime = explode(' ', microtime());
$start_time = $mtime[0] + $mtime[1];

define('ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)).'/');
define('APP_PATH', ROOT_PATH.'source/');
define('MOD_PATH', ROOT_PATH.'module/');

require(APP_PATH.'init.php');
require(APP_PATH.'module/link.php');
require(APP_PATH.'module/adver.php');
require(APP_PATH.'module/label.php');
require(APP_PATH.'module/diypage.php');
require(APP_PATH.'module/category.php');
require(APP_PATH.'module/website.php');
require(APP_PATH.'module/weblink.php');
require(APP_PATH.'module/article.php');
require(APP_PATH.'module/user.php');
require(APP_PATH.'module/stats.php');
require(APP_PATH.'module/prelink.php');
require(APP_PATH.'module/rewrite.php');

/** module */
$module = $_GET['mod'] ?? $_POST['mod'] ?? 'index';

$modarr = array('index', 'webdir', 'article', 'weblink', 'category', 'update', 'archives', 'search', 'siteinfo', 'artinfo', 'linkinfo', 'top', 'feedback', 'diypage', 'rssfeed', 'sitemap', 'ajaxget', 'getdata', 'api');
if (in_array($module, $modarr)) {
	$modpath = MOD_PATH.$module.'.php';
	if (is_file($modpath)) {
		require(MOD_PATH.'common.php');
		require($modpath);
		
		#instat
		if (isset($_SERVER['HTTP_REFERER'])) {
            $refurl = mb_strtolower($_SERVER['HTTP_REFERER'], 'UTF-8');
            if (preg_match("/^http(s)?:\/\/?([^\/]+)/i", $refurl, $matches)) {
                $domain = $matches[2];
                if (!empty($domain)) {
                    $DB->query("UPDATE ".$DB->table('websites')." a, ".$DB->table('webdata')." b SET b.web_instat=b.web_instat+1, b.web_itime=".time()." WHERE a.web_id=b.web_id AND web_url='$domain'");
                }
            }
        } else {
            $refurl = '';
        }
	} else {
		exit('“'.$module.'.php” 模块文件不存在！文件路径：“'.MOD_PATH.'”。');
	}
}
?>
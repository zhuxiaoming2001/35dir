<?php
/*
 * @Author       :  　 @祥💥　技术支持
 * @Mail         : shejiz@qq.com
 * @Date         : 2025-02-12 15:22:31
 * @LastEditTime : 2025-03-07 11:55:13
 * @LastEditors  :  　 @祥💥　技术支持
 * @Description  : 
 * @FilePath     : \35dir\member\module\upload.php
 * It's up to you ^_^
 * Copyright (c) 2025 by shejiz@qq.com, All Rights Reserved. 
 */

if (!defined('IN_HANFOX')) exit('Access Denied');

require(APP_PATH.'include/upload.php');

if ($_GET['act'] == 'upload') {
	$savepath = '../'.$options['upload_dir'].'/article/';
	
	$upload = new upload_file();
	$upload->make_dir($savepath);
	$upload->init($_FILES['imgFile'], $savepath);
	
	header('Content-type: text/html; charset=utf-8');
	if ($upload->error_code == 0) {
		$upload->save_file();
        echo json_encode(array('error' => 0, 'url' => $upload->attach['path']));exit();
	} else {
        echo json_encode(array('error' => 1, 'message' => $upload->error()));exit();
	}
}
?>
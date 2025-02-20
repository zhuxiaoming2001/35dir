<?php
/*
 * @Author       :  　 @祥💥　技术支持
 * @Mail         : 5110@shejiz.cn
 * @Date         : 2025-02-11 08:56:38
 * @LastEditTime : 2025-02-15 10:57:44
 * @LastEditors  :  　 @祥💥　技术支持
 * @Description  : 
 * @FilePath     : \35dir\member\module\logout.php
 * It's up to you ^_^
 * Copyright (c) 2025 by 5110@shejiz.cn, All Rights Reserved. 
 */
if (!defined('IN_HANFOX')) exit('Access Denied');

setcookie('auth_cookie', '', time() - 3600, $options['site_root']);
redirect($options['site_root']);
?>
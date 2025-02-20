<?php
/*
 * @Author       :  　 @祥💥　技术支持
 * @Mail         : shejiz@qq.com
 * @Date         : 2025-02-12 15:22:31
 * @LastEditTime : 2025-02-15 17:13:37
 * @LastEditors  :  　 @祥💥　技术支持
 * @Description  : 
 * @FilePath     : \35dir\module\common.php
 * It's up to you ^_^
 * Copyright (c) 2025 by shejiz@qq.com, All Rights Reserved. 
 */
if (!defined('IN_HANFOX')) exit('Access Denied');

function smarty_output($template, $cache_id = NULL, $compile_id = NULL) {
	global $smarty, $options;
	
	template_exists($template);
	
	#common
	$options = stripslashes_deep($options);
	$stats = get_stats();
	$labels = stripslashes_deep(get_labels());
	
	#user login
	$auth_cookie = isset($_COOKIE['auth_cookie']) ? $_COOKIE['auth_cookie'] : '';
	$user_info = check_user_login($auth_cookie);
	if (empty($user_info)) {
		$login_status = '<a href="'.$options['site_root'].'member/?mod=connect&oper=init"><img src="'.$options['site_root'].'public/images/qq_login.png" /></a> / <a href="'.$options['site_root'].'member/?mod=login">登录</a> / <a href="'.$options['site_root'].'member/?mod=register">注册</a> / <a href="'.$options['site_root'].'member/?mod=getpwd">找回密码</a>';
	} else {
		$login_status = '<font color="#ff0000">'.$user_info['nick_name'].'</font>，<a href="'.$options['site_root'].'member/?mod=home">我的账户</a> | <a href="'.$options['site_root'].'member/?mod=logout">安全退出</a>';
	}
	
	$smarty->assign('site_root', $options['site_root']);
	$smarty->assign('site_name', $options['site_name']);
	$smarty->assign('site_url', $options['site_url']);
	$smarty->assign('site_copyright', $options['site_copyright']);
	$smarty->assign('search_words', get_format_tags($options['search_words']));
	
	$smarty->assign('cfg', $options); #options
	$smarty->assign('stat', $stats); #stats
	$smarty->assign('label', $labels); #labels
	$smarty->assign('script_time', get_scripttime()); #script time
	$smarty->assign('login_status', $login_status); #user login
	
	#parse template and output
	$content = $smarty->fetch($template, $cache_id, $compile_id);
	if ($options['link_struct'] != 0) {
		$content = rewrite_output($content);
	}
	echo $content;
	
	#gzip
	$buffer = ob_get_contents();
	ob_end_clean();
	$options['is_enabled_gzip'] == 'yes' ? ob_start('ob_gzhandler') : ob_start();
	
	echo $buffer;
}

function msgbox($msg, $url = 'javascript: history.go(-1);') {
	global $smarty;
	
	$template = 'msgbox.html';
	template_exists($template);
	
	$smarty->assign('msg', $msg);
	$smarty->assign('url', $url);
	echo $smarty->fetch('msgbox.html');
	@ob_end_flush();
	exit();
}

function redirect($url) {
    header('location:'.$url, false, 301);
	exit;
}

function get_scripttime() {
	global $DB, $options, $start_time;
	
	$mtime = explode(' ', microtime());
	$end_time = $mtime[1] + $mtime[0];
	$exec_time = number_format(($end_time - $start_time), 6);
	$gzip = $options['is_enabled_gzip'] == 'yes' ? 'Enabled' : 'Disabled';
	
	return 'Processed in '.$exec_time.' second(s), '.$DB->queries.' Queries, Gzip '.$gzip;
}

function insert_script_time() {
	return get_scripttime();
}

/** rss link */
function get_rssfeed($module = 'webdir', $cate_id = 0) {
	global $options;
	
	return '<a href="?mod=rssfeed&type='.$module.($cate_id > 0 ? '&cid='.$cate_id : '').'" target="_blank"><img src="'.$options['site_root'].'public/images/rss.gif" alt="订阅RssFeed" border="0" /></a>';
}
	
/** site path */
function get_sitepath(string $module = '', int $cate_id = 0): string
{
    // 声明使用全局变量 $options
    global $options;

    // 初始化模块字符串
    $modstr = '';

    // 检查模块是否在指定的模块列表中
    if (in_array($module, ['webdir', 'article', 'weblink'])) {
        $modstr = ' &raquo; ';
        switch ($module) {
            case 'webdir':
                $modstr .= '<a href="?mod=webdir">网站目录</a>';
                break;
            case 'article':
                $modstr .= '<a href="?mod=article">站长资讯</a>';
                break;
            case 'weblink':
                $modstr .= '<a href="?mod=weblink">链接交换</a>';
                break;
        }
    }

    // 生成完整的路径导航字符串
    $strpath = '当前位置：<a href="' . $options['site_url'] . '">' . $options['site_name'] . '</a>' . $modstr . ($cate_id > 0 ? get_category_path($cate_id) : '');

    return $strpath;
}

/** format tags */
function get_format_tags($str) {
	$arrstr = !empty($str) && strpos($str, ',') > 0 ? explode(',', $str) : (array) $str;
	$count = count($arrstr);
	
	$newarr = array();
	for ($i = 0; $i < $count; $i++) {
		$tag = trim($arrstr[$i]);
		$newarr[$i]['tag_name'] = $tag;
		$newarr[$i]['tag_link'] = get_search_url('tags', $tag);
	}
	unset($arrstr);
	
	return $newarr;
}
?>
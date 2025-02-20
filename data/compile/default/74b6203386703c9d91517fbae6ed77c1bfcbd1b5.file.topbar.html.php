<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:13:05
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\default\topbar.html" */ ?>
<?php /*%%SmartyHeaderCode:2506667a960b102b875-53642894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b6203386703c9d91517fbae6ed77c1bfcbd1b5' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\default\\topbar.html',
      1 => 1353846442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2506667a960b102b875-53642894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'login_status' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a960b102ff55_45960965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a960b102ff55_45960965')) {function content_67a960b102ff55_45960965($_smarty_tpl) {?><div id="topbg">
	<div id="topbar">
		<div id="topbar-left">您好，欢迎来到<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
！</div>
    	<div id="topbar-right"><?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
</div>
	</div>
</div><?php }} ?>
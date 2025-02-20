<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 20:00:23
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\default\feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:1556967a9ea5709b038-88565570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12fd3c71681e68e4804692ebf758a59887be8c9b' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\default\\feedback.html',
      1 => 1383892227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1556967a9ea5709b038-88565570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a9ea570aeb16_68849217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a9ea570aeb16_68849217')) {function content_67a9ea570aeb16_68849217($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
<meta name="Copyright" content="Powered By yzdir.com" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/default/skin/style.css" rel="stylesheet" type="text/css" />
<?php echo $_smarty_tpl->getSubTemplate ("script.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="subbox" class="clearfix">
    	<h2>意见/建议反馈</h2>
       	<ul class="fbform">
            <form name="fbfrom" id="fbfrom" method="post" action="">
            <li class="clearfix">
            	<strong>用户昵称：</strong>
                <p><input type="text" name="nick" id="nick" class="fipt" size="40" maxlength="50" /></p>
            </li>
            <li class="clearfix">
            	<strong>电子邮件：</strong>
                <p><input type="text" name="email" id="email" class="fipt" size="40" maxlength="50" /></p>
            </li>
            <li class="clearfix">
            	<strong>意见内容：</strong>
                <p><textarea name="content" id="content" cols="60" rows="8" class="fipt"></textarea></p>
            </li>
            <li class="clearfix">
            	<strong>验证代码：</strong>
                <p><input type="text" name="checkcode" id="checkcode" class="fipt" size="6" maxlength="6" onFocus="refreshimg('mycode');" /> <span id="mycode">点击输入框即可显示验证码</span></p>
            </li>
            <li>
            	<input type="hidden" name="action" id="action" value="send">
                <input type="submit" name="submit" class="fbtn" value="提 交">
                <input type="reset" name="reset" class="fbtn" value="重 填">
            </li>
           </form>
    	</ul>
	</div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
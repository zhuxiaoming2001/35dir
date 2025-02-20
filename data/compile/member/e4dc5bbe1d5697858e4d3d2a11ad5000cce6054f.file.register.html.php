<?php /* Smarty version Smarty-3.1.10, created on 2025-02-11 08:19:29
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\member\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2735567aa9791685014-12266340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4dc5bbe1d5697858e4d3d2a11ad5000cce6054f' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\member\\register.html',
      1 => 1353846450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2735567aa9791685014-12266340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'cfg' => 0,
    'site_url' => 0,
    'site_name' => 0,
    'site_copyright' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67aa97916eeb27_98329800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67aa97916eeb27_98329800')) {function content_67aa97916eeb27_98329800($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
<script type="text/javascript">var sitepath = '<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
'; var rewrite = '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['is_enabled_rewrite'];?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/common.js"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/member/skin/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
    <div id="header">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="logo"></a>
        <div id="toplink">已经有帐号？ <a href="?mod=login">登录我的账户&raquo;</a></div>
    </div>
	<div id="regform" class="clearfix">
      	<h2>欢迎注册成为<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
会员！</h2>
        <form name="myform" method="post" action="">
        <ul>
           	<li><label><font color="#FF0000">*</font> 电子邮箱：</label><input type="text" name="email" size="50" maxlength="50" class="ipt" /><p>登录账户、找回密码时使用</p></li>
            <li><label><font color="#FF0000">*</font> 帐号密码：</label><input type="password" name="pass" size="50" maxlength="50" class="ipt" /><p>6~20个字符，区分大小写</p></li>
            <li><label><font color="#FF0000">*</font> 确认密码：</label><input type="password" name="pass1" size="50" maxlength="50" class="ipt" /><p>同上</p></li>
            <li><label><font color="#FF0000">*</font> 昵 称：</label><input type="text" name="nick" size="50" maxlength="20" class="ipt" /><p>我们对您的称呼</p></li>
            <li><label><font color="#FF0000">*</font> 腾讯QQ：</label><input type="text" name="qq" size="50" maxlength="20" class="ipt" /><p>站长相互联系</p></li>
            <li><label><font color="#FF0000">*</font> 验 证 码：</label><input type="text" name="code" size="10" maxlength="6" class="ipt" onFocus="refreshimg('mycode');" /><span id="mycode"></span><p>点击输入框即可显示验证码</p></li>
            <li><label>服务条款：</label><textarea class="ipt" style="font-size: 12px; height: 80px; width: 320px;" readonly>1.用户向本站可按照本协议的规定享受相应的服务；
2.用户必须保证其提交的网站不能含有任何违反国家有关法律、法规及中华人民共和国承认或加入的国际条约的内容，包括但不限于危害国家安全、淫秽色情、虚假、违法、诽谤（包括商业诽谤）、非法恐吓或非法骚扰、侵犯他人版权、人身权或其他合法权益或利益以及有违公序良俗的内容；
3.用户必须保证其提交的信息真实、准确、及时、详尽和完整并与其要求提交的网站当前情况一致；
4.用户的网站必须有一定有益的实质内容，此项标准由本站全权决定；
5.用户的同一网站不能重复提交；
6.用户的网站必须能够支持多种浏览器，并且每天24小时正常运行、能被访问；
7. 用户在使用本站提供的搜索引擎服务时必须保证： 1.遵守中国有关法律法规的规定；
2.不利用搜索引擎服务进行任何非法活动；
3.不干扰搜索引擎服务的正常进行；
4.遵守所有与使用搜索引擎服务有关的网络协议、规定、程序和惯例；
8.用户通过本站免费网站提交服务进行商务活动所引起的经济纠纷与本站无关；
9.如用户违反本协议规定的任何义务，给本站造成损失，用户必须负责相应的赔偿。议不可分割的一部分，与本协议具有同等法律效力。本站服务条款与本服务协议内容相冲突时，以本服务协议为准。</textarea>
			</li>
            <li><label>&nbsp;</label><input type="hidden" name="action" value="register"><input type="submit" value="同意以上条款并注册" class="btn" /></li>
        </ul>
        </form>
    </div>
    <div id="footer" class="clearfix">
    	<?php echo $_smarty_tpl->tpl_vars['site_copyright']->value;?>

    </div>
</div>
</body>
</html><?php }} ?>
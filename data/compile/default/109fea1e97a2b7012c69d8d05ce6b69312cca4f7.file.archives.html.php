<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 19:52:30
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\default\archives.html" */ ?>
<?php /*%%SmartyHeaderCode:2020267a9e87eef7605-23222055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109fea1e97a2b7012c69d8d05ce6b69312cca4f7' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\default\\archives.html',
      1 => 1383892269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020267a9e87eef7605-23222055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'year' => 0,
    'arr' => 0,
    'item' => 0,
    'month' => 0,
    'pagename' => 0,
    'websites' => 0,
    'w' => 0,
    'showpage' => 0,
    'art' => 0,
    'best' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a9e87ef2c5b6_79565589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a9e87ef2c5b6_79565589')) {function content_67a9e87ef2c5b6_79565589($_smarty_tpl) {?><!DOCTYPE HTML>
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

    <div id="mainbox" class="clearfix">
    	<div id="mainbox-left">
        	<div id="arcbox" class="clearfix">
				<h3>数据归档</h3>
				<ul class="arclist">
					<?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;
 $_from = get_archives(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['year']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
                	<li>
                		<h4><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
年</h4>
                    	<p>
                    		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['month']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                    		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['arc_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
年<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
月共有<?php echo $_smarty_tpl->tpl_vars['item']->value['site_count'];?>
个站点"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
月</a>
                        	<?php } ?>
                    	</p>
                	</li>
					<?php } ?>
				</ul>
			</div>
            <div class="blank10"></div>
            <div id="listbox" class="clearfix">
            	<h2><?php echo $_smarty_tpl->tpl_vars['pagename']->value;?>
</h2>
            	<ul class="sitelist">
					<?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['websites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_pic'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_name'];?>
" class="thumb" /></a><div class="info"><h3><a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['w']->value['web_name'];?>
</a> <?php if ($_smarty_tpl->tpl_vars['w']->value['web_ispay']==1){?><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/attr/audit.gif" border="0"><?php }?> <?php if ($_smarty_tpl->tpl_vars['w']->value['web_istop']==1){?><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/attr/top.gif" border="0"><?php }?> <?php if ($_smarty_tpl->tpl_vars['w']->value['web_isbest']==1){?><img src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/images/attr/best.gif" border="0"><?php }?></h3><p><?php echo $_smarty_tpl->tpl_vars['w']->value['web_intro'];?>
</p><address><a href="<?php echo $_smarty_tpl->tpl_vars['w']->value['web_furl'];?>
" target="_blank" class="visit" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['w']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['w']->value['web_url'];?>
</a> - <?php echo $_smarty_tpl->tpl_vars['w']->value['web_ctime'];?>
 - <a href="javascript:;" class="addfav" onClick="addfav(<?php echo $_smarty_tpl->tpl_vars['w']->value['web_id'];?>
)" title="点击收藏">收藏</a></address></div></li>
                	<?php }
if (!$_smarty_tpl->tpl_vars['w']->_loop) {
?>
                	<li>该目录下无任何内容！</li>
                	<?php } ?>
				</ul>
            	<div class="showpage"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
            </div>
        </div>
        <div id="mainbox-right">
        	<div class="ad250x250"><?php echo get_adcode(7);?>
</div>
            <div class="blank10"></div>
            <div id="bestart">
            	<h3>推荐资讯</h3>
                <ul class="artlist_b">
                	<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = get_articles(0,10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="blank10"></div>
            <div id="bestweb" class="mag">
            	<h3>推荐站点</h3>
                <ul class="weblist_b">
                   	<?php  $_smarty_tpl->tpl_vars['best'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['best']->_loop = false;
 $_from = get_websites(0,5,false,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['best']->key => $_smarty_tpl->tpl_vars['best']->value){
$_smarty_tpl->tpl_vars['best']->_loop = true;
?>
                   	<li><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_pic'];?>
" width="100" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
" /></a><strong><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
</a></strong><p><?php echo $_smarty_tpl->tpl_vars['best']->value['web_intro'];?>
</p><address><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_furl'];?>
" target="_blank" class="visit" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['best']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_url'];?>
</a></address></li>
                   	<?php } ?>
               	</ul>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
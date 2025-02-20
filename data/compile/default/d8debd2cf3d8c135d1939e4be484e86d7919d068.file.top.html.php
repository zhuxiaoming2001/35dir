<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 19:53:02
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\default\top.html" */ ?>
<?php /*%%SmartyHeaderCode:1681567a9e89e521e71-01333063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8debd2cf3d8c135d1939e4be484e86d7919d068' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\default\\top.html',
      1 => 1383892176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681567a9e89e521e71-01333063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
    'site_root' => 0,
    'instat' => 0,
    'outstat' => 0,
    'new' => 0,
    'hot' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a9e89e5517e3_45894700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a9e89e5517e3_45894700')) {function content_67a9e89e5517e3_45894700($_smarty_tpl) {?><!DOCTYPE HTML>
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
        	<div class="topsite" style="margin-right: 10px;">
            	<h3>入站排行榜 TOP10</h3>
                <ul class="toplist">
                   	<?php  $_smarty_tpl->tpl_vars['instat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instat']->_loop = false;
 $_from = get_websites(0,10,false,false,'instat'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['instat_website']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['instat']->key => $_smarty_tpl->tpl_vars['instat']->value){
$_smarty_tpl->tpl_vars['instat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['instat_website']['iteration']++;
?>
                   	<li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['instat_website']['iteration'];?>
.</span><a href="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['instat']->value['web_name'];?>
</a> - <em><a href="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_url'];?>
" target="_blank" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['instat']->value['web_url'];?>
</a></em></li>
                   	<?php } ?>
               	</ul>
            </div>
        	<div class="topsite">
            	<h3>出站排行榜 TOP10</h3>
                <ul class="toplist">
                   	<?php  $_smarty_tpl->tpl_vars['outstat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['outstat']->_loop = false;
 $_from = get_websites(0,10,false,false,'outstat'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outstat_website']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['outstat']->key => $_smarty_tpl->tpl_vars['outstat']->value){
$_smarty_tpl->tpl_vars['outstat']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['outstat_website']['iteration']++;
?>
                   	<li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['outstat_website']['iteration'];?>
.</span><a href="<?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_name'];?>
</a> - <em><a href="<?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_url'];?>
" target="_blank" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['outstat']->value['web_url'];?>
</a></em></li>
                   	<?php } ?>
               	</ul>
            </div>
        	<div class="topsite" style="margin-top: 10px; margin-right: 10px;">
            	<h3>最新收录 TOP10</h3>
                <ul class="toplist">
                   	<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = get_websites(0,10,false,false,'ctime'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['new_website']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['new_website']['iteration']++;
?>
                   	<li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['new_website']['iteration'];?>
.</span><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['web_name'];?>
</a> - <em><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_url'];?>
" target="_blank" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['new']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['new']->value['web_url'];?>
</a></em></li>
                   	<?php } ?>
               	</ul>
            </div>
        	<div class="topsite" style="margin-top: 10px;">
            	<h3>热门浏览 TOP10</h3>
                <ul class="toplist">
                   	<?php  $_smarty_tpl->tpl_vars['hot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hot']->_loop = false;
 $_from = get_websites(0,10,false,false,'views'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['hot_website']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hot']->key => $_smarty_tpl->tpl_vars['hot']->value){
$_smarty_tpl->tpl_vars['hot']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['hot_website']['iteration']++;
?>
                   	<li><span><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['hot_website']['iteration'];?>
.</span><a href="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['hot']->value['web_name'];?>
</a> - <em><a href="<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_url'];?>
" target="_blank" onClick="clickout(<?php echo $_smarty_tpl->tpl_vars['hot']->value['web_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['hot']->value['web_url'];?>
</a></em></li>
                   	<?php } ?>
               	</ul>
            </div>
        </div>
        <div id="mainbox-right">
            <div style="height: 250px;">
            <?php echo get_adcode(7);?>

            </div>
            <div style="margin-top: 15px;"><?php echo get_adcode(7);?>
</div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
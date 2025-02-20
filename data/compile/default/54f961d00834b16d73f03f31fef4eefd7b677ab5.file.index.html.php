<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:13:04
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1570867a960b0f0fb63-93219824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54f961d00834b16d73f03f31fef4eefd7b677ab5' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\default\\index.html',
      1 => 1383892215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1570867a960b0f0fb63-93219824',
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
    'stat' => 0,
    'quick' => 0,
    'cate' => 0,
    'scate' => 0,
    'new' => 0,
    'best' => 0,
    'cool' => 0,
    'art' => 0,
    'link' => 0,
    'instat' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a960b1011015_75062911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a960b1011015_75062911')) {function content_67a960b1011015_75062911($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta charset="utf-8">
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
<meta name="Description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
<meta name="Copyright" content="Powered By yzdir.com" />
<link href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
themes/default/skin/nav.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">var sitepath = '<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
'; var rewrite = '<?php echo $_smarty_tpl->tpl_vars['cfg']->value['link_struct'];?>
';</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
public/scripts/common.js"></script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("topbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="wrapper">
	<div id="header">
    	<div id="topbox">
    		<a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
" class="logo" title="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
"></a>
            <div id="sobox">
        	<form name="sofrm" class="sofrm" method="get" action="" onSubmit="return rewrite_search()">
            	<input name="mod" type="hidden" id="mod" value="search" />
                <input name="type" type="hidden" id="type" value="name" />
                <div id="selopt">
                	<div id="cursel">网站名称</div>
                    <ul id="options">
                    	<li><a href="javascript: void(0);" name="name">网站名称</a></li>
                        <li><a href="javascript: void(0);" name="url">网站地址</a></li>
                        <li><a href="javascript: void(0);" name="tags">TAG标签</a></li>
                        <li><a href="javascript: void(0);" name="intro">网站描述</a></li>
                    </ul>
                </div>
				<input name="query" type="text" class="sipt" id="query" onFocus="this.value='';" /><input type="submit" class="sbtn" value="搜 索" />
			</form>
			</div>
        </div>
        <div id="navbox">
			<ul class="navbar">
        		<li><a href="?mod=index">网站首页</a></li><li class="navline"></li>
                <li><a href="?mod=webdir">网站目录</a></li><li class="navline"></li>
                <li><a href="?mod=article">站长资讯</a></li><li class="navline"></li>
                <li><a href="?mod=weblink">链接交换</a></li><li class="navline"></li>
                <li><a href="?mod=category">分类浏览</a></li><li class="navline"></li>
                <li><a href="?mod=update">最新收录</a></li><li class="navline"></li>
                <li><a href="?mod=archives">数据归档</a></li><li class="navline"></li>
                <li><a href="?mod=top">TOP排行榜</a></li><li class="navline"></li>
                <li><a href="?mod=feedback">意见反馈</a></li><li class="navline"></li>
        	</ul>
        </div>
        <div id="txtbox">
        	<div class="count">数据统计：<b><?php echo $_smarty_tpl->tpl_vars['stat']->value['category'];?>
</b>个主题分类，<b><?php echo $_smarty_tpl->tpl_vars['stat']->value['website'];?>
</b>个优秀站点，<b><?php echo $_smarty_tpl->tpl_vars['stat']->value['article'];?>
</b>篇站长资讯</div>
            <div class="link">快捷方式：<a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=website&act=add">网站提交</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
member/?mod=article&act=add">软文投稿</a> - <a href="<?php echo $_smarty_tpl->tpl_vars['site_root']->value;?>
?mod=diypage&pid=1">帮助中心</a></div>
        </div>
    </div>
    <div class="blank10"></div>
    <div id="quickbox"><strong>快速审核：</strong><?php  $_smarty_tpl->tpl_vars['quick'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quick']->_loop = false;
 $_from = get_websites(0,12,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quick']->key => $_smarty_tpl->tpl_vars['quick']->value){
$_smarty_tpl->tpl_vars['quick']->_loop = true;
?><a href="<?php echo $_smarty_tpl->tpl_vars['quick']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['quick']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['quick']->value['web_name'];?>
</a><?php } ?></div>
    <div class="blank10"></div>
	<div id="homebox">
		<div id="homebox-left">
    		<dl id="hcatebox" class="clearfix">
        		<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = get_categories(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value){
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['cate']->value['cate_mod']=='webdir'){?>
        		<dt><a href="<?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_name'];?>
</a></dt>
            	<dd>
            		<ul class="hcatelist">
                		<?php  $_smarty_tpl->tpl_vars['scate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scate']->_loop = false;
 $_from = get_categories($_smarty_tpl->tpl_vars['cate']->value['cate_id']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scate']->key => $_smarty_tpl->tpl_vars['scate']->value){
$_smarty_tpl->tpl_vars['scate']->_loop = true;
?>
                		<li><a href="<?php echo $_smarty_tpl->tpl_vars['scate']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['scate']->value['cate_name'];?>
</a></li>
                    	<?php } ?>
                	</ul>
            	</dd>
                <?php }?>
            	<?php } ?>
        	</dl>
            <div class="blank10"></div>
			<div id="newbox">
            	<h3>最新收录</h3>
                <ul class="newlist">
                	<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = get_websites(0,14); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
					<li><span><?php echo $_smarty_tpl->tpl_vars['new']->value['web_ctime'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['new']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['web_name'];?>
</a></li>
                   	<?php } ?>
                </ul>
            </div>
    	</div>
    	<div id="homebox-right">
    		<div id="bestbox">
        		<h3><span>站长推荐</span></h3>
            	<ul class="clearfix bestlist">
            		<?php  $_smarty_tpl->tpl_vars['best'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['best']->_loop = false;
 $_from = get_websites(0,35,false,true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['best']->key => $_smarty_tpl->tpl_vars['best']->value){
$_smarty_tpl->tpl_vars['best']->_loop = true;
?>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['best']->value['web_name'];?>
</a></li>
                	<?php } ?>
            	</ul>
        	</div>
        	<div class="blank10"></div>
        	<div id="coolbox" class="clearfix">
        		<h3>酷站导航</h3>
            	<ul class="csitelist">
            		<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = get_best_categories(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['csite']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value){
$_smarty_tpl->tpl_vars['cate']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['csite']['iteration']++;
?>
                	<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_name'];?>
</a></h4><a href="<?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_link'];?>
" class="more">更多>></a><?php  $_smarty_tpl->tpl_vars['cool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cool']->_loop = false;
 $_from = get_websites($_smarty_tpl->tpl_vars['cate']->value['cate_id'],5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cool']->key => $_smarty_tpl->tpl_vars['cool']->value){
$_smarty_tpl->tpl_vars['cool']->_loop = true;
?><span><a href="<?php echo $_smarty_tpl->tpl_vars['cool']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['cool']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cool']->value['web_name'];?>
</a></span><?php } ?></li>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['csite']['iteration']%5==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['csite']['iteration']!=20){?>
                    <li class="sline"></li>
                    <?php }?>
                	<?php } ?>
            	</ul>
        	</div>
            <div class="blank10"></div>
            <div id="rowbox" class="clearfix">
    			<div id="newsbox">
        			<h3>站点资讯</h3>
                	<ul class="newslist">
                		<?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = get_articles(0,8,false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value){
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
                		<li><span><?php echo $_smarty_tpl->tpl_vars['art']->value['art_ctime'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['art_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['art_title'];?>
</a></li>
                    	<?php } ?>
                	</ul>
        		</div>
                <div class="line"></div>
				<div id="exlink">
            		<h3>链接交换</h3>
                	<ul class="exlist">
                		<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = get_weblinks(0,8); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['web_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['link']->value['link_name'];?>
 - PR<?php echo $_smarty_tpl->tpl_vars['link']->value['web_grank'];?>
，百度权重<?php echo $_smarty_tpl->tpl_vars['link']->value['web_brank'];?>
，<?php echo $_smarty_tpl->tpl_vars['link']->value['deal_type'];?>
友情链接</a></li>
                   		<?php } ?>
                	</ul>
                </div>
            </div>
    	</div>
	</div>
    <div class="blank10"></div>
	<div id="inbox" class="clearfix">
      	<h3>最新点入</h3>
        <ul class="inlist">
          	
          	<?php  $_smarty_tpl->tpl_vars['instat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instat']->_loop = false;
 $_from = get_websites(0,30,false,false,'instat'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['instat']->key => $_smarty_tpl->tpl_vars['instat']->value){
$_smarty_tpl->tpl_vars['instat']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['instat']->value['web_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['instat']->value['web_name'];?>
</a></li>
            <?php } ?>
            
        </ul>
	</div>
	<div class="blank10"></div>
    <div id="linkbox" class="clearfix">
        <h3>友情链接</h3>
        <ul class="linklist">
        	<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = get_links(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['link_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['link']->value['link_name'];?>
</a></li>
            <?php } ?>
    	</ul>
    </div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
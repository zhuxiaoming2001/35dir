<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:13:12
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2528367a960b8eea227-75781381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b94eed781f603aea986e97c880c19b76f327eb9' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\default\\header.html',
      1 => 1353846440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2528367a960b8eea227-75781381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'site_title' => 0,
    'stat' => 0,
    'site_root' => 0,
    'site_path' => 0,
    'site_rss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a960b8ef8d36_83717622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a960b8ef8d36_83717622')) {function content_67a960b8ef8d36_83717622($_smarty_tpl) {?>	<div id="header">
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
    <div class="sitepath"><span style="float: right;"><?php echo get_adcode(1);?>
</span><?php echo $_smarty_tpl->tpl_vars['site_path']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['site_rss']->value;?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:22:49
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\main.html" */ ?>
<?php /*%%SmartyHeaderCode:2370267a962f98eccc1-92032987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5518e61bd12de4853cbf969c19964364aa1321a2' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\main.html',
      1 => 1383892551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2370267a962f98eccc1-92032987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'myself' => 0,
    'stat' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a962f9909562_84582584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a962f9909562_84582584')) {function content_67a962f9909562_84582584($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3 class="title"><em>用户登录信息</em></h3>
	<div style="padding: 15px 10px;"><?php echo $_smarty_tpl->tpl_vars['myself']->value['user_email'];?>
，登陆时间：<?php echo $_smarty_tpl->tpl_vars['myself']->value['login_time'];?>
　登陆IP：<?php echo $_smarty_tpl->tpl_vars['myself']->value['login_ip'];?>
　登陆次数： <?php echo $_smarty_tpl->tpl_vars['myself']->value['login_count'];?>
 次</div>
               
	<h3 class="title"><em>站内数据统计</em></h3>
    <div style="padding: 10px;">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr height="30">
				<td width="50%">网站广告：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['adver'];?>
</b>　-　<a href="adver.php">快速管理&raquo;</a></td>
				<td width="50%">友情链接：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['link'];?>
</b>　-　<a href="link.php">快速管理&raquo;</a></td>
			</tr>
			<tr height="30">
				<td>网站提交：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['apply'];?>
</b>　-　<a href="website.php?status=2">快速管理&raquo;</a></td>
				<td>意见反馈：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['feedback'];?>
</b>　-　<a href="feedback.php">快速管理&raquo;</a></td>
			</tr>
			<tr height="30">
				<td>分类统计：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['category'];?>
</b>　-　<a href="category.php">快速管理&raquo;</a></td>
				<td>站点内容：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['website'];?>
</b>　-　<a href="website.php">快速管理&raquo;</a></td>
			</tr>
			<tr height="30">
				<td>文章内容：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['article'];?>
</b>　-　<a href="article.php">快速管理&raquo;</a></td>
				<td>注册会员：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['user'];?>
</b>　-　<a href="user.php">快速管理&raquo;</a></td>
			</tr>
			<tr height="30">
				<td>自定义页面：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['page'];?>
</b>　-　<a href="page.php">快速管理&raquo;</a></td>
                <td>自定义标签：&nbsp;<b style="color: #008800;"><?php echo $_smarty_tpl->tpl_vars['stat']->value['label'];?>
</b>　-　<a href="label.php">快速管理&raquo;</a></td>
			</tr>
		</table>
	</div>
                
	<h3 class="title"><em>服务器信息</em></h3>
    <div style="padding: 10px;">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr height="30">
				<td width="50%">服务器时间：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['datetime'];?>
</td>
				<td width="50%">服务器类型：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['software'];?>
</td>
			</tr>
			<tr height="30">
				<td>PHP版本：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['php_version'];?>
</td>
				<td>MySQL版本：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['mysql_version'];?>
</td>
			</tr>
			<tr height="30">
				<td>Smarty版本：<?php echo $_smarty_tpl->tpl_vars['server']->value['smarty_version'];?>
</td>
				<td>软件版本：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['soft_version'];?>
 - <a href="http://www.yzdir.com/" target="_blank">查看更新</a></td>
			</tr>
			<tr height="30">
            	<td>安全模式(safe_mode)：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['safemode'];?>
</td>
            	<td>全局变量(register_globals)：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['globals'];?>
</td>
			</tr>
			<tr height="30">
            	<td>伪静态(rewrite_module)：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['rewrite'];?>
 (只针对Apache有效)</td>
				<td>内存占用(memory_info)：&nbsp;<?php echo $_smarty_tpl->tpl_vars['server']->value['memory_info'];?>
</td>		
			</tr>
		</table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
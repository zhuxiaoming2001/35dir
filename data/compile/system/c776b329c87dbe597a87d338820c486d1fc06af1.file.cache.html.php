<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:12:44
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\cache.html" */ ?>
<?php /*%%SmartyHeaderCode:338367a9609c6c02c5-28712132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c776b329c87dbe597a87d338820c486d1fc06af1' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\cache.html',
      1 => 1353846456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338367a9609c6c02c5-28712132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'caches' => 0,
    'cache' => 0,
    'data' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a9609c6eaf50_80746541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a9609c6eaf50_80746541')) {function content_67a9609c6eaf50_80746541($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='info'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
	<div class="listbox">                    
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <div class="toolbar">
			<select name="act" id="act" class="sel">
			<option value="update_static">更新静态缓存</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="return confirm('确认执行此操作吗？');">
        </div>
        
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>缓存名称</th>
				<th>缓存说明</th>
				<th>生成时间</th>
				<th>修改时间</th>
				<th>缓存大小</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['cache'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cache']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['caches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cache']->key => $_smarty_tpl->tpl_vars['cache']->value){
$_smarty_tpl->tpl_vars['cache']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['cache']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cache']->value['desc'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cache']->value['ctime'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cache']->value['mtime'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cache']->value['size'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=show&cache_id=<?php echo $_smarty_tpl->tpl_vars['cache']->value['name'];?>
">查看</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=update&cache_id=<?php echo $_smarty_tpl->tpl_vars['cache']->value['name'];?>
">更新</a></td>
			</tr>
			<?php } ?>
		</table>
		</form>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['action']->value=='show'){?>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
        	<tr>
            	<th>&nbsp;</th>
            	<td><pre><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</pre></td>
            </tr>
            <tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<input name="cache_id" type="hidden" id="cache_id" value="<?php echo $_smarty_tpl->tpl_vars['cache']->value['cache_id'];?>
">
					<input name="submit" type="submit" class="btn" value="更 新">&nbsp;
					<input name="reset" type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
                </td>
            </tr>
        </table>
        </form>
	</div>
	<?php }?>
            
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
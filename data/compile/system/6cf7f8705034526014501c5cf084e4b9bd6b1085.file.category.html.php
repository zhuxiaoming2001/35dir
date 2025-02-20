<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:12:26
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\category.html" */ ?>
<?php /*%%SmartyHeaderCode:101467a9608ae73a74-27163876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf7f8705034526014501c5cf084e4b9bd6b1085' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\category.html',
      1 => 1353846456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101467a9608ae73a74-27163876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'cate_mod' => 0,
    'root_id' => 0,
    'categories' => 0,
    'cate' => 0,
    'category_option' => 0,
    'row' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a9608aebb0d7_29986585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a9608aebb0d7_29986585')) {function content_67a9608aebb0d7_29986585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
	<h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?mod=<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
&act=add&root_id=<?php echo $_smarty_tpl->tpl_vars['root_id']->value;?>
">+添加新分类</a></span></h3>
	<div class="listbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>ID</th>
				<th>分类名称</th>
                <th>所属模块</th>
				<th>目录名称</th>
				<th>内容统计</th>
				<th>排列顺序</th>
				<th>栏目属性</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value){
$_smarty_tpl->tpl_vars['cate']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_name'];?>
 <span style="color: #999; font-size: 10px;">(<?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_childcount'];?>
)</span></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_mod'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_dir'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_postcount'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_order'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_attr'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['cate']->value['cate_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['cate']->_loop) {
?>
				<?php if ($_smarty_tpl->tpl_vars['root_id']->value==0){?>
				<tr><td colspan="8">无任何分类！</td></tr>
				<?php }else{ ?>
				<tr><td colspan="8">该分类下无任何子分类！<a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
&root_id=0">返回顶级分类</a></td></tr>
			<?php }?>
			<?php } ?>
		</table>
		</form>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?mod=<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
    	<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>所属分类：</th>
				<td><select name="root_id" id="root_id" class="sel"><option value="0">作为顶级分类</option><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select><input name="cate_mod" type="hidden" id="cate_mod" value="<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
"></td>
			</tr>
			<tr>
				<th>分类名称：</th>
				<td><input name="cate_name" type="text" class="ipt" id="cate_name" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
" />  <input name="cate_isbest" type="checkbox" id="cate_isbest" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['row']->value['cate_isbest'],1);?>
 /><label for="cate_isbest">设为推荐</label></td>
			</tr>
			<tr>
				<th>目录名称：</th>
				<td><input name="cate_dir" type="text" class="ipt" id="cate_dir" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_dir'];?>
" /></td>
			</tr>
			<tr>
				<th>跳转地址：</th>
				<td><input name="cate_url" type="text" class="ipt" id="cate_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_url'];?>
" /></td>
			</tr>
			<tr>
				<th>关 键 词：</th>
				<td><input name="cate_keywords" type="text" class="ipt" id="cate_keywords" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_keywords'];?>
" /><span class="tips">多个关键词之间用“逗号”隔开</span></td>
			</tr>
			<tr>
				<th valign="top">分类描述：</th>
				<td><textarea name="cate_description" cols="50" rows="6" class="ipt" id="cate_description"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_description'];?>
</textarea></td>
			</tr>
			<tr>
				<th>排列顺序：</th>
				<td><input name="cate_order" type="text" class="ipt" id="cate_order" size="10" maxlength="10" value="<?php echo !$_smarty_tpl->tpl_vars['row']->value['cate_order'] ? '0' : $_smarty_tpl->tpl_vars['row']->value['cate_order'];?>
" /></td>
			</tr>
			<tr class="btnbox">
            	<td>&nbsp;</td>
				<td>
                    <input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
                    <input name="cate_mod" type="hidden" id="cate_mod" value="<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['row']->value['cate_id']){?>
					<input name="cate_id" type="hidden" id="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
">
					<?php }?>
					<input type="submit" class="btn" value="保 存">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
        </form>
	</div>
	<?php }?>
    
	<?php if ($_smarty_tpl->tpl_vars['action']->value=='reset'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?mod=<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
            	<th>注意事项：</th>
				<td>如果选择复位所有分类，则所有分类都将作为一级分类，这时您需要重新对各个分类进行归属的基本设置。<br />不要轻易使用该功能，仅在做出了错误的设置而无法复原分类之间的关系和排序的时候使用。</td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
                    <input name="cate_mod" type="hidden" id="cate_mod" value="<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
">
					<input type="submit" class="btn" value="复 位">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
		</form>
	</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['action']->value=='merge'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?mod=<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
">返回列表&raquo;</a></span></h3>
	<div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>将分类：</th>
				<td><select name="source_id" id="source_id" class="sel"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></td>
			</tr>
			<tr>
				<th>合并到：</th>
				<td><select name="target_id" id="target_id" class="sel"><?php echo $_smarty_tpl->tpl_vars['category_option']->value;?>
</select></td>
			</tr>
			<tr>
            	<th>注意事项：</th>
				<td><font color="#ff0000">所有操作不可逆，请慎重操作！</font><br />不能在同一个分类内进行操作，不能将一个分类合并到其下属分类中，目标分类中不能含有子分类，合并后您所指定的分类（或者包括其下属分类）将被删除，所有内容将转移到目标分类中。</td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
                    <input name="cate_mod" type="hidden" id="cate_mod" value="<?php echo $_smarty_tpl->tpl_vars['cate_mod']->value;?>
">
					<input type="submit" class="btn" value="合 并">&nbsp;
					<input type="reset" class="btn" value="取 消" onClick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
';">
				</td>
			</tr>
		</table>
        </form>
	</div>
	<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
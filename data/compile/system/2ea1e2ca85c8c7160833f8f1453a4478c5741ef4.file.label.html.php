<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:12:39
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\label.html" */ ?>
<?php /*%%SmartyHeaderCode:1578367a960976d1f61-19124081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea1e2ca85c8c7160833f8f1453a4478c5741ef4' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\label.html',
      1 => 1353846458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1578367a960976d1f61-19124081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'labels' => 0,
    'label' => 0,
    'showpage' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a960976f7c22_36945829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a960976f7c22_36945829')) {function content_67a960976f7c22_36945829($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加新标签</a></span></h3>
    <div class="listbox">
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <div class="search">
        	<input name="keywords" type="text" id="keywords" class="ipt" size="30" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        	<input type="submit" class="btn" value="搜索" />
        </div>
        </form>
        
        <form name="mform" method="post" action="">
        <div class="toolbar">
			<select name="act" id="act" class="sel">
			<option value="del" style="color: #FF0000;">删除选定</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('label_id[]')==false){alert('请指定您要操作的标签ID！');return false;}else{return confirm('确认执行此操作吗？');}">
		</div>
                    
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>标签名称</th>
				<th>标签说明</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
?>
			<tr>
				<td><input name="label_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['label_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['label']->value['label_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['label']->value['label_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['label']->value['label_intro'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['label']->value['label_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['label']->_loop) {
?>
			<tr><td colspan="5">无任何自定义标签！</td></tr>
			<?php } ?>
		</table>
		</form>
        <div class="pagebox"><?php echo $_smarty_tpl->tpl_vars['showpage']->value;?>
</div>
    </div>
   <?php }?>
            
   <?php if ($_smarty_tpl->tpl_vars['action']->value=='add'||$_smarty_tpl->tpl_vars['action']->value=='edit'){?>
   <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">返回列表&raquo;</a></span></h3>
   <div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>标签名称：</th>
				<td><input name="label_name" type="text" class="ipt" id="label_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['label_name'];?>
" /><span class="tips">名称只能由英文字母开头，数字，下划线组成</span></td>
			</tr>
			<tr>
				<th>标签说明：</th>
				<td><input name="label_intro" type="text" class="ipt" id="label_intro" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['label_intro'];?>
" /><span class="tips">页面说明，可不填写，字数限制在50个以内</span></td>
			</tr>
			<tr>
				<th valign="top">标签内容：</th>
				<td>
					<script type="text/javascript">
					var editor;
					KindEditor.ready(function(K) {
						editor = K.create('textarea[name="label_content"]', {
							resizeType : 1,
							allowPreviewEmoticons : false,
							allowImageUpload : false,
							items : [
								'source', '|', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
								'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
								'insertunorderedlist', '|', 'emoticons', 'link']
						});
					});
                    </script>
                    <textarea name="label_content" id="label_content" cols="50" rows="6" class="ipt" style="width: 450px; height: 300px; visibility: hidden;"><?php echo $_smarty_tpl->tpl_vars['label']->value['label_content'];?>
</textarea>
                </td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['label']->value['label_id']){?>
					<input name="label_id" type="hidden" id="label_id" value="<?php echo $_smarty_tpl->tpl_vars['label']->value['label_id'];?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:12:36
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\adver.html" */ ?>
<?php /*%%SmartyHeaderCode:9367a96094c77e53-31412091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd405c590081fe557e0c70a9a67b303ccb0c0e968' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\adver.html',
      1 => 1353846456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9367a96094c77e53-31412091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'key_url' => 0,
    'adtype_option' => 0,
    'advers' => 0,
    'ad' => 0,
    'showpage' => 0,
    'pagetitle' => 0,
    'ad_type' => 0,
    'adver' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a96094ca19d5_12416970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a96094ca19d5_12416970')) {function content_67a96094ca19d5_12416970($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
    <h3 class="title"><em>广告列表</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加新广告</a></span></h3>
	<div class="listbox">
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <div class="search">
        	<input name="keywords" type="text" id="keywords" class="ipt" size="30" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        	<input type="submit" class="btn" value="搜索" />
        </div>
        </form>
        
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
        <div class="toolbar">
        	<select name="act" id="act" class="sel">
        	<option value="del" style="color: #FF0000;">删除选定</option>
        	</select>
        	<input type="submit" class="btn" value="应用" onClick="if(IsCheck('adver_id[]')==false){alert('请指定您要操作的广告ID！');return false;}else{return confirm('确认执行此操作吗？');}">
        	<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?type='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
        	<?php echo $_smarty_tpl->tpl_vars['adtype_option']->value;?>

        	</select>
        </div>
                        
    	<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>广告类型</th>
				<th>广告名称</th>
				<th>有效天数</th>
				<th>广告状态</th>
				<th>到期时间</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['advers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value){
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
			<tr>
				<td><input name="adver_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_days'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['ad']->value['adver_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['ad']->_loop) {
?>
			<tr><td colspan="8">无任何网站广告！</td></tr>
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
				<th>广告类型：</th>
				<td><input name="adver_type" type="radio" id="adver_type1" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['ad_type']->value,1);?>
 onClick="$('#url').show(); $('#code').hide();" /><label for="adver_type1">文字链接</label>　<input name="adver_type" type="radio" id="adver_type2" value="2"<?php echo opt_checked($_smarty_tpl->tpl_vars['ad_type']->value,2);?>
 onClick="$('#url').hide(); $('#code').show();" /><label for="adver_type2">广告代码</label></td>
			</tr>
			<tr>
				<th>广告名称：</th>
				<td><input name="adver_name" type="text" class="ipt" id="adver_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['adver']->value['adver_name'];?>
" /></td>
			</tr>
			<tr id="url" style="display: <?php echo $_smarty_tpl->tpl_vars['ad_type']->value==1 ? '' : 'none';?>
;">
				<th>广告地址：</th>
				<td><input name="adver_url" type="text" class="ipt" id="adver_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['adver']->value['adver_url'];?>
" /><span class="tips">例：http://www.example.com/</span></td>
			</tr>
			<tr id="code" style="display: <?php echo $_smarty_tpl->tpl_vars['ad_type']->value==2 ? '' : 'none';?>
;">
				<th valign="top">广告代码：</th>
				<td><textarea name="adver_code" cols="50" rows="10" class="ipt" id="adver_code"><?php echo $_smarty_tpl->tpl_vars['adver']->value['adver_code'];?>
</textarea></td>
			</tr>
			<tr>
				<th>过期提示：</th>
				<td><input name="adver_etips" type="text" class="ipt" id="adver_etips" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['adver']->value['adver_etips'];?>
" /></td>
			</tr>
			<tr>
				<th>有效天数：</th>
				<td><input name="adver_days" type="text" class="ipt" id="adver_days" size="10" maxlength="3" value="<?php echo !$_smarty_tpl->tpl_vars['adver']->value['adver_days'] ? '0' : $_smarty_tpl->tpl_vars['adver']->value['adver_days'];?>
" /> 天<span class="tips">当有效天数为0时，表示广告长期有效</span></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['adver']->value['adver_id']){?>
					<input name="adver_id" type="hidden" id="adver_id" value="<?php echo $_smarty_tpl->tpl_vars['adver']->value['adver_id'];?>
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
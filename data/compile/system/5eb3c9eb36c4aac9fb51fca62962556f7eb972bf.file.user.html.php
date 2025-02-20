<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:12:33
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\user.html" */ ?>
<?php /*%%SmartyHeaderCode:2345067a9609149d0f9-84051060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb3c9eb36c4aac9fb51fca62962556f7eb972bf' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\user.html',
      1 => 1353846460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2345067a9609149d0f9-84051060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'keywords' => 0,
    'key_url' => 0,
    'usertype_option' => 0,
    'users' => 0,
    'item' => 0,
    'showpage' => 0,
    'user' => 0,
    'status' => 0,
    'h_action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a960914c72f0_03926993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a960914c72f0_03926993')) {function content_67a960914c72f0_03926993($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['action']->value=='list'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em><span><a href="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?act=add">+添加新会员</a></span></h3>
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
			<option value="del" style="color: #f00;">删除选定</option>
            <option value="setpass" style="color: #083;">验证通过</option>
            <option value="nopass" style="color: #f60;">取消验证</option>
			</select>
			<input type="submit" class="btn" value="应用" onClick="if(IsCheck('user_id[]')==false){alert('请指定您要操作的会员ID！');return false;}else{return confirm('确认执行此操作吗？');}">
			<select class="sel" onChange="if(this.options[this.selectedIndex].value!=''){location='<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
?user_type='+this.options[this.selectedIndex].value+'<?php echo $_smarty_tpl->tpl_vars['key_url']->value;?>
';}">
			<?php echo $_smarty_tpl->tpl_vars['usertype_option']->value;?>

            </select>
		</div>
		
    	<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th><input type="checkbox" id="ChkAll" onClick="CheckAll(this.form)"></th>
				<th>ID</th>
				<th>会员类型</th>
				<th>电子邮件</th>
				<th>昵 称</th>
				<th>QQ</th>
				<th>注册时间</th>
				<th>会员状态</th>
				<th>操作选项</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><input name="user_id[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['nick_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_qq'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['join_time'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_operate'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
			<tr><td colspan="9">无任何会员！</td></tr>
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
				<th>会员类型：</th>
				<td><select name="user_type" id="user_type" class="sel"><?php echo $_smarty_tpl->tpl_vars['usertype_option']->value;?>
</select></td>
			</tr>
			<tr>
				<th>电子邮箱：</th>
				<td><input name="user_email" type="text" class="ipt" id="user_email" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
" /></td>
			</tr>
			<tr>
				<th>登录密码：</th>
				<td><input name="user_pass" type="text" class="ipt" id="user_pass" size="50" maxlength="50" value="" /></td>
			</tr>
			<tr>
				<th>会员昵称：</th>
				<td><input name="nick_name" type="text" class="ipt" id="nick_name" size="50" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nick_name'];?>
" /></td>
			</tr>
			<tr>
				<th>QQ号 码：</th>
				<td><input name="user_qq" type="text" class="ipt" id="user_qq" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_qq'];?>
" /></td>
			</tr>
			<tr>
				<th>会员状态：</th>
				<td><select name="user_status" id="user_status" class="sel"><option value="0" style="color: #f60;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,0);?>
>待验证</option><option value="1" style="color: #080;"<?php echo opt_selected($_smarty_tpl->tpl_vars['status']->value,1);?>
>已验证</option></select></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['action']->value=='edit'&&$_smarty_tpl->tpl_vars['user']->value['user_id']){?>
					<input name="user_id" type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
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
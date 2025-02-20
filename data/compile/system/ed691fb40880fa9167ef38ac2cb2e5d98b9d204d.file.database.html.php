<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:12:41
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\database.html" */ ?>
<?php /*%%SmartyHeaderCode:2042967a96099d84ef9-39054220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed691fb40880fa9167ef38ac2cb2e5d98b9d204d' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\database.html',
      1 => 1353846456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2042967a96099d84ef9-39054220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'pagetitle' => 0,
    'fileurl' => 0,
    'tables' => 0,
    'item' => 0,
    'h_action' => 0,
    'files' => 0,
    'table_num' => 0,
    'table_rows' => 0,
    'data_size' => 0,
    'index_size' => 0,
    'free_size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a96099dae712_27959355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a96099dae712_27959355')) {function content_67a96099dae712_27959355($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='backup'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>备份类型：</th>
				<td><input name="baktype" type="radio" id="baktype1" value="full" checked="checked" onclick="$('#table').hide();"><label for="baktype1">全部备份(推荐) - 备份数据库所有表</label><br /><input name="baktype" type="radio" id="baktype2" value="custom" onclick="$('#table').show();"><label for="baktype2">自定义备份 - 根据自行选择备份数据表</label></td>
			</tr>
			<tr id="table" style="display: none;">
				<th>数 据 表：</th>
				<td>
                	<table cellpadding="0" cellspacing="1">
                   	  <tr>
                      	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
						<td style="padding: 3px 10px;"><input name="table[]" type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" /><label for="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</label></td>
                      	<?php if (!($_smarty_tpl->tpl_vars['item']->iteration % 4)){?></tr><tr><?php }?>
                        <?php } ?>
                      </tr>
                  </table>      
              </td>
			</tr>
			<tr>
				<th>分卷文件大小：</th>
				<td><input name="volsize" type="text" class="ipt" id="volsize" size="10" maxlength="10" value="2048" /> KB</td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<input type="submit" class="btn" value="数据库备份">
				</td>
			</tr>
		</table>
        </form>
	</div>           
	<?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='restore'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="listbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>文件名称</th>
				<th>文件大小</th>
				<th>修改时间</th>
				<th>操作选项</th>
			</tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
            <tr>
            	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['filename'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['filesize'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['filemtime'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['fileoper'];?>
</td>
            </tr>
            <?php } ?>
		</table>
        </form>
	</div>           
	<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['action']->value=='maintain'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="formbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>选择操作：</th>
				<td><input name="do[]" type="checkbox" id="check" value="check" checked="checked"><label for="check">检查表</label></td>
			</tr>
			<tr>
				<th></th>
				<td><input name="do[]" type="checkbox" id="repair" value="repair" checked="checked"><label for="repair">修复表</label></td>
			</tr>
			<tr>
				<th></th>
				<td><input name="do[]" type="checkbox" id="analyze" value="analyze" checked="checked"><label for="analyze">分析表</label></td>
			</tr>
			<tr>
				<th></th>
				<td><input name="do[]" type="checkbox" id="optimize" value="optimize" checked="checked"><label for="optimize">优化表</label></td>
			</tr>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="<?php echo $_smarty_tpl->tpl_vars['h_action']->value;?>
">
					<input type="submit" class="btn" value="数据库维护">
				</td>
			</tr>
		</table>
        </form>
	</div>    
	<?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['action']->value=='dbinfo'){?>
    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="listbox">
		<form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
 		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<tr>
				<th>数据表名称</th>
                <th>数据表类型</th>
				<th>创建时间</th>
				<th>最后更新时间</th>
				<th>记录数</th>
                <th>数据</th>
                <th>索引</th>
                <th>碎片</th>
			</tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
            <tr>
            	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['Name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Engine'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Create_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Update_time'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Rows'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Data_length'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Index_length'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['Data_free'];?>
</td>
            </tr>
            <?php } ?>
            <tr>
            	<td colspan="4">共 <?php echo $_smarty_tpl->tpl_vars['table_num']->value;?>
 个数据表</td>
                <td><?php echo $_smarty_tpl->tpl_vars['table_rows']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data_size']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['index_size']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['free_size']->value;?>
</td>
            </tr>
		</table>
        </form>
	</div>           
	<?php }?>
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.10, created on 2025-02-10 10:11:41
         compiled from "D:\wwwroot\hello6206789\wwwroot\themes\system\option.html" */ ?>
<?php /*%%SmartyHeaderCode:2797467a9605dd0d4c2-31885952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3e45861008d84c224e4f5af79d467d3c02e626c' => 
    array (
      0 => 'D:\\wwwroot\\hello6206789\\wwwroot\\themes\\system\\option.html',
      1 => 1383892514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2797467a9605dd0d4c2-31885952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'fileurl' => 0,
    'option' => 0,
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_67a9605dd4e492_98422988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_67a9605dd4e492_98422988')) {function content_67a9605dd4e492_98422988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <h3 class="title"><em><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</em></h3>
    <div class="formbox">
        <form name="mform" method="post" action="<?php echo $_smarty_tpl->tpl_vars['fileurl']->value;?>
">
		<table width="100%" border="0" cellspacing="1" cellpadding="0">
			<?php if ($_smarty_tpl->tpl_vars['option']->value=='basic'){?>
			<tr>
				<th>网站名称：</th>
				<td><input name="cfg[site_name]" type="text" class="ipt" id="site_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_name'];?>
" /></td>
			</tr>
			<tr>
				<th>网站标题：</th>
				<td><input name="cfg[site_title]" type="text" class="ipt" id="site_title" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_title'];?>
" /></td>
			</tr>
			<tr>
				<th>网站地址：</th>
				<td><input name="cfg[site_url]" type="text" class="ipt" id="site_url" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_url'];?>
" />
				<span class="tips">格式 http://www.yzdir.com/</span></td>
			</tr>
			<tr>
				<th>安装目录：</th>
				<td><input name="cfg[site_root]" type="text" class="ipt" id="site_root" size="50" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_root'];?>
" readonly /><span class="tips">系统自动获得正确的路径，仅需手工保存。</span></td>
			</tr>
			<tr>
				<th>站长邮件：</th>
				<td><input name="cfg[admin_email]" type="text" class="ipt" id="admin_email" size="50" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['admin_email'];?>
" /><span class="tips">用来发送邮件的邮箱地址</span></td>
			</tr>
			<tr>
				<th valign="top">关 键 词：</th>
				<td><textarea name="cfg[site_keywords]" cols="50" rows="6" class="ipt" id="site_keywords"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_keywords'];?>
</textarea></td>
			</tr>
			<tr>
				<th valign="top">网站描述：</th>
				<td><textarea name="cfg[site_description]" cols="50" rows="6" class="ipt" id="site_description"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_description'];?>
</textarea></td>
			</tr>
			<tr>
				<th valign="top">页底版权：</th>
				<td><textarea name="cfg[site_copyright]" cols="50" rows="6" class="ipt" id="site_copyright"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_copyright'];?>
</textarea></td>
			</tr>
        	<?php }elseif($_smarty_tpl->tpl_vars['option']->value=='misc'){?>
			<tr>
				<th>是否启用Gzip压缩功能：</th>
				<td><input name="cfg[is_enabled_gzip]" type="radio" id="is_enabled_gzip_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_gzip'],'yes');?>
><label for="is_enabled_gzip_y">开启</label>　<input name="cfg[is_enabled_gzip]" type="radio" id="is_enabled_gzip_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_gzip'],'no');?>
><label for="is_enabled_gzip_n">关闭</label></td>
			</tr>
			<tr>
				<th>是否启用站点提交功能：</th>
				<td><input name="cfg[is_enabled_submit]" type="radio" id="is_enabled_submit_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit'],'yes');?>
 onclick="$('#submit_reason').hide();"><label for="is_enabled_submit_y">开启</label>　<input name="cfg[is_enabled_submit]" type="radio" id="is_enabled_submit_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit'],'no');?>
 onclick="$('#submit_reason').show();"><label for="is_enabled_submit_n">关闭</label></td>
			</tr>
			<tr id="submit_reason" style="display: <?php echo opt_display($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_submit'],'no');?>
;">
				<th valign="top">关闭站点提交功能说明：</th>
				<td><textarea name="cfg[submit_close_reason]" cols="50" rows="6" class="ipt" id="submit_close_reason"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['submit_close_reason'];?>
</textarea></td>
			</tr>
			<tr>
				<th>是否开启链接检测功能：</th>
				<td><input name="cfg[is_enabled_linkcheck]" type="radio" id="is_enabled_linkcheck_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_linkcheck'],'yes');?>
 onclick="$('#link_check').show();"><label for="is_enabled_linkcheck_y">开启</label>　<input name="cfg[is_enabled_linkcheck]" type="radio" id="is_enabled_linkcheck_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_linkcheck'],'no');?>
 onclick="$('#link_check').hide();"><label for="is_enabled_linkcheck_n">关闭</label></td>
			</tr>
            <tbody id="link_check" style="display: <?php echo opt_display($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_linkcheck'],'yes');?>
;">
			<tr>
				<th>目标网站所链接的名称：</th>
				<td><input name="cfg[check_link_name]" type="text" class="ipt" id="check_link_name" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['check_link_name'];?>
" /><span class="tips">要检查的链接名称</span></td>
			</tr>
			<tr>
				<th>目标网站所链接的地址：</th>
				<td><input name="cfg[check_link_url]" type="text" class="ipt" id="check_link_url" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['check_link_url'];?>
" /><span class="tips">要检查的链接地址，只需输入域名</span></td>
			</tr>
            </tbody>
			<tr>
				<th>站点数据更新周期设置：</th>
				<td><input name="cfg[data_update_cycle]" type="text" class="ipt" id="data_update_cycle" size="10" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['data_update_cycle'];?>
" /> 天<span class="tips">系统自动更新PR, SPR, Alexa, 链接检测等</span></td>
			</tr>
			<tr>
				<th>文章中允许的链接数量：</th>
				<td><input name="cfg[article_link_num]" type="text" class="ipt" id="article_link_num" size="10" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['article_link_num'];?>
" /><span class="tips">发布文章时，文章中允许的链接数量，默认为3</span></td>
			</tr>
            <tr>
				<th>图片文件保存目录设置：</th>
				<td><input name="cfg[upload_dir]" type="text" class="ipt" id="upload_dir" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['upload_dir'];?>
" /><span class="tips">只需填写存放图片的目录名称即可，用于存放站点及文章图片</span></td>
			</tr>
            <tr>
            	<th>热门搜索关键词设置：</th>
                <td><input name="cfg[search_words]" type="text" class="ipt" id="search_words" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['search_words'];?>
" onBlur="javascript:this.value=this.value.replace(/，/ig,',');" /><span class="tips">多个词之间用英文的“,”逗号隔开</span></td>
            </tr>
            <tr>
            	<th>非法关键词过滤设置：</th>
                <td><textarea name="cfg[filter_words]" cols="50" rows="6" class="ipt" id="filter_words" onBlur="javascript:this.value=this.value.replace(/，/ig,',');"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['filter_words'];?>
</textarea><span class="tips">多个词之间用英文的“,”逗号隔开</span></td>
            </tr>
            <tr>
            	<th>快速发布网站公告信息：</th>
                <td><textarea name="cfg[site_notice]" cols="50" rows="6" class="ipt" id="site_notice"><?php echo $_smarty_tpl->tpl_vars['cfg']->value['site_notice'];?>
</textarea></td>
            </tr>
            <?php }elseif($_smarty_tpl->tpl_vars['option']->value=='user'){?>
			<tr>
				<th>是否允许新用户注册：</th>
				<td><input name="cfg[is_enabled_register]" type="radio" id="is_enabled_register_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_register'],'yes');?>
><label for="is_enabled_register_y">允许</label>　<input name="cfg[is_enabled_register]" type="radio" id="is_enabled_register_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_register'],'no');?>
><label for="is_enabled_register_n">禁止</label><span class="tips">禁止后用户将无法注册</span></td>
			</tr>
			<tr>
				<th>新用户注册验证：</th>
				<td><input name="cfg[register_email_verify]" type="radio" id="register_email_verify_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['register_email_verify'],'no');?>
><label for="register_email_verify_n">无</label>　<input name="cfg[register_email_verify]" type="radio" id="register_email_verify_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['register_email_verify'],'yes');?>
><label for="register_email_verify_y">Email验证</label><span class="tips">“Email验证”将向用户注册Email发送一封验证邮件以确认邮箱的有效性；</span></td>
			</tr>
			<tr>
				<th>是否启用QQ一键登录：</th>
				<td><input name="cfg[is_enabled_connect]" type="radio" id="is_enabled_connect_y" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_connect'],'yes');?>
><label for="is_enabled_connect_y">允许</label>　<input name="cfg[is_enabled_connect]" type="radio" id="is_enabled_connect_n" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['is_enabled_connect'],'no');?>
><label for="is_enabled_connect_n">禁止</label><span class="tips">启用后将允许用户使用QQ登录或注册</span></td>
			</tr>
            <tr>
				<th>QQ一键登录APP ID：</th>
				<td><input name="cfg[qq_appid]" type="text" class="ipt" id="qq_appid" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qq_appid'];?>
" /><span class="tips">申请地址：http://connect.qq.com/</span></td>
			</tr>
            <tr>
				<th>QQ一键登录APP KEY：</th>
				<td><input name="cfg[qq_appkey]" type="text" class="ipt" id="qq_appkey" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['qq_appkey'];?>
" /><span class="tips">同上</span></td>
			</tr>
        	<?php }elseif($_smarty_tpl->tpl_vars['option']->value=='link'){?>
            <tr>
            	<th>网站URL链接结构设置：</th>
                <td><input name="cfg[link_struct]" type="radio" id="link_struct_0" value="0"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],0);?>
><label for="link_struct_0">默认 - http://www.domain.com/?mod=category</label><br /><input name="cfg[link_struct]" type="radio" id="link_struct_1" value="1"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],1);?>
><label for="link_struct_1">文件型 - http://www.domain.com/category-1-2.html</label><br /><input name="cfg[link_struct]" type="radio" id="link_struct_2" value="2"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],2);?>
><label for="link_struct_2">目录和文件型 - http://www.domain.com/category/1-2.html</label><br /><input name="cfg[link_struct]" type="radio" id="link_struct_3" value="3"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['link_struct'],3);?>
><label for="link_struct_3">目录型 - http://www.domain.com/category/1/2</label></td>
            </tr>
        	<?php }elseif($_smarty_tpl->tpl_vars['option']->value=='mail'){?>
			<tr>
				<th>SMTP服务器地址：</th>
				<td><input name="cfg[smtp_host]" type="text" class="ipt" id="smtp_host" size="50" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_host'];?>
" /><span class="tips">发送邮件的服务器地址，例smtp.126.com</span></td>
			</tr>
			<tr>
				<th>SMTP服务器端口：</th>
				<td><input name="cfg[smtp_port]" type="text" class="ipt" id="smtp_port" size="10" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_port'];?>
" /><span class="tips">默认端口为25</span></td>
			</tr>
			<tr>
				<th>是否启用SMTP验证功能：</th>
				<td><input name="cfg[smtp_auth]" type="radio" id="smtp_auth1" value="yes"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['smtp_auth'],'yes');?>
><label for="smtp_auth1">开启</label>　<input name="cfg[smtp_auth]" type="radio" id="smtp_auth0" value="no"<?php echo opt_checked($_smarty_tpl->tpl_vars['cfg']->value['smtp_auth'],'no');?>
><label for="smtp_auth0">关闭</label><span class="tips">通常需要开启</span></td>
			</tr>
			<tr>
				<th>SMTP服务器帐号：</th>
				<td><input name="cfg[smtp_user]" type="text" class="ipt" id="smtp_user" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_user'];?>
" /><span class="tips">登录邮件服务器的帐号</span></td>
			</tr>
			<tr>
				<th>SMTP服务器密码：</th>
				<td><input name="cfg[smtp_pass]" type="password" class="ipt" id="smtp_pass" size="30" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['smtp_pass'];?>
" /><span class="tips">登录邮件服务器的密码</span></td>
			</tr>
        	<?php }?>
			<tr class="btnbox">
            	<th>&nbsp;</th>
				<td>
					<input name="act" type="hidden" id="act" value="update">
					<input type="submit" class="btn" value="保 存">
				</td>
			</tr>
		</table>
		</form>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
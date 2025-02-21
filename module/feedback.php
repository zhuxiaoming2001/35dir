<?php
if (!defined('IN_HANFOX')) exit('Access Denied');

$pagename = '意见反馈';
$pageurl = '?mod=feedback';
$tempfile = 'feedback.html';

$smarty->caching = false;
	
if (!$smarty->isCached($tempfile)) {	
	$smarty->assign('site_title', $pagename.' - '.$options['site_name']);
	$smarty->assign('site_keywords', '意见反馈，问题反馈，用户反馈，意见与建议');
	$smarty->assign('site_description', '您的意见和建议，将帮助我们改进产品和服务，欢迎您提出宝贵建议和意见！');
	$smarty->assign('site_path', get_sitepath().' &raquo; '.$pagename);
	$smarty->assign('site_rss', get_rssfeed());
	$smarty->assign('pagename', $pagename);
	
	if ($_POST['action'] == 'send') {
		$fb_nick = trim($_POST['nick']);
		$fb_email = trim($_POST['email']);
		$fb_content = trim($_POST['content']);
		$check_code = strtolower(trim($_POST['checkcode']));
		
		$fb_date = time();
		if (empty($fb_nick)) {
			msgbox('请输入昵称！');
		}
		
		if (empty($fb_email)) {
			msgbox('请输入电子邮件！');
		} else {
			if (!is_valid_email($fb_email)) {
				msgbox('请输入正确的电子邮件地址！');
			}
		}
		
		if (empty($fb_content) || strlen($fb_content) < 20) {
			msgbox('请输入意见内容，且长度不能小于20个字符！');
		}
		
		if (empty($check_code) || $check_code != $_SESSION['code']) {
			unset($_SESSION['code']);
			msgbox('您输入的验证码不正确，请重新输入！');	
		}
			
		$data = array(
			'fb_nick' => $fb_nick,
			'fb_email' => $fb_email,
			'fb_content' => $fb_content,
			'fb_date' => $fb_date,
		);
		
		$DB->insert($DB->table('feedbacks'), $data);
		unset($_SESSION['code']);
		//发送邮件
			if (!empty($options['smtp_host']) && !empty($options['smtp_port']) && !empty($options['smtp_auth']) && !empty($options['smtp_user'])  && !empty($options['smtp_pass'])) {
				require(APP_PATH.'include/sendmail.php');
				
				$smarty->assign('site_name', $options['site_name']);
				$smarty->assign('site_url', $options['site_url']);
				$smarty->assign('user_email', $user_email);
				$smarty->assign('user_pass', $user_pass);
				$smarty->assign('post_time', date('Y-m-d H:i:s', $post_time));
				$smarty->assign('active_link', $active_link);
				$smarty->assign('fb_content', $fb_content);
				$smarty->assign('fb_email', $fb_email);
				$smarty->assign('fb_date', $fb_date);
				$mailbody = $smarty->fetch('feedback_mail.html');

				$admin_email = $options['admin_email'];// 获取管理员邮箱
                if (!sendmail($admin_email, '【'.$options['site_name'].'】新的用户反馈', $mailbody)) {
					msgbox('邮件发送失败！请检查邮件发送功能设置是否正确或邮件地址错误！');	
				}
			}		
		msgbox('您的意见已经提交，谢谢您对我们的支持！', './');
	}
}
		
smarty_output($tempfile);
?>

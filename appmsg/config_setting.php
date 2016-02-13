<?php
if(!defined('IN_SYS')) {
	exit('Access Denied');
}
$_SC['site_name']       = '微笑微店';
$_SC['lang']            = 'zh-cn';
$_SC['notification_email']='notification@sylai.com';
$_SC['notification_email_pwd']='no112233';
$_SC['site_host']='http://'.$_SERVER['HTTP_HOST'];
$_SC['api_token']='weixiao';
$_SC['api_url']=$_SC['site_host'].'/open/wx_api.php';
$_SC['push_api_token']='weixiao';
$_SC['push_api_url']=$_SC['site_host'].'/open/mpwx_push.php';
$_SC['captcha']=false;  //登录是否需要验证码
$_SC['img_url']=$_SC['site_host'].'/uploads';
$_SC['cookiedomain']='.sylai.com';
?>
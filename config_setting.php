<?php
if(!defined('IN_SYS')) {
	exit('Access Denied');
}

$_SC['site_name']       = '微笑微信';  //站点的名字
$_SC['lang']            = 'zh-cn';
$_SC['notification_email']='notification@sylai.com'; //推送邮箱的地址，目前暂时只支持QQ企业邮箱
$_SC['notification_email_pwd']='';   //推送邮箱的密码
$_SC['site_host']='http://'.$_SERVER['HTTP_HOST'];
$_SC['api_token']='weixiao'; //官方平台开发者模式里的TOKEN
$_SC['api_url']=$_SC['site_host'].'/open/mpwx.php'; 
$_SC['push_api_token']='weixiao';   //内部推送用，官方平台开发者模式里的TOKEN
$_SC['push_api_url']=$_SC['site_host'].'/open/mpwx_push.php';
$_SC['captcha']=false;  //登录是否需要验证码

$_SC['img_url']=$_SC['site_host'].'/uploads';
?>
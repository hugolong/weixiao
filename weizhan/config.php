<?php
if(!defined('IN_SYS')) {
	exit('Access Denied');
}

include_once('../config.php');



$_SC['ua']['is_ipad']   = strripos($_SERVER["HTTP_USER_AGENT"],'ipad');  //判断是否包含ipad关键字
$_SC['ua']['is_iphone'] = strripos($_SERVER["HTTP_USER_AGENT"],'iphone');  //判断是否包含iphone关键字
$_SC['ua']['is_android'] =strripos($_SERVER['HTTP_USER_AGENT'],'Android'); //判断是否Android;
$_SC['ua']['is_pc'] = strripos($_SERVER["HTTP_USER_AGENT"], 'windows nt'); //判断是否为(pc)电脑
$_SC['ua']['is_ucweb'] = strripos($_SERVER["HTTP_USER_AGENT"], 'UCWEB'); //判断是否为UC极速模式
$_SC['ua']['is_weixin'] = strripos($_SERVER["HTTP_USER_AGENT"], 'MicroMessenger'); //判断是否为微信浏览器
?>
<?php
if(!defined('IN_SYS')) {
	exit('Access Denied');
}

//配置参数
$_SC = array();
$_SC['dbhost']  		= 'localhost:3306'; //服务器地址
$_SC['dbuser']  		= 'root'; //数据库用户
$_SC['dbpw'] 	 		= ''; //数据库密码
$_SC['dbcharset'] 		= 'utf8'; //字符集
$_SC['pconnect'] 		= 0; //是否持续连接
$_SC['dbname']  		= 'weiphp'; //数据库
$_SC['charset'] 		= 'utf-8'; //页面字符集
$_SC['tablepre']        = 'dz_';    //表头
include_once('config_setting.php');
?>
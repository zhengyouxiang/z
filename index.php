<?php
/////////////////////////////////////////////////////////////////
//云边开源轻博, Copyright (C)   2010 - 2011  qing.thinksaas.cn 
//EMAIL:nxfte@qq.com QQ:234027573    
//$Id: index.php 29 2011-10-14 05:54:29Z anythink $

define('API_PATH',dirname(dirname(__FILE__))."/api/");
define('APP_PATH',dirname(__FILE__));
!defined("JJPATH") && define("JJPATH",dirname(__FILE__));
define('IN_APP',TRUE);
define("SP_PATH",APP_PATH.'/init');
date_default_timezone_set('PRC');
session_name('qingblog');
$lefttime = 24 * 3600;
session_set_cookie_params($lefttime,'/');
ini_set('session.gc_maxlifetime',$lefttime);
if(isset($_COOKIE['qingblog'])){ session_id($_COOKIE['qingblog']);}
if(isset($_POST['ssid'])) {session_id($_POST['ssid']); }//swfupload 提交也要判断
if(!is_file(APP_PATH."/config.php")){header('Location:install/');}
require(APP_PATH."/config.php"); //载入配置文件
require(SP_PATH."/apiinit.php");
require(SP_PATH."/init.php");
require(SP_PATH."/Extensions/thFunctions.php");
import(APP_PATH.'/controller/top.php'); //TOP全局控制器 
header("Content-type: text/html; charset=utf-8"); 
spRun();
?>
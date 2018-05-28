<?php
require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';
require_once 'function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();
//
//if(!$_POST){
//    ajaxCallback(-1,"未获取post传值");
//}
//
//
//$tem = $_POST['tem'];//获取温度
//$hum = $_POST['hum'];//获取湿度
////$tem = 30.3;
////$hum = 54;
//$arr = array(
//    "tem" => $tem,
//    "hum" => $hum,
//    "addtime" => date("Y-m-d H:i:s")
//);
//if ($db->insert($arr,tem)) {//插入数据操作
//    ajaxCallback(0,"添加成功","asdf");
//}
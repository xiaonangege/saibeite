<?php
require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';
require_once 'function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();

if(!$_POST){
    ajaxCallback(-1,"未获取post传值");
}

$tem = $_POST['tem'];//获取温度
$humidity = $_POST['humidity'];//获取湿度
//$tem = 11.3;
//$humidity = 45;
$arr = array(
    "tem" => $tem,
    "humidity" => $humidity,
    "creat_time" => date("Y-m-d H:i:s")
);

if ($db->insert($arr,t_h)) {//插入数据操作
    ajaxCallback(0,"添加成功");
}


?>
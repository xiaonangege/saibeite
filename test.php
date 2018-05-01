<?php
require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';
ini_set('date.timezone','Asia/Shanghai');
$db = new mysql();
$link = $db->connect2();

//数据库操作实例插入数据
//$now = date("Y-m-d H:i:s");
//echo $now;
//die();
$arr = array(
    "tem" => 1.25,
    "humidity" => 132,
    "creat_time" => date("Y-m-d H:i:s")
);
var_dump($arr);
$db->insert($arr,t_h);

?>
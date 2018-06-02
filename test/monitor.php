<?php
/**
 * Created by PhpStorm.
 * Author: xiaoxiaonan
 * description：
 * Date: 2018/6/2
 * Time: 21:05
 */
require_once '../db/mysqlfunction.php';
require_once '../db/mysqlconfig.php';
require_once '../function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();

$sql='select * from `monitor`';

$result=$db->fetchAll($sql);
ajaxCallback(0,"成功",$result);

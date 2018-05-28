<?php
/**
 * Created by PhpStorm.
 * User: 23168
 * Date: 2018/5/28
 * Time: 18:38
 */
require_once '../db/mysqlfunction.php';
require_once '../db/mysqlconfig.php';
require_once '../function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();
$sql='select * from `picture` order by `addtime` ASC';
$result=$db->fetchAll($sql);
var_dump($result);
ajaxCallback(0,"获取图片成功",$result);
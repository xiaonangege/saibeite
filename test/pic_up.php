<?php
/**
 * Created by PhpStorm.
 * User: 23168
 * Date: 2018/5/28
 * Time: 17:37
 */
require_once '../db/mysqlfunction.php';
require_once '../db/mysqlconfig.php';
require_once '../function.php';//调用函数
$db = new mysql();
$link = $db->connect2();
if(!$_POST){
    ajaxCallback(-1,"未获取post传值");
}
$img=$_POST['img'];
$img='img';

$arr=array(
    'img'=>$img
);
$table='picture';
if ($db->insert($arr,$table)) {//插入数据操作
    ajaxCallback(0,"添加成功");
}

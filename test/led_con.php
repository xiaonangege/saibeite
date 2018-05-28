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
$id=$_POST['id'];
$state=$_POST['state'];

$arr=array(
	'state'=>$state
);
$con='id='.$id;
$table='switchon';
if ($db->update($arr,$table,$con)) {//插入数据操作
	ajaxCallback(0,"添加成功");
}

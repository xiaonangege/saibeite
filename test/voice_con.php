<?php
/**
 * Created by PhpStorm.
 * Author: xiaoxiaonan
 * description：
 * Date: 2018/6/2
 * Time: 21:24
 */
require_once '../db/mysqlfunction.php';
require_once '../db/mysqlconfig.php';
require_once '../function.php';//调用函数
$db = new mysql();
$link = $db->connect2();
if(!$_POST){
	ajaxCallback(-1,"未获取post传值");
}
$state=$_POST['state'];

$arr=array(
	'state'=>$state
);
$con='id=1';
$table='voice';
if ($db->update($arr,$table,$con)) {//插入数据操作
	ajaxCallback(0,"添加成功");
}

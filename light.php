<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2018/5/19
 * Time: 17:53
 */

require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';
require_once 'function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();

$state = $_POST['state'];

$arr = array(
    "state" => $state,
    "addtime" => date("Y-m-d H:i:s")
);
$id=1;
$con='id='.$id;
if ($db->update($arr,switchon,$con)) {//插入数据操作
    ajaxCallback(0,"添加成功","asdf");
}
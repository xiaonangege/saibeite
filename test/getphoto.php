<?php
/**
 * Created by PhpStorm.
 * User: 23168
 * Date: 2018/5/28
 * Time: 18:33
 */
require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';
require_once 'function.php';//调用函数
$url=$_POST['url'];
ini_set('date.timezone','Asia/Shanghai');//设置时间时区

$arr = array(
    "url" => $url,
    "addtime" => date("Y-m-d H:i:s")
);
if ($db->insert($arr,'picture')) {//插入数据操作
    ajaxCallback(0,"添加成功");
}
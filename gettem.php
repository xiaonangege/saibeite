<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 2018/5/19
 * Time: 16:39
 */

require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';
require_once 'function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();

$sql='select * from tem order by id desc LIMIT 0,10';

$result=$db->fetchAll($sql);

ajaxCallback(0,"添加成功",$result);

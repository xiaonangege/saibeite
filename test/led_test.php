<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/5/27
 * Time: 18:08
 */
require_once '../db/mysqlfunction.php';
require_once '../db/mysqlconfig.php';
require_once '../function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$db = new mysql();
$link = $db->connect2();

$sql='select * from `switchon` order by `id` ASC';

$result=$db->fetchAll($sql);
var_dump($result);
$data=array(
	"1"=>array(
		'state'=>1,
		'num'=>1
	),
	"2"=>array(
		'state'=>0,
		'num'=>2
	),
	"3"=>array(
		'state'=>0,
		'num'=>3
	),
	"4"=>array(
		'state'=>1,
		'num'=>4
	),

);
var_dump($data);
die();
ajaxCallback(0,"添加成功",$result);


$data=array(
    "1"=>array(
        'state'=>1,
        'num'=>1
    ),
    "2"=>array(
        'state'=>0,
        'num'=>2
    ),
    "3"=>array(
        'state'=>0,
        'num'=>3
    ),
    "4"=>array(
        'state'=>1,
        'num'=>4
    ),

);

ajaxCallback(0,'开灯',$data);
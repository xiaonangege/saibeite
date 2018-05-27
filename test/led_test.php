<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/5/27
 * Time: 18:08
 */
require_once '../function.php';//调用函数
$data=array(
    "1"=>array(
        'state'=>1,
        'num'=>1
    ),
    "2"=>array(
        'state'=>1,
        'num'=>1
    ),
    "3"=>array(
        'state'=>1,
        'num'=>1
    ),
    "4"=>array(
        'state'=>1,
        'num'=>1
    ),

);

ajaxCallback(0,'开灯',$data);
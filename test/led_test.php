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
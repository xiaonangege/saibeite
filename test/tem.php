<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/5/27
 * Time: 22:13
 */
require_once '../function.php';//调用函数
$data=array(
    "1"=>array(
        'tem'=>20,
        'time'=>10
    ),
    "2"=>array(
        'tem'=>21,
        'time'=>11
    ),
    "3"=>array(
        'tem'=>26,
        'time'=>12
    ),
    "4"=>array(
        'tem'=>27,
        'time'=>13
    ),
    "5"=>array(
        'tem'=>28,
        'time'=>14
    ),
    "6"=>array(
        'tem'=>29,
        'time'=>15
    ),
    "7"=>array(
        'tem'=>35,
        'time'=>16
    ),
    "8"=>array(
        'tem'=>40,
        'time'=>17
    ),
);

ajaxCallback(0,'温度',$data);
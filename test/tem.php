<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/5/27
 * Time: 22:13
 */
require_once '../function.php';//调用函数
$data=array(
    "tem"=>array(20,21,22,30,31,35,36,20),
    "time"=>array(10,11,12,13,14,15,16,17),

);

ajaxCallback(0,'温度',$data);
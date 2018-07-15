<?php
require_once '../db/mysqlfunction.php';
require_once '../db/mysqlconfig.php';
require_once '../function.php';//调用函数
ini_set('date.timezone','Asia/Shanghai');//设置时间时区
if(!$_POST){
    ajaxCallback(-1,"未获取post传值");
}
$id = $_POST['id'];
$db = new mysql();
$link = $db->connect2();
$con='id='.$id;
$sql = 'select * from switchon where ' . $con;
$result = $db->fetchOne($sql);
if ($result){
    if ($result['state'] == '1'){
	$arr = array(
    	    "state" => '0',
    	    "addtime" => date("Y-m-d H:i:s")
	);
	if ($db->update($arr,'switchon',$con)){
	    ajaxCallback(0,'开锁','1');
	}
    }else{
    	ajaxCallback(0,"关锁","0");
    }
    ajaxCallback(0,"查询成功",$result);
}else{
    ajaxCallback(-1,"查询失败");
}

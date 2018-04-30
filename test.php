<?php
require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';

$db = new mysql();
$link = $db->connect2();
//var_dump($link);


$sql='SELECT * FROM one';
$rows = $db->fetchAll($sql);
var_dump($rows);

//
//if(!(mysqli_connect("localhost:3306","root","toor1234"))){
//    echo "出错";
//}
//else{
//    echo "链接成功";
//}
//include("db/db.class.php");
//$con = new DB();
//
//$con = new DB(array('dbname' => 'oilmis_wh'));
//$sql = "SELECT * FROM stock ";
//$arr = $con ->db_getAll($sql);

?>
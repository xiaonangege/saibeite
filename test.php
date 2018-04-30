<?php
require_once 'db/mysqlfunction.php';
require_once 'db/mysqlconfig.php';

$db = new mysql();
$link = $db->connect2();


$sql='SELECT * FROM one';
$rows = $db->fetchAll($sql);
var_dump($rows);


?>
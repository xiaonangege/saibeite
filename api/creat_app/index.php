<?php
 /*
 * description：
 * index.php
 * Created by PhpStorm.
 * PHP version 5
 * Author: xiaoxiaonan<xiaoxiaonan@se-edu.com>
 * Date: 2018/7/19
 * Time: 14:18
 */
require_once '../../db/mysqlfunction.php';
require_once '../../db/mysqlconfig.php';
echo "test";


ini_set('date.timezone','Asia/Shanghai');//设置时间时区
$dbmain = new mysql();
$link = $db->connect2();

echo "1";
if(empty($_POST['app_name'])){
	ajaxCallback(-1,'缺少应用名称');
}
if(empty($_POST['app_owner'])){
	ajaxCallback(-1,'缺少应用负责人姓名');
}
if(empty($_POST['redirect_uri'])){
	ajaxCallback(-1,'缺少应用回调地址');
}
//todo 中心id 中心名称 中心地址  门禁位置 备注 生成appkey 保存到数据库中
$parma = array(
	'branch_id' => intval($_POST['branch_id']),
	'address' => addslashes($_POST['address']),
	'positon' => addslashes($_POST['positon']),
	'remark' => addslashes($_POST['remark']),
);
echo "1";
$parma = array(
	'branch_id' => '103',
	'branch_title' => '赛诚智慧',
	'address' => '南京市玄武区珠江路222号',
	'position' => '公司门禁',
	'remark' => '控制门禁',
);
$parma['app_key'] = md5($parma['branch_id'].date('Y-m-d H:i:s').rand(1000,9999));
$parma['app_secret'] = md5($parma['branch_id'].$parma['branch_title'].date('Y-m-d H:i:s').rand(10000,99999));
if ($parma['app_secret'] && $parma['app_key']){
	$parma['state'] = '1';
	$parma['creat_time'] = date('Y-m-d H:i:s');
	if ($dbmain -> insert('face_lock_app', $parma ,true)){
		echo '插入成功';
	}else{
		echo '插入失败';
	}
}

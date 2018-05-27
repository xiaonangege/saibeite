<?php
/**
 * Created by PhpStorm.
 * User: 13248
 * Date: 2018/5/1
 * Time: 12:07
 */
function ajaxCallback($status, $message = '', $data = array()) {
    $return = array(
        'status' => strval($status),//状态 成功返回0 失败返回其他数字
        'message' => strval($message),//信息，失败时包含说明
        'data' => $data,//数据，成功时返回的数据
    );
    #header('Content-type: text/html; charset=utf-8');
    header('Content-type: application/json');
    echo json_encode($return);
    exit;
}

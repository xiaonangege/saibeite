<?php
class mysql{
    /**
     * 连接MYSQL函数
     * 连接MYSQL函数,通过常量的形式来连接数据库
     * 自定义配置文件，配置文件中自定义常量，包含需要使用的信息
     * @return resource
     */
    private $link;
    function connect2 (){
        //连接mysql
        $this->link=@mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die ('数据库连接失败<br/>ERROR '.mysql_errno().':'.mysql_error());
        //设置字符集
        mysqli_set_charset($this->link,DB_CHARSET);
        //打开指定的数据库
        mysqli_select_db($this->link,DB_DBNAME) or die('指定的数据库打开失败');
        return $this->link;
    }



    /* array(
    'username'=>'cy',
    'password'=>'123456',
    'email'=>'cy@qq.com'
    ) */

    /**
     * 插入记录的操作
     * @param array $array
     * @param string $table
     * @return boolean
     */
    function insert($array,$table){
        $keys=join(',',array_keys($array));
        $values="'".join("','", array_values($array))."'";
        $sql="insert {$table}({$keys}) VALUES ({$values})";
        $res=mysqli_query($this->link,$sql);
        if($res){
            return mysqli_insert_id($this->link);
        }else{
            return false;
        }
    }


    /**
     * MYSQL更新操作
     * @param array $array
     * @param string $table
     * @param string $where
     * @return number|boolean
     */
    function update($array,$table,$where=null){
	foreach ($array as $k=>$v){
            $set[] = "`{$k}`='{$v}'";
        }
	if (!$set){
	    return false;
	}
        $where=$where==null?'':' WHERE '.$where;
        $sql="UPDATE {$table} SET ".implode(',', $set)." {$where}";
        $res=mysqli_query($this->link,$sql);
        if ($res){
            return $res;
        }else {
            return false;
        }
    }


    /**
     * 删除记录的操作
     * @param string $table
     * @param string $where
     * @return number|boolean
     */
    function delete($table,$where=null){
        $where=$where==null?'':' WHERE '.$where;
        $sql="DELETE FROM {$table}{$where}";
        $res=mysqli_query($sql);
        if ($res){
            return mysqli_affected_rows();
        }else {
            return false;
        }
    }



    /**
     * 查询一条记录
     * @param string $sql
     * @param string $result_type
     * @return boolean
     */
    function fetchOne($sql,$result_type=MYSQLI_ASSOC){
        $result=mysqli_query($this->link,$sql);
        if ($result && mysqli_num_rows($result)>0){
            return mysqli_fetch_array($result,$result_type);
        }else {
            return false;
        }
    }





    /**
     * 得到表中的所有记录
     * @param string $sql
     * @param string $result_type
     * @return boolean
     */
    function fetchAll($sql,$result_type=MYSQLI_ASSOC){

        $result=mysqli_query($this->link,$sql);
//        $row=mysqli_fetch_array($result,$result_type);
//        echo $row;
        if ($result && mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_array($result,$result_type)){
                $rows[]=$row;
            }
            return $rows;
        }else {
            return false;
        }
    }


    /**取得结果集中的记录的条数
     * @param string $sql
     * @return number|boolean
     */
    function getTotalRows($sql){
        $result=mysqli_query($this->link,$sql);
        if($result){
            return mysqli_num_rows($result);
        }else {
            return false;
        }

    }

    /**释放结果集
     * @param resource $result
     * @return boolean
     */
    function  freeResult($result){
        return  mysqli_free_result($result);
    }



    /**断开MYSQL
     * @param resource $link
     * @return boolean
     */
    function close($link=null){
        return mysqli_close($link);
    }


    /**得到客户端的信息
     * @return string
     */
    function getClintInfo(){
        return mysqli_get_client_info();
    }


    /**得到MYSQL服务器端的信息
     * @return string
     */
    function getServerInfo($link=null){
        return mysqli_get_server_info($link);
    }



    /**得到主机的信息
     * @return string
     */
    function getHostInfo($link=null){
        return mysqli_get_host_info($link);
    }

    /**得到协议信息
     * @return string
     */
    function getProtoInfo($link=null){
        return mysqli_get_proto_info($link);
    }
}
?>

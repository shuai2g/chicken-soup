<?php
	/*
	 * 兼容php7使用php5版本的函数
	 * mysql_*系列函数在php5.5.0废弃，在php7开始移除。应该使用 MySQLi 或 PDO_MySQL 扩展来替换掉。
	 */
	if(!function_exists('mysql_connect')){

		function mysql_connect($dbhost, $dbuser, $dbpass){
			global $dbport;
			global $linkid;
			global $dbname;
			$linkid = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			return $linkid;
		}
		function mysql_select_db($dbone){
			global $linkid;
			global $dbname;
			$dbname = $dbone;
			return mysqli_select_db($linkid,$dbname);
		}
		function mysql_fetch_array($result, $type=''){
			if ($type) {
				return mysqli_fetch_array($result, $type);
			}else{
				return mysqli_fetch_array($result);
			}
		}
		function mysql_fetch_assoc($result){
			return mysqli_fetch_assoc($result);
		}
		function mysql_fetch_row($result){
			return mysqli_fetch_row($result);
		}
		function mysql_free_result($result){
			return mysqli_free_result($result);
		}
		function mysql_query($cxn){
			global $linkid;
			return mysqli_query($linkid,$cxn);
		}
		function mysql_insert_id(){
			global $linkid;
			return mysqli_insert_id($linkid);
		}
		function mysql_affected_rows(){
			global $linkid;
			return mysqli_affected_rows($linkid);
		}
		function mysql_escape_string($data){
			global $linkid;
			return mysqli_real_escape_string($linkid, $data);
		}
		function mysql_real_escape_string($data){
			global $linkid;
			return mysqli_real_escape_string($linkid, $data);
		}
		function mysql_close(){
			global $linkid;
			return mysqli_close($linkid);
		}
		function mysql_get_server_info(){
			global $linkid;
			return mysqli_get_server_info($linkid);
		}
		function mysql_num_rows($result){
			return mysqli_num_rows($result);
		}
	}
	$conn = mysql_connect("127.0.0.1","root","root"); //连接数据库地址、用户名、密码

	mysql_query("set names 'utf8'"); //数据库编码
	mysql_select_db("apps"); //数据库名称
?>

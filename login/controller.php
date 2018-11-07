<?php 

class controller{
	function __construct(){
		@mysql_connect("127.0.0.1","root","root");
		mysql_select_db("03q");
	}
	public function getUser(){
		$user = $_SESSION['name'];
		return $user;
	}
	public function login($name,$pwd){
		$sql = "select * from zyr where name='$name'";
		$res = mysql_query($sql);
		$data = mysql_fetch_assoc($res);
		if($data){
			if($pwd==$data['pwd']){
				session_start();
				$_SESSION['name'] = $name;
				return 1;
			}else{
				return 2;
			}
		}else{
				return 3;
		}
	}
	public function getOut(){
		session_destroy();
		return 1;

	}
}

?>
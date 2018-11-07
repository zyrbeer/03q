<?php
require "controller.php";
header("content-type:text/html;charset=utf-8");
class order extends controller{
	public function Login_do($data){
		$name = $data['name'];
		$pwd = $data['pwd'];
		$res = $this->login($name,$pwd);
		return $res;
	}
} 
$data = $_POST;
$obj = new order();
$res = $obj->Login_do($data);
if($res==1){
		echo '<script>alert("登录成功");location.href="./ucenter.php"</script>';
	}elseif($res==2){
		echo '<script>alert("用户名与密码不匹配");location.href="./login.html"</script>';
	}elseif($res==3){
		echo '<script>alert("用户名不存在");location.href="./login.html"</script>';
	}
	
	
 ?>
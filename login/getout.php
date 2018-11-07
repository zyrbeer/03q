<?php 
require "controller.php";
header("content-type:text/html;charset=utf-8");
class order extends controller{
	function __construct(){
		session_start();
		$user = $_SESSION['name'];
		if(empty($user)){
			echo '<script>alert("请先登录");location.href="./login.html"</script>';
		}
	}
}
$obj = new order();
$res = $obj->getOut();
if($res==1){
	echo '<script>alert("已退出");location.href="./login.html"</script>';
}
?>
<?php 
require "controller.php";
header("content-type:text/html;charset=utf-8");
class ucenter extends controller{
	function __construct(){
		session_start();
		$user = $_SESSION['name'];
		if(empty($user)){
			echo '<script>alert("请先登录");location.href="./login.html"</script>';
		}
	}
}
$obj = new ucenter();
$user = $obj->getUser();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<font color="red"><?php echo $user ?></font>
	
	这是用户中心<br><a href="./order.php">订单页面</a>
	<a href="./getout.php">退出</a>
</body>
</html>
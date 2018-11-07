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
	这是订单页面<a href="./ucenter.php">用户中心</a>
</body>
</html>
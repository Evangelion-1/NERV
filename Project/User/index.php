<?php
	/*
	 * 包裹管理员主页面
	 * name:index.php
	 *
	 */
	header("Content-Type: text/html; charset=UTF-8");
	session_start();	//启动会话
	/*判断是否登陆*/
	
	if (isset($_SESSION["user_name"]) || isset($_SESSION["user_pass"])) {
			echo "欢迎登录</br>";
	}else{
    	echo "<script language=javascript>alert('您无权访问！请先登录！');history.back();</script>";    
        echo '<script language=javascript>window.location.href="Login/user_login.php"</script>';
	}
	
	//session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>帆港包裹管理系统</title>
		<link rel="stylesheet" href="../../css/parcel_manage.css"/>
	</head>
	<body>
		<div class="header">
			<p>帆港包裹管理系统</p>
		</div>
		<div class="body">
			<div class="body-1">
				<div class="body-1-left">
					<a href="Login/user_modifi.php">修改密码</a>
				</div>
				<div class="body-1-right">
					<a href="Login/user_login_out.php">注销登录</a>
				</div>
			</div>
			<div class="body-1">
				<div class="body-1-left">
					<a href="Money_manager/money_manager.php">资金支出管理</a>
				</div>
				<div class="body-1-right">
					<a href="Parcel_Manage/Parcel_Manage.php">包裹管理</a>
				</div>
			</div>
			<div class="body-1">
				<div class="body-1-left">
					<a href="Message_Manage/Message_Manage.php">信息管理</a>
				</div>
				
			</div>
				
		</div>
		<div class="bottom">
			<p>关于我们:本系统致力于解决快递太多人力无法记住所有快的的信息问题。</p>
			<p>售前服务:请联系400-023-25836</p>
			<p>售后服务:请联系400-023-25836</p>
		</div>
	</body>
</html>
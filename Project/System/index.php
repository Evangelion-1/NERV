<HTML>
<?php
	/*
	 * 包裹管理员主页面
	 * name:index.php
	 *
	 */
	header("Content-Type: text/html; charset=UTF-8");
	$sys = false;	//防止全局变量造成安全隐患
	session_start();	//启动会话	
	/*判断是否登陆*/
	if (isset($_SESSION["sys_name"]) || isset($_SESSION["sys_pass"])) {
			echo "欢迎登录</br>";
	}else{
    	echo "<script language=javascript>alert('您无权访问！请先登录！');history.back();</script>";    
        echo '<script language=javascript>window.location.href="Login/user_login.php"</script>';
	}
	
?>
	<a class="content-login-link" href="Login/user_modifi.php">修改密码</a>
	<a class="content-login-link" href="Login/user_login_out.php">注销登录</a>
	<a class="content-login-link" href="Money_manager/money_manager.php">资金管理</a>
</HTML>
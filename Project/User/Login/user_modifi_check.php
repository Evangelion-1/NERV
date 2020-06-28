<?php
	/*
	 *用户修改密码验证
	 *2020.04.25 
	 */
	include('../../Controller/conn.php');
	session_start();
	
	/*逻辑判断*/
	/*-----------------------------------------------------------------------------------*/
	$pass = $_POST['user_pass'];	//原密码
	$pass1 = $_POST['user_pass1'];	//新密码
	$pass2 = $_POST['user_pass2'];	//确认新密码
	$user_no = $_SESSION['user_name'];	//获取登录的用户名	
	
	
	$sql_q = "select * from station_manager where man_no='{$user_no}'";	//查询语句
	$query = mysql_query($sql_q);
	$q = mysql_num_rows($query);
	
	if(!isset($user_no)){
		echo"请先登录！";
	}else if($q){
		/*检查是否查询成功*/
		$rows = mysql_fetch_array($query);
		$pwd = $rows['man_pwd'];	//数据库中该用户密码
	}else{
		echo "<script language=javascript>alert('修改失败！请稍后再试');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_modifi.php';},3000);</script>";
	}
	$sql_u = "UPDATE station_manager SET man_pwd='$pass1' WHERE man_no='$user_no'";	//更新语句
	$update=mysql_query($sql_u);	//执行更新操作
	
	if($pass!=$pwd){
		echo "<script language=javascript>alert('密码错误');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_modifi.php';},3000);</script>";
	}else if($pass1!=$pass2){
		echo "<script language=javascript>alert('密码不一致');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_modifi.php';},3000);</script>";		
	}else if($update){
		echo "<script language=javascript>alert('修改成功！请重新登录');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_login.php';},5000);</script>";
		session_destroy();
	}else{
		echo "<script language=javascript>alert('修改失败！请稍后再试');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_modifi.php';},3000);</script>";
	}
	mysql_query("SET NAMES utf8");	//设置字符格式
	mysql_close($conn);			//关闭连接
	
  ?>
    
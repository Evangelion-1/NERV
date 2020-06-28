<?php
	/*
	 *用户登录验证程序
	 *2020.04.25 
	 */
	
	header("Content-Type: text/html; charset=UTF-8");
	include('../../Controller/conn.php');	
	session_start();
	
	$name = $_POST['user_name'];
	$pass = $_POST['user_pass']; 
	 
	if ($name && $pass){//如果用户名和密码都不为空
            $sql = "select * from station_manager where man_no = '$name' and man_pwd='$pass'";//检测数据库是否有对应的username和password的sql
            $result = mysql_query($sql);//执行sql
            $rows = mysql_num_rows($result);//返回一个数值
            if($rows){
            	$_SESSION['user_name'] = $name;
            	$_SESSION['user_pass'] = $pass;
                header("refresh:0;url=../index.php");
                exit;
            }else{
               	echo "<script language=javascript>alert('密码或用户名错误');history.back();</script>";
               	echo "<script>setTimeout(function(){window.location.href='user_login.php';},3000);</script>";
            }
	 }
	 
?>
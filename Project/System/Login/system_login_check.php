<?php
	/*
	 *系统管理员登录验证程序
	 *2020.04.26 
	 */
	include('../../Controller/conn.php');	
	
	$name = $_POST['sys_name'];
	$id = $_POST['sys_id'];
	$pass = $_POST['sys_pass'];
	 
	if ($name && $pass && $id){//如果用户名和密码都不为空
            $sql = "select * from system_manager where sys_no = '$name' and sys_pwd='$pass' and sys_id='$id'";//检测数据库是否有对应的username和password的sql
            $result = mysql_query($sql);//执行sql
            $rows = mysql_num_rows($result);//返回一个数值
            if($rows){
            	session_start();	//验证通过后启动session
            	$_SESSION['sys_name'] = $name;	
            	$_SESSION['sys_pass'] = $pass;
                header("refresh:0;url=../index.php");
                exit;
            }else{
               	echo "<script language=javascript>alert('密码或用户名错误');history.back();</script>";
               	echo "<script>
                            setTimeout(function(){window.location.href='user_login.php';},3000);
                    </script>";//如果错误使用js 1秒后跳转到登录页面重试;
            }
	 }
	 
?>
<?php
	/*
	 * 用户忘记密码处理程序
	 */

	include('../../Controller/conn.php');
	
	$name = $_POST['user_name'];	//用户名	
	$id = $_POST['user_id'];	//用户工号
	$no = $_POST['user_no'];	//用户账户
	$sta_no = $_POST['sta_no'];	//管理站编号

	
	$sql_q = "select * from station_manager where man_id='{$id}'";	//查询语句
	$query = mysql_query($sql_q);
	
	if($query){
		/*检查是否查询成功*/
		$rows = mysql_fetch_array($query);
		$user_name = $rows['man_name'];	//数据库中该用户名
		$user_no = $rows['man_no'];	//数据库中的用户账户
		$user_sta = $rows['sta_no'];	//数据库中驿站编号
	}else{
		echo "<script language=javascript>alert('修改失败！请稍后再试');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_forget.php';},3000);</script>";
	}
	
	if($name!=$user_name||$no!=$user_no||$sta_no!=$user_sta){
		echo "<script language=javascript>alert(信息不符！请重新填写');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_forget.php';},3000);</script>";
	}else{
		$sql_i = "INSERT INTO user_forget_login(man_name,man_id,man_no,sta_no)VALUES('$name','$id','$no','$sta_no')";
		$insert = mysql_query($sql_i);
	}
	
	if($insert){
		echo "<script language=javascript>alert(提交成功！待审核');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_login.php';},3000);</script>";
	}else{
		echo "<script language=javascript>alert(提交失败！请稍后再试');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_login.php';},3000);</script>";
	}
	
	if($user_no=$no){
		echo "<script language=javascript>alert(已提交!请勿重复提交');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='user_login.php';},3000);</script>";
	}
	
	mysql_query("SET NAMES utf8");	//设置字符格式
	mysql_close($conn);			//关闭连接
?>
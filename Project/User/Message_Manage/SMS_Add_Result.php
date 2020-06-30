<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$message = $_POST['message'];
	$tel = $_POST['tel'];
	$sql = "insert into message (m_content,m_tel) values ('$message','$tel')";

	if(!($message and $tel)){
		echo "<script>alert('输入不能为空!');history.go(-1);</script>";
	}else{
			$result = mysql_query($sql,$conn);
	if ($result) {
	echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else{
	echo "<script>alert('添加失败!');history.go(-1);</script>";
	}}
	?>
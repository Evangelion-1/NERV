<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$reason = $_POST['reason'];
	$sql = "insert into blacklist (black_name,black_tel,black_r) values ('$name','$tel','$reason')";

	if(!($name and $tel and $reason)){
		echo "<script>alert('输入不能为空!');history.go(-1);</script>";
	}else{
			$result = mysql_query($sql,$conn);
	if ($result) {
	echo "<script>alert('添加成功!');history.go(-1);</script>";
	}else{
	echo "<script>alert('添加失败!');history.go(-1);</script>";
	}}
	?>
<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$sql = "delete from blacklist where black_name='$name'";
	$sql1 = "delete from blacklist where black_tel='$tel'";


	if(!$name && !$tel){
		echo "<script>alert('输入不能为空!');history.go(-1);</script>";
	}else{
			$result = mysql_query($sql);
			$result1 = mysql_query($sql1);	
	if (($sql&&mysql_affected_rows()) || ($sql1&&mysql_affected_rows())){
	echo "<script>alert('移除成功!');history.go(-1);</script>";
	}else{
	echo "<script>alert('移除失败!');history.go(-1);</script>";
	}}
	?>
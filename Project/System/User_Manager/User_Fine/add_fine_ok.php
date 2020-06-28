<?php
	/*
	 * 系统管理员添加罚款记录服务器端处理程序
	 * 2020.05.08
	 * @author sang
	 */

	include ('../../../Controller/conn.php');
	session_start();
	
	$fr_rea = $_POST['fr_rea'];	//罚款原因
	$man_id = $_POST['man_id'];	//管理员工号
	$man_no = $_POST['man_no'];	//管理员账号
	$fr_money = $_POST['fr_money'];	//罚款金额
	
	$sql_in = "INSERT INTO fine_record(fr_rea,fr_money,man_id,man_no) VALUE('$fr_rea','$fr_money','$man_id','$man_no')";
	$insert = mysql_query($sql_in);
	if($insert){
		echo "插入成功";
	}else{
		echo "插入失败！";
	}

	mysql_close($conn);
?>
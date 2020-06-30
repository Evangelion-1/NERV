<?php 
	/*
	 * 添加收款记录处理程序
	 * 2020.05.21
	 * @author sang
	 */

	include('../../../Controller/conn.php');
	
	$project = $_POST['project'];
	$reason = $_POST['reason'];
	$money = $_POST['money'];
	$people = $_POST['people'];
	
	$sql = "INSERT INTO income_money(income_peoject,income_reason,income_money,income_people) VALUE('$project','$reason','$money','$people')";
	$in = mysql_query($sql);
	
	if($in){
		echo "<script language=javascript>alert('添加成功');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='income_add.php';},3000);</script>";
	}else{
		echo "<script language=javascript>alert('添加失败！请稍后再试');history.back();</script>";
        echo "<script>setTimeout(function(){window.location.href='income_add.php';},3000);</script>";
	}

	mysql_close($conn);
?>

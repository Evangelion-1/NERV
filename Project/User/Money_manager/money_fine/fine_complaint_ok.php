<?php
	/*
	 * 用户资金管理申诉服务器端程序
	 * 2020.05.06
	 * @author sang
	 */

	include('../../../Controller/conn.php');
	
	$people = $_POST['come_people'];
	$id = $_POST['man_id'];
	$reason = $_POST['come_reason'];
	
	$insert = mysql_query("INSERT INTO complaint_record(come_people,man_id,come_reason) VALUE('$people','$id','$reason')");
	
	if($insert){
		echo "<script language=javascript>alert('申诉成功,待处理！');history.back();</script>";    
        echo '<script language=javascript>window.location.href="Money_manager/money_fine/fine_complaint.php"</script>';
	}else{
		echo "<script language=javascript>alert('申诉失败！');history.back();</script>";    
        echo '<script language=javascript>window.location.href="Money_manager/money_fine/fine_complaint.php"</script>';	}
	
        mysql_close($conn);
?>
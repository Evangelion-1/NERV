<?php 
	header("content-type:text/html;charset=utf-8");
	include('../../Controller/conn.php');
	session_start();
	date_default_timezone_get('prc');
	$address = $_POST['address'];
	$no = $_POST['no'];
	$time = date('y-m-d h:i:s',time());
	$name = $_POST['name'];
	$company = $_POST['company'];
	$tel = $_POST['tel'];
	$sql = "select * from station_manager";
	$result = mysql_query($sql,$conn);
	$sql1 = "update manage_station set sta_location='$address',sta_time='$time',sta_manager='$name',sta_company='$company',manager_tel='$tel' where sta_no ='$no'";
	
	if(!($name and $tel and $no and $address and $company)){
		echo "<script>alert('输入不能为空!');history.go(-1);</script>";
	}else{
		$result1 = mysql_query($sql1);
		if ($result1) {
		echo "<script>alert('绑定成功!');history.go(-1);</script>";
		}else{
        echo "<script>alert('绑定失败!');history.go(-1);</script>";
		}
		}
?>
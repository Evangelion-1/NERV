
			<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$no = $_POST['no'];
	$address = $_POST['address'];
	$time = $_POST['time'];
	$manager = $_POST['manager'];
	$company = $_POST['company'];
	$tel = $_POST['tel'];
	$sql = "update manage_station set sta_location='$address',sta_time='$time',sta_manager='$manager',sta_company='$company',manager_tel='$tel' where sta_no ='$no'";

	if(!($no)){
		echo "<script>alert('编号不能为空!');history.go(-1);</script>";
	}else{
		$result = mysql_query($sql);
		if ($sql&&mysql_affected_rows()) {
		echo "<script>alert('修改成功!');history.go(-1);</script>";
		}else{
        echo "<script>alert('修改失败!');history.go(-1);</script>";
		}
		}
?>
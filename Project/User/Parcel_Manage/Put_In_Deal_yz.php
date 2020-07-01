<?php
	header("Content-Type: text/html; charset=UTF-8");
	include('../../Controller/conn1.php');
	session_start();
	
	$No=$_POST['No'];
	$pick_tel=$_POST['pick_tel'];
	$pick_name=$_POST['pick_name'];
	$pick_address=$_POST['pick_address'];
	$sent_tel=$_POST['sent_tel'];
	$sent_name=$_POST['sent_name'];	
	$sent_address=$_POST['sent_address'];
	
	if(!($No and $pick_tel and $pick_name and $pick_address)){
		echo "输入不允许为空。单击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr1="insert into put_package(No,pick_tel,pick_name,pick_address,sent_tel,sent_name,sent_address) values('$No','$pick_tel','$pick_name','$pick_address','$sent_tel','$sent_name','$sent_address')";
		$resylt=mysqli_query($conn,$sqlstr1);
	if($resylt){
		echo "<script>alert('入库成功');history.go(-1);</script>";
	}else{
		echo "<script>alert('入库失败');history.go(-1);</script>";
	}
	
}
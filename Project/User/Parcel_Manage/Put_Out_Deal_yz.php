<?php
header("Content-Type: text/html; charset=UTF-8");
include('../../Controller/conn1.php');
session_start();
$No=$_POST['No'];
$pick_tel=$_POST['pick_tel'];
$pick_name=$_POST['pick_name'];
if(!($No and $pick_tel and $pick_name)){
	echo "输入不允许为空。单击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
}else{
//	$sqlstr2="select No,pick_tel,pick_name from put_package where No=$No and pick_tel=$pick_tel and pick_name=$pick_name";
	$sqlstr3="insert into out_package(No,rec_tel,rec_name) values('$No','$pick_tel','$pick_name')";
	$result=mysqli_query($conn,$sqlstr3);
//	$sqlstr1="insert into out_package(No,pick_tel,pick_name,pick_address,sent_tel,sent_name,sent_address) values('$No','$pick_tel','$pick_name','$pick_address','$sent_tel','$sent_name','$sent_address')";
//	$resylt=mysqli_query($conn,$sqlstr1);
	if($result){
		$sqlstr4="delete from put_package where No='$No' and pick_tel='$pick_tel' and pick_name='$pick_name'";
		mysqli_query($conn,$sqlstr4);
		echo "<script>alert('出库成功');history.go(-1);</script>";
	}else{
		echo "<script>alert('数据库中未有信息');history.go(-1);</script>";
	}
}
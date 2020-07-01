<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>出库查询</title>
		<link rel="stylesheet" href="css/Put_Out_Search.css">
	</head>
	<body>
		<div class="header">
			<p>出库查询</p>
			<div class="header-right">
				<a href="Parcel_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form>
				<table width=1000px align="center">
				<tr>
				<td width="250px" align="center">订单号</td>
				<td width="250px" align="center">收件人名称</td>
				<td width="250px" align="center">收件人电话</td>
				</tr>
<?php
header("Content-Type: text/html; charset=UTF-8");
include('../../Controller/conn1.php');
session_start();
$pick_tel=$_POST['pick_tel'];
$result=mysqli_query($conn,"select *from put_package where pick_tel=$pick_tel");
while ($myrow=mysqli_fetch_object($result)){
	?>
	<tr>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->No; ?></span></td>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->pick_name; ?></span></td>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->pick_tel; ?></span></td>
	</tr>
	<?php 
}	
	?>
</table>
</form>
</div>
<div class="bottom">
			<p>关于我们:本系统致力于解决快递太多人力无法记住所有快的的信息问题。</p>
			<p>售前服务:请联系400-023-25836</p>
			<p>售后服务:请联系400-023-25836</p>
		</div>
	</body>
</html>




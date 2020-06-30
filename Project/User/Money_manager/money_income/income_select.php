<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>收入记录</title>
		<link rel="stylesheet" href="../../../../css/Put_Out_Search.css">
	</head>
	<body>
		<div class="header">
			<p>收入记录</p>
			<div class="header-right">
				<a href="Parcel_Manage.php">返回</a>
				<a href="fine_complaint.php">申诉</a>
			</div>
		</div>
		<div class="footer">
			<form>
				<table width=1000px align="center">
				<tr>
				<td width="250px" align="center">收入时间</td>
				<td width="250px" align="center">收入项目</td>
				<td width="250px" align="center">收入原因</td>
				<td width="250px" align="center">收入金额</td>
				<td width="250px" align="center">收入人</td>
				</tr>
<?php
	/*
	 * 查询收入记录处理
	 * 2020.05.23
	 * @author sang
	 */
	include('../../../Controller/conn1.php');
	session_start();
	$user_name =$_SESSION['user_name'];
	
	$sql_query = "SELECT * FROM income_money ";
	$result = mysqli_query($conn,$sql_query);
	while ($myrow=mysqli_fetch_object($result)){
	?>
	<tr>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->income_time; ?></span></td>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->income_peoject; ?></span></td>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->income_reason; ?></span></td>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->income_money; ?></span></td>
	<td width="250px" align="center"><span class="Style1"><?php echo $myrow->income_people; ?></span></td>
	</tr>
	<?php 
	}	
	mysqli_close($conn);
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

	
	

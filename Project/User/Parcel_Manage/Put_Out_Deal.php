<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>出库处理</title>
		<link rel="stylesheet" href="css/Put_Out_Deal.css">
	</head>
	<body>
		<div class="header">
			<p>出库处理</p>
			<div class="header-right">
				<a href="Parcel_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="Put_Out_Deal_yz.php" method="post">
				<h3>请输入信息</h3>
				<table width="1000px" align="center">
					<tr>
						<td width="200px" align="right">订单号:</td>
						<td width="800px"><input type="text" name="No" /></td>
					</tr>
					<tr>
						<td width="200px" align="right">收件人姓名:</td>
						<td width="800px"><input type="text" name="pick_name" /></td>
					</tr>
					<tr>
						<td width="200px" align="right">收件人电话:</td>
						<td width="800px"><input type="text" name="pick_tel" /></td>
					</tr>
					<tr>
						<td width="500px" align="right">
							<input type="submit" value="出库"/>
						</td>
						<td width="500px" align="left">
							<input type="reset" />
						</td>
					</tr>
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

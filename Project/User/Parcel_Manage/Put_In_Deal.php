<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>入库处理</title>
		<link rel="stylesheet" href="css/Put_In_Deal.css" />
	</head>
	<body>
		<div class="header">
			<p>入库处理</p>
			<div class="header-right">
				<a href="Parcel_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="Put_In_Deal_yz.php" method="post">
				<h3>请填写以下信息</h3>
				<table width="1000px" align="center">
					<tr>
						<td align="right">订单号:</td>
						<td><input type="text" name="No" /></td>
					</tr>
					<tr>
						<td align="right">收件人电话:</td>
						<td><input type="text" name="pick_tel" /></td>
					</tr>
					<tr>
						<td align="right">收件人名称:</td>
						<td><input type="text" name="pick_name" /></td>
					</tr>
					<tr>
						<td align="right">收件人地址:</td>
						<td><input type="text" name="pick_address" /></td>
					</tr>
					<tr>
						<td align="right">寄件人电话:</td>
						<td><input type="text" name="sent_tel" /></td>
					</tr>
					<tr>
						<td align="right">寄件人名称:</td>
						<td><input type="text" name="sent_name" /></td>
					</tr>
					<tr>
						<td align="right">寄件人地址:</td>
						<td><input type="text" name="sent_address" /></td>
					</tr>
					<tr align="center">
						<td align="right"><input type="submit" name="sub" value="入库"></td>
						<td align="left"><input type="reset"></td>
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
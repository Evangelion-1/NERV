<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改通知信息</title>
		<link rel="stylesheet" href="../../../css/Message_Change.css">
	</head>
	<body>
		<div class="header">
			<p>修改通知信息</p>
			<div class="header-right">
				<a href="SMS_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="SMS_Change_Result.php" method="post">
				<table width="1000px" align="center">
					<tr><h3>请输入需要修改的通知信息</h3></tr>
					<tr>
						<td align="right">通知电话:</td>
						<td><input type="text" name="tel" /></td>
					</tr>
					<tr>
						<td align="right">信息内容:</td>
						<td><input type="text" name="SMS" /></td>
					</tr>
					<tr align="center">
						<td align="right"><input type="submit" name="sub" value="输入"></td>
						<td align="left"><input type="reset">
					</td>
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


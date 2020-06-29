<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改帆港信息</title>
		<link rel="stylesheet" href="../../../css/Message_Change.css">
	</head>
	<body>
		<div class="header">
			<p>修改帆港信息</p>
			<div class="header-right">
				<a href="Message_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="Message_Change_Result.php" method="post">
				<table width="1000px" align="center">
					<tr><h3>请输入需要修改帆港信息</h3></tr>
					<tr>
						<td width="400px" align="right">编号:</td>
						<td width="150px"><input type="text" name="no" /></td>
						
					</tr>
					<tr>
						<td align="right">站点位置:</td>
						<td><input type="text" name="address" /></td>
					</tr>
					<tr>
						<td align="right">站点建立时间:</td>
						<td><input type="date" name="time" /></td>
					</tr>
					<tr>
						<td align="right">站点管理员:</td>
						<td><input type="text" name="manager" /></td>
					</tr>
					<tr>
						<td align="right">管理员电话:</td>
						<td><input type="text" name="tel" /></td>
					</tr>
					<tr>
						<td align="right">快递公司:</td>
						<td><input type="text" name="company" /></td>
						<td width="450px" align="left"><input type="submit"></td>
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


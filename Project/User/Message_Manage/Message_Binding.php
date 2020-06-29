<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>绑定</title>
		<link rel="stylesheet" href="../../../css/Message_Binding.css">
	</head>
	<body>
		<div class="header">
			<p>帆港信息绑定</p>
			<div class="header-right">
				<a href="Message_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="Binding_Result.php" method="post">
				<h3>请填写以下信息</h3>
				<table width="1000px" align="center">
					
					<tr>
						<td align="right">站点位置:</td>
						<td><input type="text" name="address" /></td>
					</tr>
					<tr>
						<td align="right">站点编号:</td>
						<td><input type="text" name="no" /></td>
					</tr>
					<tr>
						<td align="right">管理员名称:</td>
						<td><input type="text" name="name" /></td>
					</tr>
					<tr>
						<td align="right">快递公司:</td>
						<td><input type="text" name="company" /></td>
					</tr>
					<tr>
						<td align="right">管理员电话:</td>
						<td><input type="text" name="tel" /></td>
					</tr>
					<tr align="center">
						<td align="right"><input type="submit" name="sub" value="输入"></td>
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



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>帆港信息查询</title>
		<link rel="stylesheet" href="../../../css/Message_search.css">
	</head>
	<body>
		<div class="header">
			<p>帆港信息查询</p>
			<div class="header-right">
				<a href="Message_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="Search_Result.php" method="post">
				<table width="1000px" align="center">
					<tr><h3>请输入需要查询帆港</h3></tr>
					<tr>
						<td width="400px" align="right">帆港编号:</td>
						<td width="150px"><input type="text" name="number" /></td>
					</tr>
					<tr>
						<td width="400px" align="right">帆港管理员名称:</td>
						<td width="150px"><input type="text" name="name" /></td>
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

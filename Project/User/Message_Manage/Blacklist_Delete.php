<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>黑名单</title>
		<link rel="stylesheet" href="../../../css/Blacklist_Add.css">
	</head>
	<body>
		<div class="header">
			<p>黑名单移除</p>
			<div class="header-right">
				<a href="Blacklist_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="Blacklist_Delete_Result.php" method="post">
				<h3>请填写移除黑名单人信息</h3>
				<table width="1000px" align="center">
					<tr>
						<td align="right">名称:</td>
						<td><input type="text" name="name" /></td>
					</tr>
						<td align="right">电话:</td>
						<td><input type="text" name="tel" /></td>
					</tr>
					<tr align="center">
						<td align="right"><input type="submit" name="sub" value="删除"></td>
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

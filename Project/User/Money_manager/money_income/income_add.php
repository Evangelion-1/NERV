<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>添加收款</title>
		<link rel="stylesheet" href="../../../../css/Put_In_Deal.css" />
	</head>
	<body>
		<div class="header">
			<p>添加收款记录</p>
			<div class="header-right">
				<a href="money_income.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<form action="income_add_check.php" method="post">
				<h3>请填写以下信息</h3>
				<table width="1000px" align="center">
					<tr>
						<td align="right">收入项目:</td>
						<td><input type="text" name="project" /></td>
					</tr>
					<tr>
						<td align="right">收入原因:</td>
						<td><input type="text" name="reason" /></td>
					</tr>
					<tr>
						<td align="right">收入金额:</td>
						<td><input type="text" name="money" /></td>
					</tr>
					<tr>
						<td align="right">收入人:</td>
						<td><input type="text" name="people" /></td>
					</tr>
					<tr align="center">
						<td align="right"><input type="submit" name="sub" value="提交"></td>
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
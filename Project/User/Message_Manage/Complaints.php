
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>投诉</title>
		<link rel="stylesheet" href="../../../css/Message_search.css">
	</head>
	<body>
		<div class="header">
			<p>投诉处理反馈</p>
			<div class="header-right">
				<a href="Message_Manage.php">返回</a>
			</div>
		</div>
		<div class="footer">
			<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$sql = "select * from complaint_record";
	$result = mysql_query($sql);
	
	echo "<table border='1' cellspacing='1' align='center' width='720'>";
	echo "<tr height='50'>";
	echo "<td width='50' align='center'>投诉人</td>";
	echo "<td width='210' align='center'>投诉理由</td>";
	echo "<td width='210' align='center'>投诉时间</td>";
	echo "</tr>";
	
	while($row = mysql_fetch_row($result)){
		echo "<tr height='40'>";
		echo "<td width='50' align='center'>".$row[1]."</td>";
		echo "<td width='250' align='left'>".$row[2]."</td>";
		echo "<td width='150' align='center'>".$row[4]."</td>";
		echo "</tr>";
		}
		echo "</table>";
	
?>
		</div>
		<div class="bottom">
			<p>关于我们:本系统致力于解决快递太多人力无法记住所有快的的信息问题。</p>
			<p>售前服务:请联系400-023-25836</p>
			<p>售后服务:请联系400-023-25836</p>
		</div>
	</body>
</html>



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
				<a href="Parcel_Manage.html">返回</a>
			</div>
		</div>
		<div class="footer">
			<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$sql = "select * from manage_station";
	$result = mysql_query($sql);
	$number = $_POST['number'];
	$name = $_POST['name'];
	
	echo "<table border='1' cellspacing='1' align='center' width='720'>";
	echo "<tr height='50'>";
	echo "<td width='50' align='center'>站点位置</td>";
	echo "<td width='210' align='center'>站点编号</td>";
	echo "<td width='210' align='center'>建立时间</td>";
	echo "<td width='50' align='center'>管理员</td>";
	echo "<td width='200' align='center'>快递公司</td>";
	echo "</tr>";
	
	while($row = mysql_fetch_row($result)){
		if ($row[2]==$number||$row[4]==$name){
		echo "<tr height='40'>";
		echo "<td width='50' align='center'>".$row[1]."</td>";
		echo "<td width='250' align='center'>".$row[2]."</td>";
		echo "<td width='150' align='center'>".$row[3]."</td>";
		echo "<td width='50' align='center'>".$row[4]."</td>";
		echo "<td width='200' align='center'>".$row[5]."</td>";
		echo "</tr>";
		}
		echo "</table>";
	}
?>
		</div>
		<div class="bottom">
			<p>关于我们:本系统致力于解决快递太多人力无法记住所有快的的信息问题。</p>
			<p>售前服务:请联系400-023-25836</p>
			<p>售后服务:请联系400-023-25836</p>
		</div>
	</body>
</html>


<?php
	/*
	 * 系统管理员
	 * 处理申诉前端
	 * @author sang
	 * 2020.05.08
	 */
	include ('../../../Controller/conn.php');

	$sql = "SELECT * FROM complaint_record";
	$query = mysql_query($sql);
	$rows = array();
	while($row = mysql_fetch_assoc($query)){
		$rows[] = $row;
	}
	echo '<table border="1"><tr><td>编号</td><td>申诉人</td><td>工号</td><td>申诉原因</td><td>时间</td></tr>';
	foreach ($rows as $key => $v){
		$k = $key+1;
		echo "<tr><td>{$k}</td> "."<td> {$v['come_people']}</td> "."<td> {$v['man_id']}</td>"."<td> {$v['come_reason']}</td>"
		."<td> {$v['come_time']}</td>"."</tr>"; 
	}
?>






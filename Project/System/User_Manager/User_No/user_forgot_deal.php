<?php
	include('../../../Controller/conn.php');
	
	$sql = "SELECT * FROM user_forget_login";
	$result = mysql_query($sql);
?> 
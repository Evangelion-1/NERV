<?php 
	include('../../Controller/conn.php');
	mysql_query('set names utf8');
	session_start();
	$SMS = $_POST['SMS'];
	$tel = $_POST['tel'];
	$sql = "update message set m_content='$SMS' where m_tel='$tel'";

	if(!$tel and !$SMS){
		echo "<script>alert('填写不能为空!');history.go(-1);</script>";
	}else{
		$result = mysql_query($sql);
		if ($sql&&mysql_affected_rows()) {
		echo "<script>alert('修改成功!');history.go(-1);</script>";
		}else{
        echo "<script>alert('修改失败!');history.go(-1);</script>";
		}
		}
?>
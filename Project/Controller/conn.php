<?php
	/*
	 * 连接数据库
	 * 2020.04.25
	 */
    header("Content-Type: text/html; charset=UTF-8");

    $conn = mysql_connect("localhost","root","root");//链接数据库
    if(!$conn){
        die("连接失败！".mysql_error());//如果链接失败输出错误
    }

    mysql_select_db('fan_g',$conn);
?>


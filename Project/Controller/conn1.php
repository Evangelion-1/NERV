<?php
	/*
	 * 连接数据库
	 * 2020.04.25
	 */
    header("Content-Type: text/html; charset=UTF-8");
    $dbName="fan_g";

    $conn = mysqli_connect("localhost","root","root");//链接数据库
    if(!$conn){
        die("连接失败！".mysql_error());//如果链接失败输出错误
    }
	mysqli_select_db($conn,$dbName);
//    if(mysqli_select_db($conn,$dbName)){
//    	echo "数据库选择成功";
//    }else{
//    	echo"数据库选择失败";
//    }
?>


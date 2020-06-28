<?php
	/*
	 * 用户注册处理程序
	 * 系统管理员为管理员注册信息
	 * 2020.04.30
	 * athor@sang
	 */
	include ('../../../Controller/conn.php');
	
	$user_name = $_POST['user_name'];	//用户名
	$user_id = $_POST['user_id'];	//用户工号
	$user_no = $_POST['user_no'];	//用户帐号
	$user_pass = $_POST['user_pass'];	//用户密码
	$user_sta = $_POST['user_sta'];	//用户管理站	
	$user_tel = $_POST['user_tel'];	//用户电话
	$sta_no = $_POST['sta_no'];	//管理站编号
	
	/*检测是否已被注册*/
	$id = mysql_query("SELECT * FROM station_manager WHERE man_id={'$user_id'}");
	$no = mysql_query("SELECT * FROM station_manager WHERE man_no={'$user_no'}");
	$tel = mysql_query("SELECT * FROM station_manager WHERE man_id={'$user_tel'}");
	$no = mysql_query("SELECT * FROM station_manager WHERE man_id={'$sta_no'}");
	
	
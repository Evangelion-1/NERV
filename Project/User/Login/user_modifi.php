<?php 
  	header("Content-Type: text/html; charset=UTF-8");
	session_start();

	/*验证是否已登录*/
    if (!(isset($_SESSION["user_name"]) || isset($_SESSION["user_pass"]))) {
    	echo "<script language=javascript>alert('您无权访问！请先登录！');history.back();</script>";    
        echo '<script language=javascript>window.location.href="user_login.php"</script>';
	}
?>

<Html>
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
</head>
	<form method="post" action="user_modifi_check.php" onsubmit="return modifi()">
	原密码:<input id="user_name" type="password" name="user_pass" ><br>
	新密码:<input id="user_name" type="password" name="user_pass1" ><br>
	再次输入密码:<input id="user_name" type="password" name="user_pass2" ><br>
	<input type="submit" value="登录">
	</form>
	<script>
			function modifi(){
				//得到name输入框对象
				var pass = document.getElementById("user_pass");
				var pass1 = document.getElementById("user_pass1");
				var pass2 = document.getElementById("user_pass2");
				var assertpassword=document.getElementById("assertpassword").value;
				//判断输入框是否有内容
				if(pass.value.length==0||pass1.value.length==0||pass2.value.length==0){
					confirm("填写不能为空");
					return false;
				}
				return true;
			}
		</script>
</Html>
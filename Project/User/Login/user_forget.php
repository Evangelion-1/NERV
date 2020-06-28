<Html>
<head>
    <meta charset="UTF-8">
    <title>忘记密码</title>
</head>
	<form method="post" action="user_forgrt_check.php" onsubmit="return modifi()">
	用户:<input id="user_name" type="password" name="user_name" ><br>
	工号:<input id="user_id" type="password" name="user_id" ><br>
	帐号:<input id="user_no" type="password" name="user_no" ><br>
	站点编号:<input id="sta_no" type="password" name="sta_no" ><br>
	<input type="submit" value="登录">
	</form>
	<script>
			function modifi(){
				//得到name输入框对象
				var user_name = document.getElementById("user_name");
				var user_id = document.getElementById("user_id");
				var user_no = document.getElementById("user_no");
				var sta_no = document.getElementById("sta_no");
				//判断输入框是否有内容
				if(user_name.value.length==0||user_id.value.length==0||user_no.value.length==0||
						sta_no.value.length==0){
					confirm("填写不能为空");
					return false;
				}
				return true;
			}
		</script>
</Html>
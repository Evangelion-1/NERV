<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>帆港管理员登录</title>
    <link rel="stylesheet" href="../../../css/login_form.css">
</head>


<body>
    <header>
        <div class="header-line"></div>
    </header>
    <div class="content">
        <h1 class="content-title">登录</h1>
        <div class="content-form">
            <form method="post" action="user_login_check.php" onsubmit="return login()">
                <div id="change_margin_1">
                    <input class="user" id="user_name" type="text" name="user_name" placeholder="用户名" onblur="oBlur_1()" onfocus="oFocus_1()">
                </div>
                <p id="remind_1"></p>
                <div id="change_margin_2">
                    <input class="password" id="user_pass"type="password" name="user_pass" placeholder="密码" onblur="oBlur_2()" onfocus="oFocus_2()">
                </div>
                <div id="change_margin_3">
                    <input class="content-form-signup" type="submit" value="登录">
                </div>
            </form>
        </div>
        <div><a class="content-login-link" href="user_forget.php">忘记密码？</a></div>
    </div>
	<script>
			function login(){
				//得到name输入框对象
				var name = document.getElementById("user_name");
				//判断输入框是否有内容
				if(name.value.length==0){
					confirm("用户名不能为空");
					return false;
				}
				var pass = document.getElementById("user_pass");
				if(pass.value.length==0){
					confirm("密码不能为空");
					return false;
				}
				return true;
			}
		</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>系统管理员登录</title>
    <link rel="stylesheet" href="../../../css/login_form.css">
</head>


<body>
    <header>
        <div class="header-line"></div>
    </header>
    <div class="content">
        <h1 class="content-title">Login</h1>
        <div class="content-form">
            <form method="post" action="system_login_check.php" onsubmit="return login()">
                <div id="change_margin_1">
                    <input class="user" id="sys_name" type="text" name="sys_name" placeholder="帐号" onblur="oBlur_1()" onfocus="oFocus_1()">
                </div>
                
                <div id="change_margin_2">
                    <input class="id" id="sys_id" type="text" name="sys_id" placeholder="ID" onblur="oBlur_1()" onfocus="oFocus_1()">
                </div>
                
                <p id="remind_1"></p>
                <div id="change_margin_3">
                    <input class="password" id="sys_pass" type="password" name="sys_pass" placeholder="密码" onblur="oBlur_2()" onfocus="oFocus_2()">
                </div>
                <div id="change_margin_3">
                    <input class="content-form-signup" type="submit" value="登录">
                </div>
            </form>
        </div>
    </div>
	<script>
			function login(){
				//得到name输入框对象
				var name = document.getElementById("sys_name");
				//判断输入框是否有内容
				if(name.value.length==0){
					confirm("帐号不能为空");
					return false;
				}
				
				var id = document.getElementById("sys_id");
				//判断输入框是否有内容
				if(id.value.length==0){
					confirm("ID不能为空");
					return false;
				}
				var pass = document.getElementById("sys_pass");
				if(pass.value.length==0){
					confirm("密码不能为空");
					return false;
				}
				return true;
			}
		</script>
</body>
</html>

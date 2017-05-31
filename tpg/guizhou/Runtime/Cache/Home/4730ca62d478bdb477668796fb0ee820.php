<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>找回密码/修改密码</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="/tpg/Public/login/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/tpg/Public/login/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/tpg/Public/login/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="/tpg/Public/login/css/bootstrap-social.css" rel="stylesheet" type="text/css">	
	<link href="/tpg/Public/login/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">找回密码/修改密码</h1>
			<form class="form-horizontal templatemo-forgot-password-form templatemo-container" role="form" action="/tpg/home/Form/forget" method="post">	
				<div class="form-group">
		          <div class="col-md-12">
		          	请发送你的邮箱号到我们的网站系统
		          </div>
		        </div>		
		        <div class="form-group">
		          <div class="col-md-12">
		           <label for="name">用户名</label>
		            <input type="text" class="form-control" id="name" placeholder="Your username" name="username" required="required">
		           <label for="email">你的邮箱号</label>
		            <input type="email" class="form-control" id="email" placeholder="Your email" name="fogetemail" required="required" pattern="^[A-Za-z0-9]+([-_.][A-Za-z0-9]+)*@([A-Za-z0-9]+[-.])+[A-Za-z0-9]{2,5}$">
		            <label for="password">新密码</label>	
		            <input type="password" class="form-control" id="password"  pattern="^[a-zA-Z]\w{5,17}$" placeholder="请输入6-18字符" name="password" required="required">	
		            <label for="conpassword">确认密码</label>
		            <input type="password" class="form-control" id="conpassword" placeholder="confirmpassword" name="conpassword" required="required" pattern="^[a-zA-Z]\w{5,17}$">	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		            <input type="submit" value="找回" class="btn btn-danger">
                    <br><br>
                    <a href="/tpg/home/login/register">注册</a> |
                    <a href="/tpg/home/Login/login">登录</a>
		          </div>
		        </div>
		      </form>
		</div>
	</div>
	<script type="text/javascript">
		//确认密码
var confirmpassword = document.getElementById('conpassword');
var password = document.getElementById('password');
confirmpassword.onblur=function(){
	var con = confirmpassword.value;
    var pass = password.value;
    if (con!=pass) {
    	confirmpassword.style.color = 'red';
    	password.style.color = 'red';
    	alert('两次密码不一样');
    }else{
    	confirmpassword.style.color = 'green';
    }
}
	</script>
</body>
</html>
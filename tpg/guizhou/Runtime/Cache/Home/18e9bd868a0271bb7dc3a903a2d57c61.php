<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>贵州旅游登录</title>
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
<body class="templatemo-bg-image-1">
	<div class="container">

		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="/tpg/home/Form/logindeal" method="post">
				<div class="row">
					<div class="col-md-12">
					<a href="/tpg/" "><h3>返回首页</h3></a>	<h1>欢迎登录贵州旅游网</h1>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label for="username" class="control-label">用户名</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-user"></i>
				            	<input type="text" class="form-control" id="username" placeholder="" pattern="^([\u4E00-\u9FA5]+，?)+$" name="username" required="required">
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">密码</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-lock"></i>
				            	<input type="password" class="form-control" id="password" placeholder="输入密码" pattern="^[a-zA-Z]\w{5,17}$" name="password" required="required">
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <div class="checkbox">
				                <label>
				                  <input type="checkbox" name="remember" value="1"> 记住我
				                </label>
				            </div>
				          </div>
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <input type="submit" value="登录" class="btn btn-warning">
				          </div>
				        </div>
				        <div class="form-group">
				          	<div class="col-md-12">
				        		<a href="/tpg/home/login/forgotpassword.html" class="text-center">无法登录/修改密码</a>
				       	 	</div>
				    	</div>
					</div>
					<div class="templatemo-other-signin col-md-6">
						<label class="margin-bottom-15">
							你也可以使用一下方法进行登录
						</label><br>
						<a class="btn btn-block btn-social btn-facebook margin-bottom-15">
						    <i class="fa fa-qq"></i> 	QQ登录
						</a>
						<a class="btn btn-block btn-social btn-twitter margin-bottom-15">
						    <i class="fa fa-weixin"></i> 微信登录
						</a>
						<a class="btn btn-block btn-social btn-google-plus">
						    <i class="fa fa-weibo"></i> 微博登录
						</a><br>
						<label>若无账号 ? 请先</label>
                        <a class="btn btn-block btn-social btn-google-plus" href="/tpg/home/login/register">
						    <i class="fa fa-user"></i> 注册账号
						</a>						
					</div>   
				</div>				 	
		      </form>		      		      
		</div>
	</div>
</body>
</html>
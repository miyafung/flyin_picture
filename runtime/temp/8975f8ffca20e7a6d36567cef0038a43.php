<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"G:\phpStudy2017\PHPTutorial\WWW\layui2\public/../application/admin\view\login\login.html";i:1512367704;}*/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>部分功能 - flyin</title>
	<link href="__LAYUIADMIN__/css/layui.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><!--字体图标-->
</head>

<style>
    body{overflow:hidden;}

    /*.video-player{background-color: transparent;display: block;position: absolute;z-index: 1;top:0;}*/
    /*.video_mask{ width:100%; height:100%; position:absolute; left:0; top:0; z-index:90; background-color:rgba(0,0,0,0.5); }*/
    .login{ height:260px;width:260px;padding: 20px;background-color:rgba(0,0,0,0.5);border-radius: 4px;position:absolute;left: 50%;top: 50%; margin:-150px 0 0 -150px;z-index:99;}
    .login h1{ text-align:center; color:#fff; font-size:24px; margin-bottom:20px; }
    .form_code{ position:relative; }
    .form_code .code{ position:absolute; right:0; top:1px; cursor:pointer; }
    .login_btn{ width:100%; }
</style>

<body>
<!--<video class="video-player" preload="auto" autoplay="autoplay" loop="loop" data-height="1080" data-width="1920" height="1080" width="1920" style="height: 151px; width: auto; left: -119.5px;">-->
	<!--<source src="login.mp4" type="video/mp4">-->
<!--</video>-->
<div class="video_mask"></div>
<div class="login">
	<h1>flyin 图片管理登录</h1>
		<form method="post" action="<?php echo url('login/checklogin'); ?>" class="layui-form">
		<div class="layui-form-item">
			<input class="layui-input" name="admin_name" placeholder="用户名" type="text" autocomplete="off">
		</div>
		<div class="layui-form-item">
			<input class="layui-input" name="admin_password" placeholder="密码"  type="password" autocomplete="off">
		</div>

			<!--<span class="block input-icon input-icon-right">-->
						<!--<input type="text" name="captcha" class="form-control" placeholder="请输入验证码" />-->
						<!--<i class="icon-lock"></i>-->
					<!--</span>-->


		<button class="layui-btn login_btn" lay-submit="" lay-filter="login">登录</button>
	</form>
</div>

</body>
</html>
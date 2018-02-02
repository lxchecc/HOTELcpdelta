<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"C:\wamp\www\hotel\public/../application/index\view\user\login.html";i:1517495832;}*/ ?>
<!doctype html>
<html>
<head>
<title>Home</title>
<meta property="wb:webmaster" content="0df51aa2c198a6cb" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
</script>

<!-- css files -->
<link href="/index/login/css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<script src="/index/login/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<style type="text/css">
	::-webkit-input-placeholder { /* WebKit browsers */
		color:#990;
	}
</style>
</head>
<body>
<h1>Register AND Login</h1>
<div class="log">
	<div class="content1">
		<h2>登录</h2>
		<form id="login">
			<input type="text" name="userid" value="" placeholder="请输入手机号或邮箱" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = '请输入手机号或邮箱';}" autocomplete="off">
			<input type="password" name="passwd" value="" placeholder="请输入密码" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = '请输入密码';}">
			<div class="button-row">
				<input type="button" class="sign-in" value="登录">
				<input type="reset" class="reset" value="重置">
				<div class="clear"></div>
			</div>
		</form>
		 <p><a href="/index/User/weibo"><img src="/index/images/weibo_login.png" title="点击进入授权页面" alt="点击进入授权页面" border="0" /></a></p>
	</div>
	<div class="content2">
		
		<h2><span id="phone">手机注册</span> | <span id="email">邮箱注册</span></h2>
		<form id="fphone">
			<input id="a" class="ab" type="text" name="userid" placeholder="请输入用户名"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名',this.color = 'red';}"
			maxlength="16" minlength="3" autocomplete="off">
			
			<input type="tel" name="usrtel" placeholder="请输入手机号"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入手机号';}"
			maxlength="11" minlength="11" autocomplete="off">
			
			<input type="text" name="yzm" value="" placeholder="手机验证码" style="width:100px;" autocomplete="off"/>
			<input type="button" value="获取手机验证码" id="btn" style="background:#378D29;border:1px solid #378D29;" />
			<input type="password" name="psw" value="" placeholder="请输入密码" autocomplete="off">
			<input type="button" class="register" value="注册">
		</form>

		<form id="femail" style="display:none">
			<input type="text" name="userid" value="" placeholder="请输入用户名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入用户名';}" autocomplete="off"/>
			<input type="email" name="email" value="" placeholder="请输入qq邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入qq邮箱';}" autocomplete="off"/>
			<input type="text" name="yzm" value="" placeholder="邮箱验证码" style="width:100px;" autocomplete="off" />
			<input type="button" value="获取邮箱验证码" id="btn1" style="background:#378D29;border:1px solid #378D29;" />
			<input type="password" name="psw" value="" placeholder="请输入密码" autocomplete="off" />
			<input type="button" class="register" value="注册">
		</form>
	</div>
	<div class="clear"></div>
</div>
<div class="footer">
	<p>欢迎来到（登录,注册）</p>
</div>

</body>
 <!-- 登录注册切换 -->
<script>
	window.onload = function()
	{
		var phone = document.getElementById('phone');
		var email = document.getElementById('email');
		var fphone = document.getElementById('fphone');
		phone.onmouseover = function()
		{
			email.style.background = '';
			phone.style.backgroundColor = '#dddddd';
			phone.style.borderRadius = '10px';
		}
		phone.onclick = function()
		{
			fphone.style.display = 'block';
			femail.style.display = 'none';
		}
		email.onmouseover = function()
		{
			phone.style.background = '';
			email.style.backgroundColor = '#dddddd';
			email.style.borderRadius = '10px';
		}
		email.onclick = function()
		{
			
			fphone.style.display = 'none';
			femail.style.display = 'block';

		}

		var oBtn = document.getElementById('btn');
		var timer = null;
		var n = 60;
		var nooff = false;
		//手机时间
		oBtn.onclick = function()
		{
			_this = this;
			if(nooff){
				return;
			}
			nooff = true;
			this.value = '60' + '秒';
			timer = setInterval(function(){
				n--;
				_this.value = n + '秒';
				if(n == 0){
					clearInterval(timer);
					_this.value = '重发';
					n = 60;
					nooff = false;
				}
			},1000)
		
		}

		var oBtn1 = document.getElementById('btn1');
		var emailTimer = null;
		var m = 120;
		var emailOff = false;
		//邮箱时间
		oBtn1.onclick = function()
		{
			_this = this;
			if(emailOff){
				return;
			}
			emailOff = true;
			this.value = '120' + '秒';
			emailTimer = setInterval(function(){
				m--;
				_this.value = m + '秒';
				if(m == 0){
					clearInterval(emailTimer);
					_this.value = '重发';
					m = 120;
					emailOff = false;
				}
			},1000)
		
		}

	}
	
</script>
<!-- 获取验证码 -->
<script type="text/javascript">
	//登录
	$('#login .sign-in').on('click',function(){
        $.ajax({
                "type":"post",
                "url":"/index/User/dologin",
                "dataType":"json",
                "data":{
                "user":$("#login input[name=userid]").val(),
                "passwd":$('#login input[name=passwd]').val()
                },
                "success":function(data){
                	if(data == 0){
                		alert('账号或密码不正确');
                	}else if(data == 1){
                		window.location.href="/index/index/index";
                	}else if(data == 2){
                		alert('账号或密码不正确');
                	}
                }
              });
    });
    //判断用户名是否已经注册
    $("#fphone .ab").blur(function(){
    // alert(232);
    //必须取值，不然传不到值
    //var uid = $(this).val();    
    //用ajax去数据库匹配，
    $.ajax({
    		 "type":"post",              		 //提交方式
      		 "url":"/index/User/doUsed",       //要处理的页面
        	 "data":{
        	 "user":$("#fphone input[name=userid]").val()
        	 },    //要传过去的数据
       		 "dataType":"json",          //返回的数据类型，TEXT字符串 JSON返回JSON 	XML返回XML；dataType中T要大写！！
      		  "success": check

    	});
	});
	//获取手机验证码
    $('#btn').on('click',function(){
        $.ajax({
                "type":"post",
                "url":"/index/User/signPhone",
                "dataType":"json",
                "data":{
                "phone":$("input[name=usrtel]").val()
                },
                "success":check
              });
    });
    //获取邮箱验证码
    $('#btn1').on('click',function(){
        $.ajax({
                "type":"post",
                "url":"/index/User/signEmail",
                "dataType":"json",
                "data":{
                "email":$("input[name=email]").val()
                },
                "success":check
              });
    });
    //提交手机注册信息
    $('#fphone .register').on('click',function(){
    	
    	$.ajax({
    			"type":"post",
            	"url":"/index/User/register",
           		"dataType":"json",
           		"async":true,
            	"data":{
            	"username":$("#fphone input[name=userid]").val(),
            	"phone":$("#fphone input[name=usrtel]").val(),
            	"yzm":$("#fphone input[name=yzm]").val(),
            	"passwd":$('#fphone input[name=psw]').val(),
                },
           		"success":check
    	});
    });

    //提交邮箱注册信息
    $('#femail .register').on('click',function(){
    	
    	$.ajax({
    			"type":"post",
            	"url":"/index/User/register",
           		"dataType":"json",
           		"async":true,
            	"data":{
            	"username":$("#femail input[name=userid]").val(),
            	"email":$("#femail input[name=email]").val(),
            	"yzm":$("#femail input[name=yzm]").val(),
            	"passwd":$('#femail input[name=psw]').val(),
                },
           		"success":check
    	});
    });
    function check(data){
    	// alert(111);
		if(data == 1){
			alert('用户名不能为空');
		}else if(data ==2){
			alert('用户名已存在');
		}else if(data ==3){
			alert('手机号或邮箱不能为空');
		}else if(data ==4){
			alert('格式不正确');
		}else if(data ==5){
			alert('验证码不正确');
		}else if(data ==6){
			alert('密码不能为空');
		}else if(data ==7){
			window.location.href="/index/index/index";
		}else if(data ==8){
			alert('可用用户名,可以注册');
		}
    }
</script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--引入js包-->
        <script src="../jquery-3.2.0.js"></script>
    </head>
    <body>
        <h1>判断用户名是否已存在</h1>
        登录名：<input type="text" id="dl"/><span id="ts"></span><br /><br />
    </body>
</html>
<script type="text/javascript">
//当鼠标失去焦点时显示    

</script>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wamp\www\tp\hotel\public/../application/admin\view\login\login.html";i:1519625670;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
	<link rel="stylesheet" href="/admin/assets/css/ace-rtl.min.css" />
	<link rel="stylesheet" href="/admin/assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="/admin/css/style.css"/>
	<script src="/admin/assets/js/ace-extra.min.js"></script>
	<script src="/admin/js/jquery-1.9.1.min.js"></script>        
	<script src="/admin/assets/layer/layer.js" type="text/javascript"></script>
	<title>登陆</title>
</head>
<body class="login-layout Reg_log_style">
	<div class="logintop">    
		<span>欢迎后台管理界面平台</span>    
		<ul>
			<li><a href="/index/index/index">返回首页</a></li>
			<li><a href="#">帮助</a></li>
			<li><a href="#">关于</a></li>
		</ul>    
	</div>
	<div class="loginbody">
		<div class="login-container">
			<div class="center">
				<img src="" />
			</div>
			<div class="space-6"></div>
			<div class="position-relative">
				<div id="login-box" class="login-box widget-box no-border visible">
					<div class="widget-body">
						<div class="widget-main">
							<h4 class="header blue lighter bigger">
								<i class="icon-coffee green"></i>
								管理员登陆
							</h4>
							<div class="login_icon"><img src="/admin/images/login.png" /></div>
							<form method="post" action="/admin/Login/login">
								<fieldset>
									<ul>
										<li class="frame_style form_error"><label class="user_icon"></label><input name="user" type="text"  id="username"/><i>用户名</i></li>
										<li class="frame_style form_error"><label class="password_icon"></label><input name="pwd" type="password"   id="userpwd"/><i>密码</i></li>
									</ul>
									<div class="space"></div>
									<div class="clearfix">
										<label class="inline">
											<input type="checkbox" class="ace">
											<span class="lbl">保存密码</span>
										</label>
										<!-- <button type="button" class="width-35 pull-right btn btn-sm btn-primary" id="login_btn">
											<i class="icon-key"></i>
											登陆
										</button> -->
										<input type="submit" name="login" value="登录">
									</div>
									<div class="space-4"></div>
								</fieldset>
							</form>
							<div class="social-or-login center">
								<span class="bigger-110">通知</span>
							</div>
							<div class="social-login center">
								本网站系统不再对IE8以下浏览器支持，请见谅。
							</div>
						</div><!-- /widget-main -->
						<div class="toolbar clearfix">
						</div>
					</div><!-- /widget-body -->
				</div><!-- /login-box -->
			</div><!-- /position-relative -->
		</div>
	</div>
	<div class="loginbm">版权所有  2016 </div><strong></strong>
</body>
<script>
	// $('#login_btn').on('click', function(){
	// 	var num=0;
	// 	var str="";
	// 	$("input[type$='text'],input[type$='password']").each(function(n){
	// 		alert($("input[type$='text']"));
	// 		if($(this).val()==""){
	// 			layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
	// 				title: '提示框',				
	// 				icon:0,								
	// 		}); 
	// 			num++;
	// 			return false;            
	// 		} 
	// 	});
	// 	$('#login_btn').click(function () {
	// 			$.ajax({
	// 			url: 'admin/Login/login',
	// 			type: 'post',
	// 			data: {
	// 				name:$('#username').find('input').eq(0).prop('name'),
	// 				pass:$('#userpwd').find('input').eq(1).prop('value'),	
	// 			},
	// 			success:select
	// 		});
	// });
	// 	if(num>0){ 
	// 	 	return false;
	// 	}else{
	// 		layer.alert('登陆成功！',{
	// 			title: '提示框',				
	// 			icon:1,		
	// 		});
	// 		//location.href="/admin/Index/index";
	// 		//layer.close(index);	
	// 	}		  		     						
	 
		$("input[type='text'],input[type='password']").focus(function(){		
			var $el = $(this);
			var $parent = $el.parent();
			$parent.attr('class','frame_style').removeClass(' form_errors');
			if($el.val()==''){
				$parent.attr('class','frame_style').addClass(' form_errors');
			} else{
				$parent.attr('class','frame_style').removeClass(' form_errors');
			}
		});
	// });
</script>
</html>

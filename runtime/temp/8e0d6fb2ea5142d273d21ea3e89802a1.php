<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\wamp\www\tp\hotel\public/../application/index\view\contact\contact.html";i:1519638764;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link href="/index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/index/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/index/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!-- 文章的瀑布流 -->

<link rel="stylesheet" href="/index/css/style1.css" type="text/css" media="screen"/>

<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/index/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/index/js/blocksit.min.js"></script>
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="/index/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/index/css/font-awesome.min.css"> 
<!---->
<link rel="stylesheet" href="/index/css/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
	  #allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SHcaZjzBp2r5yfKkOltaAWxiCY4k5wM2"></script>
	
</head>
<body>
	<div class="banner">
		
	</div>
    <div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo">
							<h1><a href="index.html"><span></span></a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							
							<?php if(empty(\think\Session::get('username'))): else: ?>
							<li><a href="/index/User/userInfo">尊敬的用户 <?php echo \think\Session::get('username'); ?></a></li>

							<?php endif; ?>
							<li class="active"><a href="/index/index/index" data-hover="Home">首页</a></li>
							<li><a href="/index/Meal/meal" data-hover="About">房间餐</a></li>
							<li><a data-hover="Restaurant" href="/index/Restaurant/restaurant">餐厅</a></li>
							<li><a data-hover="Gallery" href="/index/Describe/describe">简介</a></li>
							<li><a data-hover="Rooms" href="/index/Rooms/rooms">房间</a></li>
							<li><a  href="/index/Destine/destine" data-hover="codes">预定</a></li>
							<li><a data-hover="Contact" href="/index/Contact/contact.html">留言</a></li>
							<?php if(empty(\think\Session::get('username'))): ?>
							<li><a href="/index/User/login">登录/注册</a></li>
							<?php else: ?>

							<li><a href="/index/User/loginOut">退出</a></li>
							<?php endif; ?>
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
		<!-- header		 -->
		<div class="content">
		<!-- contact -->
			<div class="contact">
				<div class="container">
					<h2 class="tittle">怎样找到我们</h2>
					<div style="height:300px" class="contact-bottom" id="allmap">
							<!-- 地图链接放这里 <iframe src=""  frameborder="0" style="border:0" allowfullscreen></iframe> -->
					</div>
					<div class="col-md-4 contact-left">
						<h4>地址</h4>
						<p>宝盛里
							<span>北京市海淀区</span></p>
						<ul>
							<li>订餐电话  :+15040579369</li>
							<li>订房电话  :+15040579369</li>
							<li>Fax :+1 078 4589 2456</li>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="col-md-8 contact-left cont">
						<h4>需求留言表</h4>
						<form action="#" method="post">
							<input type="text" name="Name" value="姓名" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" name="Email" value="邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" name="Phone" value="电话" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
							<textarea type="text" name="Message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">您的需求可以写在这里</textarea>
							<input type="submit" value="提交" >
							<input type="reset" value="清除" >
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<!-- contact -->
		</div>
				<div class="article">
				
				<h3 class="tittle">文章展示</h3>
				<div id="wrapper">

				<div id="container">
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/1.jpg" width="175" /></div>
						<strong>文章信息1</strong>
						<p>2007年7月，jQuery 1.1.3版发布，这次小版本的变化包含了对jQuery选择符引擎执行速度的显著提升。从这个版本开始，jQuery的性能达到了Prototype、Mootools以及Dojo等同类JavaScript库的水平。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/2.jpg" width="175" /></div>
						<strong>文章信息2</strong>
						<p>jQuery的第一个稳定版本，并且已经支持CSS选择符、事件处理和AJAX交互。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/3.jpg" width="175" /></div>
						<strong>文章信息3</strong>
						<p>jquery响应式网站文章无限加载瀑布流布局</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/4.jpg" width="175" /></div>
						<strong>文章信息4</strong>
						<p>jQuery是一个快速、简洁的JavaScript框架，是继Prototype之后又一个优秀的JavaScript代码库</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/5.jpg" width="175" /></div>
						<strong>文章信息5</strong>
						<p>jQuery的核心特性可以总结为：具有独特的链式语法和短小清晰的多功能接口；具有高效灵活的css选择器，并且可对CSS选择器进行扩展</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/6.jpg" width="175" /></div>
						<strong>文章信息6</strong>
						<p>jQuery的第一个稳定版本，并且已经支持CSS选择符、事件处理和AJAX交互。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/7.jpg" width="175" /></div>
						<strong>文章信息7</strong>
						<p>jQuery的核心特性可以总结为：具有独特的链式语法和短小清晰的多功能接口；具有高效灵活的css选择器，并且可对CSS选择器进行扩展</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/8.jpg" width="175" /></div>
						<strong>文章信息4</strong>
						<p>jQuery是一个快速、简洁的JavaScript框架，是继Prototype之后又一个优秀的JavaScript代码库</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/9.jpg" width="175" /></div>
						<strong>文章信息8</strong>
						<p>2007年7月，jQuery 1.1.3版发布，这次小版本的变化包含了对jQuery选择符引擎执行速度的显著提升。从这个版本开始，jQuery的性能达到了Prototype、Mootools以及Dojo等同类JavaScript库的水平。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/10.jpg" width="175" /></div>
						<strong>文章信息9</strong>
						<p>2007年7月，jQuery 1.1.3版发布，这次小版本的变化包含了对jQuery选择符引擎执行速度的显著提升。从这个版本开始，jQuery的性能达到了Prototype、Mootools以及Dojo等同类JavaScript库的水平。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/11.jpg" width="175" /></div>
						<strong>文章信息10</strong>
						<p>jQuery的第一个稳定版本，并且已经支持CSS选择符、事件处理和AJAX交互。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
				</div>

			</div>
		

			<div id="test" style="display:none;">
				<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/1.jpg" width="175" /></div>
						<strong>文章信息1</strong>
						<p>2007年7月，jQuery 1.1.3版发布，这次小版本的变化包含了对jQuery选择符引擎执行速度的显著提升。从这个版本开始，jQuery的性能达到了Prototype、Mootools以及Dojo等同类JavaScript库的水平。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/2.jpg" width="175" /></div>
						<strong>文章信息2</strong>
						<p>jQuery的第一个稳定版本，并且已经支持CSS选择符、事件处理和AJAX交互。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/3.jpg" width="175" /></div>
						<strong>文章信息3</strong>
						<p>jquery响应式网站文章无限加载瀑布流布局</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/4.jpg" width="175" /></div>
						<strong>文章信息4</strong>
						<p>jQuery是一个快速、简洁的JavaScript框架，是继Prototype之后又一个优秀的JavaScript代码库</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/5.jpg" width="175" /></div>
						<strong>文章信息5</strong>
						<p>jQuery的核心特性可以总结为：具有独特的链式语法和短小清晰的多功能接口；具有高效灵活的css选择器，并且可对CSS选择器进行扩展</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
					<div class="grid">
						<div class="imgholder"><img class="lazy" src="/index/images/pixel.gif" data-original="/index/images/6.jpg" width="175" /></div>
						<strong>文章信息6</strong>
						<p>jQuery的第一个稳定版本，并且已经支持CSS选择符、事件处理和AJAX交互。</p>
						<div class="meta"><a href="#" >点击查看>>></a></div>
					</div>
			</div>
			</div>

		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>Get In Touch</h4>
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
							<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"><a href="mailto:info@example.com">info@example.com</a></a></li>
							<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4></h4>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4></h4>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4></h4>
						<ul>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- footer -->
			<div class="copy-section">
				<div class="container">
					<div class="footer-top">
						<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
					</div>
					<div class="social-icons">
						<a href="#"><i class="icon"></i></a>
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
					</div>
				</div>
			</div>
	<!-- footer -->

</body>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var point = new BMap.Point(116.404, 39.915);
	map.centerAndZoom(point, 15);
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);               // 将标注添加到地图中
	marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
	map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
</script>
<script type="text/javascript">
	$(function(){
	$("img.lazy").lazyload({		
		load:function(){
			$('#container').BlocksIt({
				numOfCol:5,
				offsetX: 8,
				offsetY: 8
			});
		}
	});	
	$(window).scroll(function(){
			// 当滚动到最底部以上50像素时， 加载新内容
		if ($(document).height() - $(this).scrollTop() - $(this).height()<50){
			$('#container').append($("#test").html());		
			$('#container').BlocksIt({
				numOfCol:5,
				offsetX: 8,
				offsetY: 8
			});
			$("img.lazy").lazyload();
		}
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
});
</script>


</html>

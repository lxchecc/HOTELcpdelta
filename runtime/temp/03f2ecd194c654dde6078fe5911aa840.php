<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"C:\wamp\www\hotel\public/../application/index\view\restaurant\restaurant.html";i:1495762201;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Restaurant</title>
<link href="/index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/index/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/index/css/style.css" rel="stylesheet" type="text/css" media="all" />	
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
							<h1><a href="index.html"><span>Best  </span> Hotel</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						   <ul class="nav navbar-nav">
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
								<li><a href="/index/User/loginOut">注销</a></li>
								<?php endif; ?>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
		<!--header-->		
		<div class="content">
			<div class="restaurant">
				<div class="container">
					<h2 class="tittle">Restaurant</h2>
					<div class="rest-grids">
						<div class="col-md-8 rest-grid">
							<div class="rest-top">
								<h3>Royal Hyanni Dining</h3>
								<img src="/index/images/r1.jpg" class="img-responsive gray" alt=""/>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled printer took a galley of type and scrambled since it to make a type specimen book.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
							</div>
							<div class="rest-bottom">
								<div class="col-md-6 rest-left">
									<img src="/index/images/r2.jpg" class="img-responsive gray" alt=""/>
									<h4>Family Dining</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="col-md-6 rest-right">
								<img src="/index/images/r3.jpg" class="img-responsive gray" alt=""/>
									<h4>Casual Dining</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="rest-bottom">
								<div class="col-md-6 rest-left">
									<img src="/index/images/r4.jpg" class="img-responsive gray" alt=""/>
									<h4>Buffet Dining</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="col-md-6 rest-right">
								<img src="/index/images/r5.jpg" class="img-responsive gray" alt=""/>
									<h4>Wedding Dining</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="rest-bottom">
								<div class="col-md-6 rest-left">
									<img src="/index/images/r6.jpg" class="img-responsive gray" alt=""/>
									<h4>Bars and Lounges </h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="col-md-6 rest-right">
								<img src="/index/images/r8.jpg" class="img-responsive gray" alt=""/>
									<h4>Outdoor Dining </h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 rest-grid1">
							<h3>Make a Reservation</h3>
							<div class="reser-grid1">
								<h5>预定时间</h5>
								<div class="book_date1" id="ru">
									<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
									<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">													
								</div>

								<h5>退定时间</h5>
								<div class="book_date1" id="tui">	
									<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
									<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">													
								</div>

								<h5>餐厅类型</h5>
								<div class="best-hot1" id="type">
									<select class="sel" id="roomtype">
										<option>请选择餐厅类型</option>
										<option value="1">家庭餐</option>
										<option value="2">休闲餐饮</option>
										<option value="3">自助餐</option>
										<option value="4">婚礼餐饮</option>
										<option value="5">酒吧和休息吧</option>
										<option value="6">户外用餐</option>
									</select>
								</div>

								<h5>预定金额:(￥)/一天</h5>
								<div class="best-hot1" id="money">
									<input type="text" name="money" readonly/>
								</div>

								<h5>餐厅号</h5>
								<select class="sel" ID="roomnum">
									<option>请选择餐厅号</option>‘
								</select>

								
								<div class="best-hot">
										<button type="button" class="btn btn-lg btn-primary" style="font-size:18px;width:350px;margin-top:10px;">预定</button>
								</div>
							</div>
							<div class="lastest">
								<div class="lastest-top">
								<img src="/index/images/w5.jpg" class="img-responsive gray" alt=""/>
									<h4>Luxury Resort</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
								<div class="lastest-top">
								<img src="/index/images/ga7.jpg" class="img-responsive gray" alt=""/>
									<h4>Swinging Pool</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown .</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
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
						<h4>Site Links</h4>
						<ul>
							<li>Our Story</li>
							<li>Sleep Program</li>
							<li>Executive Travel Program</li>
							<li>Enriched Wellness</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Our Rooms</h4>
						<ul>
							<li>Superior Room</li>
							<li>Deluxe Room</li>
							<li>Business Room</li>
							<li>Executive Corner Room</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Our Services </h4>
						<ul>
							<li>Room services</li>
							<li>Free internet Wifi</li>
							<li>Television (50 channels)</li>
							<li>Pets allowed</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>	
		<!--footer-->
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
	<!--footer-->

</body>
<script type="text/javascript">
$('#type').change(function(){
	panduan();
	$.ajax({
		"type":"post",
		"url":"/index/Restaurant/dorest",
		"dataType":"json",
		"data":{
			"restType":$("#type option:selected").val(),
		},
		success:function(data){
			var obj = JSON.parse(data);
			for(var i=0;i<obj.length;i++){
				$('#roomnum').append("<option value='"+obj[i].c_seat+"'>"+obj[i].c_seat+"</option>");
			}
			$('#money input').attr('value',obj[0].cprice);
		}
	});
});
function panduan(){
    if($("#roomnum").html() != ''){
    	$("#roomnum").html("<option>请选择餐厅号</option>");
    	$('#money input').attr('value','');
	}
}
/*预定餐厅*/

$('.best-hot').on('click',function(){
	$.ajax({
		"type":"post",
		"url":"/index/Restaurant/addrest",
		"dataType":"json",
		"data":{
			"ru":$("#ru input").val(),
			"tui":$("#tui input").val(),
			"money":$('#mpney input[name=money]').val(),
			"c_type":$("#type option:selected").val(),
			"c_seat":$('#roomnum option:selected').val()
		},
		success:function(data){
			if(data == 1){
				alert('预定时间有误');
			}else if(data == 2){
				alert('退订时间有误');
			}else if(data == 3){
				alert('请选择餐厅类型');
			}else if(data == 4){
				alert('请选择餐厅号');
			}else if(data == 5){
				alert('预定成功');
			}else if(data == 0){
				window.location.href="/index/User/login";
			}
		}
	});
});
</script>
</html>

<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\wamp\www\tp\hotel\public/../application/index\view\restaurant\restaurant.html";i:1519653726;}*/ ?>
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
							<h1><a href="index.html"><span></span> </a></h1>
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
		<!--header-->		
		<div class="content">
			<div class="restaurant">
				<div class="container">
					<h2 class="tittle">餐厅</h2>
					<div class="rest-grids">
						<div class="col-md-8 rest-grid">
							<div class="rest-top">
								<h3>我们提供各种类型餐厅供您选择</h3>
								<img src="/index/images/r1.jpg" class="img-responsive gray" alt=""/>
								<p>人们经历了从吃饱到吃好的阶段后，吃正逐渐演变成一种文化消费，在品尝美味佳肴的时候，开始关注用餐环境的文化氛围与个性化。</p>
								<p>
								为求新求变，一种在欧美国家非常流行的餐厅形式————主题餐厅悄然出现，与一般餐厅相比，主题餐厅令人印象深刻的是它的用餐环境。它往往围绕一个特定的主题对餐厅进行装饰，甚至食品也与主题相配合，为顾客营造出一种或温馨或神秘，或怀旧或热烈的气氛，千姿百态主题纷呈。</p>
							</div>
							<div class="rest-bottom">
								<div class="col-md-6 rest-left">
									<img src="/index/images/r2.jpg" class="img-responsive gray" alt=""/>
									<h4>家庭餐厅</h4>
									<p>整个就餐空间,给一家人营造一种清新、优雅的氛围,以促进就餐者的和谐用餐。</p>
								</div>
								<div class="col-md-6 rest-right">
								<img src="/index/images/r3.jpg" class="img-responsive gray" alt=""/>
									<h4>休闲餐饮</h4>
									<p>何为休闲快餐？相关专家把它表述为介于正餐和快餐之间的一种餐饮形式。广义上的休闲快餐，其菜品不在多而在精，配搭小食、蛋糕、奶茶、咖啡等产品，兼顾贵宾正餐和下午茶的需求。</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="rest-bottom">
								<div class="col-md-6 rest-left">
									<img src="/index/images/r4.jpg" class="img-responsive gray" alt=""/>
									<h4>自助餐</h4>
									<p>自助餐，由就餐者随意在用餐时自行选择食物、饮料，然后或立或坐，自由地与他人在一起或是独自一人地用餐。自助餐之所以称为自助餐，主要是因其可以在用餐时调动用餐者的主观能动性，而由其自己动手，自己帮助自己，自己在既定的范围之内安排选用菜肴。</p>
								</div>
								<div class="col-md-6 rest-right">
								<img src="/index/images/r5.jpg" class="img-responsive gray" alt=""/>
									<h4>婚礼餐</h4>
									<p>婚宴也称“吃喜酒”是婚礼当天答谢宾客举办的隆重筵席。如果说婚礼把整个婚嫁活动推向了高潮的话，那么婚宴则是高潮的顶峰。</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="rest-bottom">
								<div class="col-md-6 rest-left">
									<img src="/index/images/r6.jpg" class="img-responsive gray" alt=""/>
									<h4>酒吧</h4>
									<p>繁忙的工作之余，邀几个朋友，到酒吧里听听歌跳跳舞，也是一种极好的娱乐活动。</p>
								</div>
								<div class="col-md-6 rest-right">
								<img src="/index/images/r8.jpg" class="img-responsive gray" alt=""/>
									<h4>户外餐厅</h4>
									<p>环境一流，服务一流，有露天位，订座服务，可以刷卡，有包厢，有儿童游乐区，有停车位，有表演，提供在线菜单，有下午茶，有wifi</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 rest-grid1">
							<h3>预定您的餐厅</h3>
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
		<!--footer-->
			<div class="copy-section">
				<div class="container">
					<div class="footer-top">
						<p><a target="_blank" href="http://sc.chinaz.com/moban/"></a></p>
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
			"money":$('#money input[name=money]').val(),
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

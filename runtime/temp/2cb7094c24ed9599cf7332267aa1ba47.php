<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"C:\wamp\www\hotel\public/../application/index\view\meal\meal.html";i:1495077392;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>About</title>
<link href="/index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/index/js/jquery.min.js"></script>
<script src="/index/layer/layer.js" type="text/javascript"></script>
<script src="/index/layer/jquery-1.8.3.min.js" type="text/javascript"></script>
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
<script type="text/javascript" src="/index/js/numscroller-1.0.js"></script>
<link rel="stylesheet" href="/index/css/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<style type="text/css">
		/*.jia{
			width:250px;
			height:200px;
			background:#E1FFFF;
			display:none;
			}
		.xinxi{
			text-align:center;
			font-size:15px;
			line-height:30px;
			color:#800000;
			
		}
		.notice{
			width:250px;
			height:30px;
			color:#0000CD;
		}*/
	</style>
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
								<?php if(empty(\think\Session::get('uid'))): ?>
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
		<!-- <div class="content">
			<div class="about-section">
				<div class="container">
					<h2 class="tittle">About the Moon Hotel</h2>
					<div class="about-grids">
						<div class="col-md-4 about-grid">
							<h4>History of Caruso Luxury Hotel</h4>
							<p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
							<p>Ut placerat euismod nibh industry's stand orci donec mollis, est non scelerisque blandit, velit nunc laoreet dol scrambled it to augue non elit aliquam in vehicula sem phasellu  consectetur adipiscing elit donec porttitor lectus at neque sollicitudin.</p>
						</div>
						<div class="col-md-8 about-grid">
							<div class="about-top">
								<div class="col-md-6 about-left">
									<div class="about-img">
										<img src="/index/images/s.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="col-md-6 about-right">
									<div class="about-img">
										<img src="/index/images/ga1.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="about-top1">
								<div class="col-md-6 about-left">
									<div class="about-img">
										<img src="/index/images/ga2.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="col-md-6 about-right">
									<div class="about-img">
										<img src="/index/images/ga7.jpg" class="img-responsive gray" alt=""/>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>	
			<div class="statistics">
				<div class="container">
					<h3 class="tittle1">Hotel Statistics</h3>
					<div class="statistics-grids">
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='190' data-delay='.5' data-increment="100">190</div>
							<h5>Guest Stay</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100">372</div>
							<h5>Book Room</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100">10520</div>
							<h5>Members Stay</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='256' data-delay='.5' data-increment="100">256</div>
							<h5>Meals Served</h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div> -->
			<!--team-->
	<div class="team">
		<div class="container">
			<h3 class="tittle">Room meal</h3>
			<?php foreach($list as $val): ?>
			<div class="team-row" style="margin-left:50px;">
				<div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s" style="margin:10px 10px;">
					<h5><?php echo $val['m_name']; ?></h5>
					<p style="width:200xp;height:50px;"><?php echo $val['m_content']; ?></p>
					<div class="social-icons">
						<?php if(!empty(\think\Session::get('username'))): ?>
						<input type="hidden" name="mid" value="<?php echo $val->mid; ?>">
						<span class="label label-danger" style="font-size:20px;">￥<?php echo $val['m_money']; ?></span>
						<button type="button" class="btn btn-lg btn-success" id="" onclick="caidan(<?php echo $val['mid']; ?>)">加入菜单</button>
						<?php else: ?>
						<button type="button" class="btn btn-lg btn-success"><a href="/index/User/login">点我登录</a></button>
						<?php endif; ?>
					</div>
					<div class="team-img">
						<img width="200" height="300" src="<?php echo $val['m_picture']; ?>" alt="">
					</div>
				</div>
				<!-- <div class="clearfix"> </div> -->
			</div>
			<?php endforeach; ?>
	<!--//team-->		

		</div>
		<div style="text-align:center;"><?php echo $list; ?></div>

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
						<h4>Hotel top links</h4>
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
	function caidan(id)
	{
		$.ajax({
			"type":"post",
            "url":"/index/Meal/addMeal",
            "dataType":"json",
            "data":{
            "mid":id
            },
            "success":function(data){
            	if(data == 1){
            		alert('操作有误');
            	}
            }
		});
		//配置一个透明的询问框
			layer.open({
				content:'添加成功',
					//time: 20000, //20s后自动关闭
				btn: ['继续添加', '我的菜单'],
				yes: function(index,layero){
					window.location.href="/index/Meal/meal";
					
				},
				btn2: function(index,layero){
					window.open("/index/Destine/destine");
				}
			});
	};
</script>
</html>

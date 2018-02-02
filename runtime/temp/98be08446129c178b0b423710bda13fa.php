<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp\www\hotel\public/../application/index\view\describe\describe.html";i:1495768641;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
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
<link href="/index/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />	
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
		<!---header--->		
		<div class="content">
	
	<!--header-->		
		<div class="content">
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
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='190' data-delay='.5' data-increment="100"><?php echo $roomNum; ?></div>
							<h5>剩余房间数</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372' data-delay='.5' data-increment="100"><?php echo $restNum; ?></div>
							<h5>剩余客厅数</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10520' data-delay='.5' data-increment="100"><?php echo $caiNum; ?></div>
							<h5>菜品总数</h5>
						</div>
						<div class="col-md-3 statistics-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='256' data-delay='.5' data-increment="100"><?php echo $userNum; ?></div>
							<h5>用户</h5>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div> 

<!-- gallery -->
<div class="gallery">
	<div class="container">
			<h2 class="tittle">Gallery</h2>
		<div class="gal-btm">
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-1" >
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInUp animated" data-wow-delay=".5s">
				<a href="#image-2" >
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga1.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
				

			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-3" >
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga2.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-6 gal-gd-sec wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-4" >
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga3.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-6 gal-gd-sec wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-5" >
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga4.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-6">
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga5.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-4 gal-gd wow fadeInDown animated" data-wow-delay=".5s">
				<a href="#image-7">
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga6.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="col-md-4 gal-gd wow fadeInRight animated" data-wow-delay=".5s">
				<a href="#image-8">
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga7.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">Gallery</h4>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-link"></i>
						</span>
						<span class="nd-icon">
							<i class="glyphicon glyphicon-search"></i>
						</span>
					
					</div>					
				</div>				
			</div>
			</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //gallery -->
	<div class="lb-overlay" id="image-1">
		<img src="/index/images/ga.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-2">
		<img src="/index/images/ga1.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-3">
		<img src="/index/images/ga2.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-4">
		<img src="/index/images/ga3.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-5">
		<img src="/index/images/ga4.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-6">
		<img src="/index/images/ga5.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-7">
		<img src="/index/images/ga6.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
	</div>
	<div class="lb-overlay" id="image-8">
		<img src="/index/images/ga7.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>Gallery</h3>
				<p>Neque porro quisquam est, qui dolorem ipsum 
					quia dolor sit amet, consectetur, adipisci velit, 
					sed quia non numquam eius modi tempora incidunt ut
					labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">Close</a>
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
						<h4>Hotel top links</h4>
						<ul>
							<li>Our Story</li>
							<li>Sleep Program</li>
							<li>Executive Travel Program</li>
							<li>Enriched Wellness</li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid">
						<h4>Our Room</h4>
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
</html>
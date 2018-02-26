<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\wamp\www\tp\hotel\public/../application/index\view\describe\describe.html";i:1519625670;}*/ ?>
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
								<h1><a href="index.html"><span> </span></a></h1>
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
		<!---header--->		
		<div class="content">
	
	<!--header-->		
		<div class="content">
			<div class="about-section">
				<div class="container">
					<h2 class="tittle">关于我们</h2>
					<div class="about-grids">
						<div class="col-md-4 about-grid">
							<h4>酒店历史</h4>
							<p>1952年，企业家繁斌·威尔逊在美国田纳西州孟菲斯开设了第一家假日酒店。</p>
							<p>1988年，巴斯集团收购了假日酒店，开始进军酒店业。假日酒店作为业内第一个进行全球性发展的品牌，同时也为整个酒店行业奠定了一系列全新基准。</p>
							<p>1984年，第一家假日酒店在北京开业，洲际酒店集团 (IHG)成为最早进入中国的国际酒店集团之一。</p>
							<p>1998年，巴斯集团收购了洲际酒店品牌，将这一豪华品牌纳入集团旗下。</p>
							<p>2000年，巴斯集团出售酿酒业务，公司更名为六洲酒店集团（Six Continents PLC），确立了其专注于酒店业的发展。</p>
							<p>2003年，六洲酒店集团正式更名为洲际酒店集团。</p>
							<p>2017年，大中华区成为独立业务单位，直接向集团伦敦总部汇报。
								</p>
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
					<h3 class="tittle1">酒店当前状态</h3>
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
			<h2 class="tittle">图片展示区</h2>
		<div class="gal-btm">
			<div class="col-md-4 gal-gd wow fadeInLeft animated" data-wow-delay=".5s">
				<a href="#image-1" >
					<div class="nd-wrap nd-style-8">
						<img src="/index/images/ga.jpg" class="img-responsive" alt=" " />
						<div class="nd-content">
				<div class="nd-content_inner">
					<div class="nd-content_inner1">
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
						<h4 class="nd-title">精彩图集</h4>
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
			<h3>精彩图片</h3>
				<p>这是公司总部的沙发 ，由知名设计师设计 ，量产过1万件，广受四方宾客好评</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-2">
		<img src="/index/images/ga1.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>这是公司位于中国黑龙江的度假村，常年积雪覆盖。</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-3">
		<img src="/index/images/ga2.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>酒店的总统套房，只选用特级名牌家具，艺术殿堂一般的装潢。</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-4">
		<img src="/index/images/ga3.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>这是公司位于美国夏威夷的度假村，阳光沙滩</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-5">
		<img src="/index/images/ga4.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>公司的轮船旅馆，背依青山，面朝大海</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-6">
		<img src="/index/images/ga5.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>整洁舒适的房间</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-7">
		<img src="/index/images/ga6.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>高端精致的环境设计</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-8">
		<img src="/index/images/ga7.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>酒店高端房间实拍</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-9">
		<img src="/index/images/ga9.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>酒店高端房间实拍</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
	</div>
	<div class="lb-overlay" id="image-10">
		<img src="/index/images/ga10.jpg" alt="image1" />
		<div class="gal-info">							
			<h3>精彩图片</h3>
				<p>酒店高端房间实拍</p>
		</div>
		<a href="/index/Gallery/gallery" class="lb-close">关闭</a>
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
						<h4> </h4>
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
<!-- <script type="text/javascript">
	window.onload = window.onscroll = function () {
		var aImage = document.getElementsByTagName('img');
		/*console.log(aImage);*/
		//获取可视区域的高度
		var height = document.body.clientHeight;
		/*console.log(height);*/
		//得到卷起的高度
		var scrollTop = document.body.scrollTop;
		console.log(scrollTop);
		console.log(aImage[1].offsetTop);
		for (var i = 0; i < aImage.length; i++) {
			var top = aImage[i].offsetTop;
			if (top <= height + scrollTop) {
				aImage[i].src = aImage[i].getAttribute('_src');
			}
		}
	};
//瀑布流
</script> -->
</html>

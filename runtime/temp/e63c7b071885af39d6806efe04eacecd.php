<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"C:\wamp\www\tp\hotel\public/../application/index\view\index\index.html";i:1519653726;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="/index/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="/index/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="/index/css/font-awesome.css" rel="stylesheet">
<!-- 分享 -->
<link href="/index/share/css/share.css" rel="stylesheet" type="text/css">
<!-- 弹窗 -->
<script src="/index/js/jquery.min.js"></script>
<script src="/index/layer/layer.js" type="text/javascript"></script>
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<script src="/index/login/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/index/js/jquery.min.js"></script>
<script src="/index/js/bootstrap.min.js"></script>
<!---->
<link rel="stylesheet" href="/index/css/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--strat-date-piker-->
<!-- requried-jsfiles-for owl -->
							<link href="/index/css/owl.carousel.css" rel="stylesheet">
							    <script src="/index/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
							 <!-- //requried-jsfiles-for owl -->

</head>
<body>
	<div class="banner-section">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slider-info">
							<a href="/index/Destine/destine">
							<img src="/index/images/ba1.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>在这里享受生活</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<a href="/index/Destine/destine">
							<img src="/index/images/ba2.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>在这里享受便利</h3>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-info">
							<a href="/index/Destine/destine">
							<img src="/index/images/ba3.jpg" class="img-responsive" alt="">
							</a>
						</div>
						<div class="container">
							<div class="banner-text">
								<h3>在这里享受最高端的服务</h3>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
			<!-- FlexSlider -->
			<script defer src="/index/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(function(){
						SyntaxHighlighter.all();
					});
					$(window).load(function(){
					$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
					});
					});
				</script>
			<!-- FlexSlider -->
			<!-- slider -->
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
							<li><a href="/index/User/userInfo">尊敬的用户 <?php echo $user['username']; ?></a></li>

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
			<!--welcome-->
			<div class="welcome">
				<div class="container">
					<h2 class="tittle">欢迎光临</h2><span></span>>
						<p class="wel text">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp这可能是你见过最好的酒店。我们拥有一流的就餐环境，一流的房间质量，整洁的住宿用品，美味可口的佳肴。还有你意想不到的服务，一切只为了你。</p>
					<div class="wel-grids">
						<div class="col-md-3 wel-grid">
							<img src="/index/images/w1.jpg" class="img-responsive gray" alt=""/>
							<h4>豪华套房</h4>
							<p></p>
						</div>
						<div class="col-md-3 wel-grid">
							<img src="/index/images/w2.jpg" class="img-responsive gray" alt=""/>
							<h4>标准套房</h4>
							<p></p>
						</div>
						<div class="col-md-3 wel-grid">
							<img src="/index/images/w3.jpg" class="img-responsive gray" alt=""/>
							<h4>休闲专区</h4>
							<p></p>
						</div>
						<div class="col-md-3 wel-grid">
							<img src="/index/images/w4.jpg" class="img-responsive gray" alt=""/>
							<h4>额外服务</h4>
							<p></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--welcome-->
			<div class="resort-section">
				<div class="container">
					<h3 class="tittle">特别推荐<span></span></h3>
					<div class="resort-grids">
				<!-- start content_slider -->
						<div id="owl-demo" class="owl-carousel">
							<?php foreach($room as $val): ?>
					        <div class="item">
					           <div class="col-md-6 cap-img">
									<img src="<?php echo $val['r_picture']; ?>" class="img-responsive gray" alt=""/>
								</div>
								<div class="col-md-6 cap">
								<?php if($val['roomtype'] == 1): ?>
									<h4>普通客房</h4>
								<?php elseif(($val['roomtype'] == 2)): ?>
									<h4>标准客房</h4>
								<?php elseif(($val['roomtype'] == 3)): ?>
									<h4>高级客房</h4>
								<?php elseif(($val['roomtype'] == 4)): ?>
									<h4>豪华客房</h4>
								<?php elseif(($val['roomtype'] == 5)): ?>
									<h4>总统客房</h4>
								<?php endif; ?>	
									<!-- <ul class="cap1">
										<li><i class="glyphicon glyphicon-map-marker"></i> 33 Street Name, City Name United States</li>
										<li><i class="glyphicon glyphicon-plane"></i> US Airlines</li>
										<li><i class="glyphicon glyphicon-road"></i> Free Transport</li>
									</ul> -->										
									<p><?php echo $val['room_content']; ?></p>
									<div class="detais">
										<div class="col-md-9 deatils-left">
											<div class="list">
												<ul>
													<li><i class="glyphicon glyphicon-thumbs-up"></i> Free Private Parking is Available</li>
													<li><i class="glyphicon glyphicon-cutlery"></i>在客房内用餐服务09:00AM-12:00AM</li>
													<li><i class="glyphicon glyphicon-signal"></i> Free High Speed Wi-Fi Internet in Room</li>
												</ul>
											</div>
										</div>
										<div class="col-md-3 deatils-right">
											<div class="detail-top">
												<span>money</span>
												<h4><?php echo $val['roomprice']; ?></h4>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
					            <div class="clearfix"> </div>
					        </div>
					        <?php endforeach; ?>
				        </div>
					</div>
				</div>
			</div>

			<div class="superlist">
				<div class="container">
					<h3 class="tittle">精彩图集</h3>
					<p class="wel text">这里的每张图片都是实景拍摄，优雅的环境足以让您心动，我们力图做的更好让您满意。</p>
					<div class="super-grids">
						<div class="col-md-8 super-grid">
							<div class="super-top">
							<img src="/index/images/s1.jpg" class="img-responsive gray" alt=""/>
							</div>
							<div class="super-bottom">
								<div class="col-md-6 super-left">
								<img src="/index/images/s2.jpg" class="img-responsive gray" alt=""/>
								</div>
								<div class="col-md-6 super-right">
								<img src="/index/images/s3.jpg" class="img-responsive gray" alt=""/>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-4 super-grid1">
							<div class="super-top">
								<img src="/index/images/s4.jpg" class="img-responsive gray" alt=""/>
									<h4>精工细作</h4>
									<p>本酒店的室内设计由知名设计团队耗时3年打造，并选用世界一流环保建材。付出如此高昂的代价，只为能给您舒适的体验</p>
							</div>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>

			
		</div>

		<div class="footer-section">
			<div class="container">
				<div class="footer-grids">
					<div class="col-md-3 footer-grid">
						<h4>和我们联系</h4>
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
						<h4>分享给朋友们</h4>
						<!-- <ul>
							<li>Room services</li>
							<li>Free internet Wifi</li>
							<li>Television (50 channels)</li>
							<li>Pets allowed</li>
						</ul> -->
						<div>
							<center>
							<div class="share-demo">
								<a href="javascript:void(0)" class="share"><img src="/index/share/images/share-ico.png"/></a>
							</div>
							<script type="text/javascript" src="/index/share/js/share.js"></script>
							<script  type="text/javascript">
								$('.share').shareConfig({
									Shade : true, //是否显示遮罩层
									Event:'click', //触发事件
									Content : 'Share', //内容DIV ID
									Title : '站长素材' //显示标题
								});
							</script>
							</center>
						</div>
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
function cong()
{
	layer.open({
		  type: 1,
		  title:'充值',
		  skin: 'layui-layer-rim', //样式类名
		  area: ['230px', '180px'], //宽高
		  closeBtn: 0, //不显示关闭按钮
		  anim: 2,
		  shadeClose: true, //开启遮罩关闭
		  content:"<textarea id='money'></textarea>",
		  btn: ['确定','取消'],
		  yes:function(index,layero){
				$.ajax({
					"type":"post",
			        "url":"/index/Index/addMoney",
			        "dataType":"json",
			        "data":{"money":layero.find('#money').val()},
			        success:function(data){
			        	if(data == 1){
			        		layer.msg('充值成功！',{icon:1,time:1000},function () {
				    			window.location.reload();
				    		});
			        	}	
		        	}
				})
		  }
	});
		
};
	$('#xingxi').on('click' , function(){
		
		$.ajax({
    			"type":"post",
            	"url":"/index/Index/userInfo",
           		"dataType":"json",
           		"async":true,
            	"data":{
            	"realyname":$("p input[name=realyname]").val(),
            	"tel":$("p input[name=tel]").val(),
            	"email":$("p input[name=email]").val(),
            	"usersfz":$("p input[name=usersfz]").val(),
                },
           		"success":check
    	});
	});
	function check(data){
		if(data == 1){
			alert('姓名不能为空');
		}else if(data ===2){
			alert('手机号或邮箱或身份证不能为空');
		}else if(data ==3){
			alert('格式不正确');
		}else if(data ==4){
			window.location.href="/index/index/index";
		}
    };

</script>
<script>  
    $(function(){  
        var wsServer = 'ws://xxxx:xxxx';  
        var ws = new WebSocket(wsServer);  
        //alert("22");  
        ws.onopen = function(e){  
            //alert("连接成功");  
        }  
        ws.onclose = function(e){  
            alert("连接关闭");  
        }  
        ws.onerror = function (e) {  
            //alert("连接错误");  
        }  
        ws.onmessage = function (evt) {  
            //alert(evt);  
            //alert("22");  
            var data=JSON.parse(evt.data);  
            alert(data.message);  
            //var message=JSON.stringify(evt.data);  
            //alert(message);  
            //发送字符串，服务器端只需要unmask就可以了，如果是json串，后端就要json_decode  
        };  
        $(":button").click(function(){  
            var message=$("#message").val();  
            console.log(ws.send(message));  
        })  
    })
</script>
</html>

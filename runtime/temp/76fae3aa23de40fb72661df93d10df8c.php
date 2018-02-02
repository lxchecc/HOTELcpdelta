<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"C:\wamp\www\hotel\public/../application/index\view\rooms\rooms.html";i:1496138326;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Rooms</title>
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
<!---strat-date-piker---->
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
			<!--Rooms-->
			<div class="welcome">
				<div class="container">
					<h2 class="tittle">Special Rooms</h2>
						<p class="wel text">Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.</p>
					<div class="wel-grids">
						<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
						<div class="col-md-3 wel-grid">
							<img src="<?php echo $value['r_picture']; ?>" class="img-responsive gray" alt=""/>
							<h4><?php echo $value['roomid']; ?></h4>
							<?php if($value['roomtype'] == 1): ?>
							<p>普通客房</p>
							<?php elseif(($value['roomtype'] == 2)): ?>
							<p>标准客房</p>
							<?php elseif(($value['roomtype'] == 3)): ?>
							<p>高级套房</p>
							<?php elseif(($value['roomtype'] == 4)): ?>
							<p>豪华套房</p>
							<?php elseif(($value['roomtype'] == 5)): ?>
							<p>总理套房</p>
							<?php endif; ?>
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <div class="clearfix"></div> -->
					</div>
				</div>
				<div style="text-align:center"><?php echo $list; ?></div>
			</div>

			<!--Rooms-->
			<div class="reservation">
				<div class="container">
					<h3 class="tittle">Make reservation</h3>
					<div class="reservation-grids">
						<div class="col-md-4 reser-grid">
							<h5>入住时间:</h5>
							<div class="book_date" id="ru">							
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">													
							</div>
						</div>


						<div class="col-md-4 reser-grid">
							<h5>退房时间:</h5>
							<div class="book_date" id="tui">							
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
							</div>
						</div>


						<div class="col-md-4 reser-grid">
							<h5>预定金额:(￥)/每晚</h5>
							<div class="best-hot" id="money">
								<input type="text" name="money" readonly/>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>


					<div class="reservation-grids">
						<div class="col-md-4 reser-grid" id="type">
							<h5>大板块:</h5>
							<select class="sel" id="roomtype">
								<option value="1">普通房间</option>
								<option value="2">标准房间</option>
								<option value="3">高级套房</option>
								<option value="4">豪华套房</option>
								<option value="5">总统套房</option>
							</select>
						</div>
					</div>

						<div class="col-md-4 reser-grid">
							<h5>房间号:(可选择)</h5>
							<select class="sel" ID="roomnum">
								<option>请选择房间号</option>
							</select>
						</div>
						<div class="col-md-4 reser-grid">
							<div class="best-hot-yun">
								<button type="button" class="btn btn-lg btn-primary" style="font-size:25px;">预定</button>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
			<div class="rooms-rates">
				<div class="container">
					<h3 class="tittle">Rooms & Rates</h3>
					<?php foreach($room as $roomlist): ?>
					<div class="rates-grids">
						<div class="rates-grid">
							<img src="<?php echo $roomlist['r_picture']; ?>" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<?php if($roomlist['roomtype'] == 1): ?>
							<p>普通客房</p>
							<?php elseif(($roomlist['roomtype'] == 2)): ?>
							<p>标准客房</p>
							<?php elseif(($roomlist['roomtype'] == 3)): ?>
							<p>高级套房</p>
							<?php elseif(($roomlist['roomtype'] == 4)): ?>
							<p>豪华套房</p>
							<?php elseif(($roomlist['roomtype'] == 5)): ?>
							<p>总理套房</p>
							<?php endif; ?>
							<p><?php echo $roomlist['room_content']; ?></p>
							<h5>￥<?php echo $roomlist['roomprice']; ?><span class="small">/ Night</span></h5>
						</div>
					</div>
					<?php endforeach; ?>
					<!-- <div class="rates-grids rate1">
						<div class="rates-grid1">
							<img src="/index/images/ga2.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text1">
							<h4>Single Room</h4>
							<p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
							<h5>$260.00 <span class="small">/ Night</span></h5>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="rates-grids">
						<div class="rates-grid">
							<img src="/index/images/ga7.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text">
							<h4>Standard Room</h4>
							<p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
							<h5>$260.00 <span class="small">/ Night</span></h5>
						</div>
					</div>
					<div class="rates-grids rate1">
						<div class="rates-grid1">
							<img src="/index/images/ga5.jpg" class="img-responsive gray" alt=""/>
						</div>
						<div class="rates-text1">
							<h4>Couple Room</h4>
							<p>Located in the heart of Aspen with a unique blend of contemporary luxury and historic heritage, deluxe accommodations, superb amenities, genuine hospitality and dedicated service. Located in the heart of </p>
							<h5>$260.00 <span class="small">/ Night</span></h5>
						</div>
						<div class="clearfix"></div>
					</div> -->
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
/*选择房间*/
	$('#type').change(function(){
		panduan();
		$.ajax({
			"type":"post",
			"url":"/index/Rooms/doroom",
			"dataType":"json",
			"data":{
				"roomtype":$("#type option:selected").val(),
			},
			success:function(data){
				var obj = JSON.parse(data);
				for(var i=0;i<obj.length;i++){
					//alert(obj[i].roomid);
					$('#roomnum').append("<option value='"+obj[i].roomid+"'>"+obj[i].roomid+"</option>");
				}
				$('#money input').attr('value',obj[0].roomprice);
			}
		});
	});

function panduan(){
    if($("#roomnum").html() != ''){
    	$("#roomnum").html("<option>请选择房间号</option>");
    	$('#money input').attr('value','');
	}
}

/*预定房间*/

$('.best-hot-yun').on('click',function(){
	$.ajax({
		"type":"post",
		"url":"/index/Rooms/addroom",
		"dataType":"json",
		"data":{
			"ru":$("#ru input").val(),
			"tui":$("#tui input").val(),
			"money":$('#mpney input[name=money]').val(),
			"roomtype":$("#type option:selected").val(),
			"roomid":$('#roomnum option:selected').val(),
		},
		success:function(data){
			if(data == 1){
				alert('入住时间有误');
			}else if(data == 2){
				alert('退房时间有误');
			}else if(data == 3){
				alert('请选择房间类型');
			}else if(data == 4){
				alert('请选择房间号');
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

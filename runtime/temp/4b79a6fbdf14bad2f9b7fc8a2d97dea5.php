<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\wamp64\www\git\hotel\public/../application/index\view\destine\destine.html";i:1519867553;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>Codes</title>
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
<link rel="stylesheet" href="/index/css/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!---strat-date-piker-->
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
							<li><a href="/index/User/userInfo">
								尊敬的用户 
								<?php if(!empty($user['realyname'])): ?>
									<?php echo $user['realyname']; else: ?>
									<?php echo $user['username']; endif; ?>
								</a>
							</li>
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
		<div class="page">
			<div class="container">
				<div class="short-heading">
					<a name="first">
					<a name="second">
					<a name="three">
					<a name="four">
					<a name="five">
					<a name="six">
					<h2 class="tittle">我的预定</h2>
				</div>
				<!--button-->
				<div class="grid_3 grid_4">
				  <div class="bs-example animated wow fadeInDown" data-wow-duration="1000ms">
					
					</div>
				  </div>
		  <!--buttons-->
				  <p class="grid1">
					<button type="button" class="btn btn-lg btn-default" id="more">显示更多</button>
					<button type="button" class="btn btn-lg btn-primary">--》</button>
					<button type="button" class="btn btn-lg btn-danger"><a href="#diCai">我的菜单</a></button>
					<button type="button" class="btn btn-lg btn-success"><a href="#diRoom">订单(房间)</a></button>
					<button type="button" class="btn btn-lg btn-info"><a href="#rest">订单(餐厅)</a></button>
					<button type="button" class="btn btn-lg btn-warning"><a href="#cai">支付菜单</a></button>
					<button type="button" class="btn btn-lg btn-success"><a href="#room">我的房间</a></button>
					<button type="button" class="btn btn-lg btn-info"><a href="#canting">我的餐厅</a></button>
				  </p>
			  <!--bages-->
			  	<a name="diCai">
			 	<div class="page-header">
					<h4><a href="#first">我的菜单</a></h4>
				</div>
				<div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="simple-table">
					<table class="table">
					  <caption>未付款的订单</caption>
					  <thead>
						<tr>
						  <th>编号</th>
						  <th>种类名</th>
						  <th>图片</th>
						  <th>价格</th>
						  <th>操作1</th>
						  <th>操作2</th>
						</tr>
					  </thead>
					  <tbody>

					  <?php foreach($che as $val): if($val['status'] == 0): ?>
						<tr>
						  <th scope="row"><?php echo $val['mid']; ?></th>
						  <td><?php echo $val['m_name']; ?></td>
						  <td><img width="30px" height="30px" src="<?php echo $val['m_picture']; ?>"></td>
						  <td style="color:red">￥<?php echo $val['m_money']; ?></td>
						  <td><button type="button" class="btn btn-lg btn-success" style="font-size:12px" onclick="addCai(<?php echo $val['mcid']; ?>)">点击付款</button></td>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px" onclick="yichu(<?php echo $val['mcid']; ?>)">移除菜单</button></td>
						</tr>
						<?php endif; endforeach; ?>
					  </tbody>
					</table>
				</div>
			   <!--Progress bars-->
			   	<a name="diRoom">
				<div class="page-header animated wow fadeInLeft" data-wow-duration="1000ms">
					<h4><a href="#second">我的订单(房间)</a></h4>
				</div>
				<div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="simple-table" id="content">
					<table class="table">
					  <caption>未付款的订单</caption>
					  <thead>
						<tr>
						  <th>房间号</th>
						  <th>房间类型</th>
						  <th>图片</th>
						  <th>房间价格</th>
						  <th>入住时间</th>
						  <th>退房时间</th>
						  <th>操作1</th>
						  <th>操作2</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php foreach($ord as $value): if($value['o_state'] == 2): ?>
						<tr>
						  <th scope="row"><?php echo $value['roomid']; ?></th>
						  <td><?php echo $value['roomtype']; ?></td>
						  <td><img width="30px" height="30px" src="<?php echo $value['r_picture']; ?>"/></td>
						  <td style="color:red">￥<?php echo $value['o_money']; ?></td>
						  <td><?php echo date('Y-m-d' , $value['ru_time']) ?></td>
						  <td><?php echo date('Y-m-d' , $value['tui_time']) ?></td>
						  <td><button type="button" class="btn btn-lg btn-success" style="font-size:12px" onclick="addroom(<?php echo $value['oid']; ?>)">点击付款</button></td>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px" onclick="yichu(<?php echo $value['oid']; ?>)">取消订单</button></td>
						</tr>
						<?php endif; endforeach; ?>
					  </tbody>
					</table>
					
				</div>
			  <!--//Progress bars-->
			  <!-- 餐厅 -->
			  <a name="rest">
			  <div class="page-header animated wow fadeInLeft" data-wow-duration="1000ms">
					<h4><a href="#three">我的订单(餐厅)</a></h4>
				</div>
				<div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="simple-table" id="content">
					<table class="table">
					  <caption>未付款的订单</caption>
					  <thead>
						<tr>
						  <th>餐厅号</th>
						  <th>餐厅类型</th>
						  <th>图片</th>
						  <th>房间价格</th>
						  <th>入住时间</th>
						  <th>退房时间</th>
						  <th>操作1</th>
						  <th>操作2</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php foreach($sum as $value): if($value['y_status'] == 0): ?>
						<tr>
						  <th scope="row"><?php echo $value['c_seat']; ?></th>
						  <td><?php echo $value['c_type']; ?></td>
						  <td><img width="30px" height="30px" src="<?php echo $value['c_picture']; ?>"/></td>
						  <td style="color:red">￥<?php echo $value['y_money']; ?></td>
						  <td><?php echo date('Y-m-d' , $value['ru_time']) ?></td>
						  <td><?php echo date('Y-m-d' , $value['tui_time']) ?></td>
						  <td><button type="button" class="btn btn-lg btn-success" style="font-size:12px" onclick="addrest(<?php echo $value['yid']; ?>)">点击付款</button></td>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px" onclick="yichu(<?php echo $value['yid']; ?>)">取消订单</button></td>
						</tr>
						<?php endif; endforeach; ?>
					  </tbody>
					</table>
					
				</div>
				<!--Panels-->
				<a name="cai">
				<div class="page-header">
					<h4><a href="#four">订单处理(菜单)</a></h4>
				</div>
				<div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="simple-table">
					<table class="table">
					  <caption>我的菜单</caption>
					  <thead>
						<tr>
						  <th>编号</th>
						  <th>种类名</th>
						  <th>图片</th>
						  <th>价格</th>
						  <th>操作1</th>
						  <th>操作2</th>
						</tr>
					  </thead>
					  <tbody>
						<?php foreach($che as $val): if($val['status'] == 1): ?>
						<tr>
						  <th scope="row"><?php echo $val['mid']; ?></th>
						  <td><?php echo $val['m_name']; ?></td>
						  <td><img width="30px" height="30px" src="<?php echo $val['m_picture']; ?>"></td>
						  <td style="color:red">￥<?php echo $val['m_money']; ?></td>
						  <td><button type="button" class="btn btn-lg btn-success" style="font-size:12px">付款成功</button></td>
						  <?php if($val['m_refund'] == 0): ?>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px" onclick="refund(<?php echo $val['mcid']; ?>)">申请退款</button></td>
						  <?php elseif(($val['m_refund'] == 1)): ?>
						  <td><button type="button" class="btn btn-lg btn-warning" style="font-size:12px">等待审核</button></td>
						  <?php elseif(($val['m_refund'] == 2)): ?>
						  <td><button type="button" class="btn btn-lg btn-info" style="font-size:12px">审核通过</button></td>
						  <?php elseif(($val['m_refund'] == 3)): ?>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px">审核未通过</button></td>
						  <?php endif; ?>
						</tr>
						<?php endif; endforeach; ?>
					  </tbody>

					</table>
				</div>
			   <!--//Panels-->
			   <a name="room">
			   <div class="page-header animated wow fadeInLeft" data-wow-duration="1000ms">
					<h4><a href="#five">订单处理(房间)</a></h4>
				</div>
				<div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="simple-table" id="content">
					<table class="table">
					  <caption>我的房间</caption>
					  <thead>
						<tr>
						  <th>房间号</th>
						  <th>房间类型</th>
						  <th>图片</th>
						  <th>房间价格</th>
						  <th>入住时间</th>
						  <th>退房时间</th>
						  <th>操作1</th>
						  <th>操作2</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php foreach($ord as $value): if($value['o_state'] == 1): ?>
						<tr>
						  <th scope="row"><?php echo $value['roomid']; ?></th>
						  <td><?php echo $value['roomtype']; ?></td>
						  <td><img width="30px" height="30px" src="<?php echo $value['r_picture']; ?>"/></td>
						  <td style="color:red">￥<?php echo $value['o_money']; ?></td>
						  <td><?php echo date('Y-m-d' , $value['ru_time']) ?></td>
						  <td><?php echo date('Y-m-d' , $value['tui_time']) ?></td>
						  <td><button type="button" class="btn btn-lg btn-success" style="font-size:12px">付款成功</button></td>
						  <?php if($value['o_refund'] == 0): ?>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px" onclick="refund(<?php echo $value['oid']; ?>)">申请退款</button></td>
						  <?php elseif(($value['o_refund'] == 1)): ?>
						  <td><button type="button" class="btn btn-lg btn-warning" style="font-size:12px">等待审核</button></td>
						  <?php elseif(($value['o_refund'] == 2)): ?>
						  <td><button type="button" class="btn btn-lg btn-info" style="font-size:12px">审核通过</button></td>
						  <?php elseif(($value['o_refund'] == 3)): ?>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px">审核未通过</button></td>
						  <?php endif; ?>
						</tr>
						<?php endif; endforeach; ?>
					  </tbody>
					</table>	
				</div>

				<!-- 客厅 -->
				<a name="canting">
				<div class="page-header animated wow fadeInLeft" data-wow-duration="1000ms">
					<h4><a href="#six">订单处理(餐厅)</a></h4>
				</div>
				<div class="bs-example animated wow fadeInLeft" data-wow-duration="1000ms" data-example-id="simple-table" id="content">
					<table class="table">
					  <caption>我的餐厅</caption>
					  <thead>
						<tr>
						  <th>餐厅号</th>
						  <th>餐厅类型</th>
						  <th>图片</th>
						  <th>餐厅价格</th>
						  <th>预定时间</th>
						  <th>退订时间</th>
						  <th>操作1</th>
						  <th>操作2</th>
						</tr>
					  </thead>
					  <tbody>
					  	<?php foreach($sum as $value): if($value['y_status'] == 1): ?>
						<tr>
						  <th scope="row"><?php echo $value['c_seat']; ?></th>
						  <td><?php echo $value['c_type']; ?></td>
						  <td><img width="30px" height="30px" src="<?php echo $value['c_picture']; ?>"/></td>
						  <td style="color:red">￥<?php echo $value['y_money']; ?></td>
						  <td><?php echo date('Y-m-d' , $value['ru_time']) ?></td>
						  <td><?php echo date('Y-m-d' , $value['tui_time']) ?></td>
						  <td><button type="button" class="btn btn-lg btn-success" style="font-size:12px">付款成功</button></td>
						  <?php if($value['y_refund'] == 0): ?>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px" onclick="refund(<?php echo $value['yid']; ?>)">申请退款</button></td>
						  <?php elseif(($value['y_refund'] == 1)): ?>
						  <td><button type="button" class="btn btn-lg btn-warning" style="font-size:12px">等待审核</button></td>
						  <?php elseif(($value['y_refund'] == 2)): ?>
						  <td><button type="button" class="btn btn-lg btn-info" style="font-size:12px">审核通过</button></td>
						  <?php elseif(($value['y_refund'] == 3)): ?>
						  <td><button type="button" class="btn btn-lg btn-danger" style="font-size:12px">审核未通过</button></td>
						  <?php endif; ?>
						</tr>
						<?php endif; endforeach; ?>
					  </tbody>
					</table>	
				</div>
				
			</div>
				<div style="float:right;margin-right:200px;">总计:<span style="color:red;margin-left:20px;"><?php echo $num; ?></span>
				<button type="button" class="btn btn-lg btn-success" style="font-size:12px;margin-left:20px;" onclick="zong()">付款</button>
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
<script type="text/javascript">
var $more = $(".grid1 button:gt(1)");
$more.hide();
$('#more').click(function(){
	if ($more.is(":visible")) {
		$('#more').html("显示更多");
		$more.hide(1000);
	} else {
		$('#more').html("隐藏更多");
		$more.show(1000);
	}
	
	return false;
});


function yichu(id)
{
	$.ajax({
		"type":"post",
        "url":"/index/Destine/delCai",
        "dataType":"json",
        "data":{"mcid":id,'oid':id,'yid':id},
        "success":function(data){
        	
        }
	});

	layer.open({
		content:'移除成功',
		time: 5000, //20s后自动关闭
		btn: ['确定'],
		yes: function(index,layero){
			window.location.href="/index/Destine/destine";
		}
	});
		
};
function addCai(id)
{
	layer.open({
	  type: 1,
	  title:'价格',
	  skin: 'layui-layer-rim', //样式类名
	  area: ['200px', '170px'], //宽高
	  closeBtn: 0, //不显示关闭按钮
	  anim: 2,
	  shadeClose: true, //开启遮罩关闭
	  content:"<textarea id='money'></textarea>",
	  btn: ['确定','取消'],
	  yes:function(index,layero){
			$.ajax({
				"type":"post",
		        "url":"/index/Destine/addCai",
		        "dataType":"json",
		        "data":{"mcid":id,"money":layero.find('#money').val()},
		        "success":function(data){
	        		if(data == 1){
	        			layer.msg('您没有入住,请先入住！',{icon:2,time:1000},function () {
						    // window.location.reload();
						});
	        		}else if(data == 2){
	        			layer.msg('支付成功！',{icon:1,time:1000},function () {
						    window.location.reload();
						});
	        		}else if(data == 3){
	        			layer.msg('价格与实际价格不符！',{icon:3,time:1000},function () {
						 	
						});
	        		}else if(data == 4){
	        			layer.msg('您的余额不足！',{icon:3,time:1000},function () {
						 	
						});
	        		}
	        	}
			});
	  }
	});
		
};
function addroom(id)
{
	layer.open({
	  type: 1,
	  title:'价格',
	  skin: 'layui-layer-rim', //样式类名
	  area: ['200px', '170px'], //宽高
	  closeBtn: 0, //不显示关闭按钮
	  anim: 2,
	  shadeClose: true, //开启遮罩关闭
	  content:"<textarea id='money'></textarea>",
	  btn: ['确定','取消'],
	  yes:function(index,layero){
			$.ajax({
				"type":"post",
		        "url":"/index/Destine/addroom",
		        "dataType":"json",
		        "data":{"oid":id,"money":layero.find('#money').val()},
		        "success":function(data){
	        		if(data == 1){
	        			layer.msg('您没有入住,请先入住！',{icon:2,time:1000},function () {
						    window.location.reload();
						});
	        		}else if(data == 2){
	        			layer.msg('支付成功！',{icon:1,time:1000},function () {
						    window.location.reload();
						});
	        		}else if(data == 3){
	        			layer.msg('价格与实际价格不符！',{icon:3,time:1000},function () {
						 	
						});
	        		}else if(data == 4){
	        			layer.msg('您的余额不足！',{icon:3,time:1000},function () {
						 	
						});
	        		}
	        	}
			});
	  }
	});
		
};
function addrest(id)
{
	layer.open({
	  type: 1,
	  title:'价格',
	  skin: 'layui-layer-rim', //样式类名
	  area: ['200px', '170px'], //宽高
	  closeBtn: 0, //不显示关闭按钮
	  anim: 2,
	  shadeClose: true, //开启遮罩关闭
	  content:"<textarea id='money'></textarea>",
	  btn: ['确定','取消'],
	  yes:function(index,layero){
			$.ajax({
				"type":"post",
		        "url":"/index/Destine/addrest",
		        "dataType":"json",
		        "data":{"yid":id,"money":layero.find('#money').val()},
		        "success":function(data){
	        		if(data == 1){
	        			layer.msg('支付成功！',{icon:1,time:1000},function () {
						    window.location.reload();
						});
	        		}else if(data == 2){
	        			layer.msg('价格与实际价格不符！',{icon:3,time:1000},function () { 	
						});
	        		}else if(data == 4){
	        			layer.msg('您的余额不足！',{icon:3,time:1000},function () { 	
						});
	        		}
	        	}
			});
	  }
	});
		
};

function zong()
{
	layer.open({
	  type: 1,
	  title:'价格',
	  skin: 'layui-layer-rim', //样式类名
	  area: ['200px', '170px'], //宽高
	  closeBtn: 0, //不显示关闭按钮
	  anim: 2,
	  shadeClose: true, //开启遮罩关闭
	  content:"<textarea id='money'></textarea>",
	  btn: ['确定','取消'],
	  yes:function(index,layero){
			$.ajax({
				"type":"post",
		        "url":"/index/Destine/zong",
		        "dataType":"json",
		        "data":{"money":layero.find('#money').val()},
		        "success":function(data){
	        		if(data == 1){
	        			layer.msg('支付成功！',{icon:1,time:1000},function () {
						    window.location.reload();
						});
	        		}else if(data == 2){
	        			layer.msg('价格与实际价格不符！',{icon:3,time:1000},function () { 	
						});	
	        		}else if(data == 4){
	        			layer.msg('您的余额不足！',{icon:3,time:1000},function () { 	
						});
	        		}
	        	}
			});
	  }

	});
		
};

function refund(id)
{
	$.ajax({
		"type":"post",
        "url":"/index/Destine/refund",
        "dataType":"json",
        "data":{"yid":id,'oid':id,"mcid":id},
        "success":function(data){
    		if(data == 1){
    			layer.msg('申请成功！',{icon:1,time:1000},function () {
				    window.location.reload();
				});
    		}
    	}
	});
}
</script>
</html>

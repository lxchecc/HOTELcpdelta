<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\wamp\www\tp\hotel\public/../application/index\view\user\luckydraw.html";i:1519781710;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery带中奖名单大转盘抽奖代码</title>

<link rel="stylesheet" href="/index/css/demo.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/index/css/style3.css">

<script type="text/javascript" src="/index/js/jquery.min.js"></script>
<script type="text/javascript" src="/index/js/awardRotate.js"></script>
<script type="text/javascript" src="/index/js/scroll.js"></script>
<script type="text/javascript">
$(function (){
		 
	var rotateTimeOut = function (){
		$('#rotate').rotate({
			angle:0,
			animateTo:2160,
			duration:8000,
			callback:function (){
				alert('网络超时，请检查您的网络设置！');
			}
		});
	};
	var bRotate = false;

	var rotateFn = function (awards, angles, txt){
		bRotate = !bRotate;
		$('#rotate').stopRotate();
		$('#rotate').rotate({
			angle:0,
			animateTo:angles+1800,
			duration:8000,
			callback:function (){
				alert("￥"+txt);
				bRotate = !bRotate;
			}
		})
	};
	
	$('.pointer').click(function (){
		var a=[1,18,16,12,2,8,6];
		if(bRotate)return;
		 
		var item = rnd(0,7);
	//var item =6;
		switch (item) {

			case 0:          
				//var angle = [26, 88, 137, 185, 235, 287, 337];
				rotateFn(0, 337, a[0]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[0];
				$("#xianjin").val(cc);
				setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);
				$(".qian2").html(cc);
				
				break;
			case 1:
				//var angle = [88, 137, 185, 235, 287];
				
				rotateFn(1, 26, a[1]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[1];
				$("#xianjin").val(cc);
				setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);
				$(".qian2").html(cc);
				break;
			case 2:
				//var angle = [137, 185, 235, 287];
				rotateFn(2, 88, a[2]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[2];
				$("#xianjin").val(cc);
				setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);

				$(".qian2").html(cc);
				break;
			case 3:
				//var angle = [137, 185, 235, 287];
				rotateFn(3, 137, a[3]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[3];
				$("#xianjin").val(cc);
				setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);
				$(".qian2").html(cc);
				break;
			case 4:
				//var angle = [185, 235, 287];
				rotateFn(4, 287, a[4]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[4];
				$("#xianjin").val(cc);
				setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);
				$(".qian2").html(cc);
				break;
			case 5:
			
				//var angle = [185, 235, 287];
				rotateFn(5, 185, a[5]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[5];
				$("#xianjin").val(cc);
				setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);
				$(".qian2").html(cc);
				break;
			case 6:
				//var angle = [235, 287];
				rotateFn(6, 235, a[6]);
				var ss=Number($("#xianjin").val());
				var cc=ss+a[6];
				$("#xianjin").val(cc);
					setTimeout(function(){
				$(".xianjin").html(cc);
				},8000);
				$(".qian2").html(cc);
				break;
		}

		//console.log(item);
	});

});
function rnd(n, m){
	return Math.floor(Math.random()*(m-n+1)+n)
}
</script>

<style type="text/css">
.quan{width:100%;height:100%;background:rgba(0,0,0,0.5);position:absolute;top:0px;z-index:99;display:none;}
.quan1{width:300px;height:200px;background:#fff;margin:0 auto;margin-top:300px; border-radius:10px;border:4px solid #666;}
.qian2{float:left;height:50px;width:196px;line-height:50px;text-align:center;font-size:18px;margin-top:50px; background:#fff;border:2px solid #fff100;margin-left:50px; }
.queding{float:left;width:70px;height:24px;background:#fff;border:2px solid #ccc;border-radius:5px;margin-top:50px;margin-left:115px;text-align:center;line-height:24px; cursor:pointer;}
.dis{color:#000;font-size:100px;font-weight:bold;position:absolute;left:50%;margin-left:-90px;top:100px;line-height:30px;}
.xianjin{width:280px;height:50px;background:#fff;position:absolute;border-radius:10px;top:248px;left:200px;line-height:50px;text-align:center;}
.jjc{width:500px;height:500px;background:url(/index/images/paoma1.gif);background-size:100%100%;position:absolute;top:-250px;left:500%;font-size:35px;line-height:700px;text-align:center;color:#fff;}
</style>

</head>
<body>

<div style="text-align:center;margin:10px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p style="font-size: 40px; font-weight: bold; color: green;"><a href="/index/User/userinfo">返回用户页面</a></p>
<p></p>
</div>

<div class="turntable-bg"> 
  <div class="pointer"><img src="/index/images/pointer.png" alt="pointer" style="width:100%;height:100%;"></div>
  <div class="rotate" ><img id="rotate" src="/index/images/turntable.png" alt="turntable" style="width:100%;height:100%;"></div>
</div>

<!--<input type="text" value="0" id="xianjin" style="display:none;" />
<div class="xianjin">0</div>
<div class="quan">
	<div class="quan1">
		<p class="qian2">0</p>
		<p class="queding">确定领奖</p>
	</div>
</div>-->

<script type="text/javascript">
	$(document).ready(function(){
	$('.list_lh li:even').addClass('lieven');
});
$(function(){
	$("div.list_lh").myScroll({
		speed:40, //数值越大，速度越慢
		rowHeight:68 //li的高度
	});
});
</script>


<div class="bcon">
	<h1><b>中奖者名单</b></h1>
	<!-- 代码开始 -->
	<div class="list_lh">
		<ul>
			<li>
				<p>152*****120 抽中1000元</p>
				
			</li>
			<li>
				<p>152*****121 抽中1000元</p>
			</li>
			<li>
				<p>152*****122 抽中1000元</p>
			</li>
			<li>
				<p>152*****123 抽中1000元</p>
			</li>
			<li>
				<p>152*****124 抽中1000元</p>
			</li>
			<li>
				<p>152*****120 抽中1000元</p>
			</li>
			<li>
				<p>152*****120 抽中1000元</p>
			</li>
			<li>
				<p>152*****120 抽中1000元</p>
			</li>
			<li>
				<p>152*****320 抽中1000元</p>
			</li>
			<li>
				<p>152*****320 抽中1000元</p>
			</li>
			<li>
				<p>152*****320 抽中1000元</p>
			</li>
			<li>
				<p>152*****320 抽中1000元</p>
			</li>
		</ul>
	</div>
	<div class="jjc"></div>
</div>

</body>
</html>

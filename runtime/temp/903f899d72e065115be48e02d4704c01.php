<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"C:\wamp\www\tp\hotel\public/../application/admin\view\spin\categorymanage.html";i:1519653726;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/admin/css/style.css"/>       
	<link href="/admin/assets/css/codemirror.css" rel="stylesheet">
	<link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
	<link rel="stylesheet" href="/admin/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
	<link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		  <![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		  <![endif]-->
		  <script src="/admin/assets/js/jquery.min.js"></script>
		  <!-- <![endif]-->
		<!--[if IE]>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
       <![endif]-->
       <!--[if !IE]> -->
       <script type="text/javascript">
       	window.jQuery || document.write("<script src='/admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
       </script>
       <!-- <![endif]-->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script src="/admin/assets/js/ace-elements.min.js"></script>
<script src="/admin/assets/js/ace.min.js"></script>
<script src="/admin/assets/js/bootstrap.min.js"></script>
<script src="/admin/assets/js/typeahead-bs2.min.js"></script>
<script type="text/javascript" src="/admin/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script> 
<script src="/admin/js/lrtk.js" type="text/javascript" ></script>
<title>分类管理</title>
<style type="text/css">
		ul{display: none;}
		h2{margin: 0px;font-size: 20px;text-align:center;color:#3cc;font-weight:bold;background: #3232CD ;}
		li{list-style: none;text-align: center;color: #00FF7F ;background: #5959AB ;}
		.show{display: block;}
	</style>
</head>
<body>
	<div class=" clearfix">
		<div id="category">
			<div id="scrollsidebar" class="left_Treeview">
				<div class="show_btn" id="rightArrow"><span></span></div>
				<div class="widget-box side_content" >
					<div class="side_title"><a title="隐藏" class="close_btn"><span></span></a></div>
					<div class="side_list">
						<div class="widget-header header-color-green2">
							<h4 class="lighter smaller">产品类型列表</h4>
						</div>
						<div class="widget-body">
							<div class="widget-main padding-8">
								<div  id="treeDemo" class="ztree"></div>
							</div>
							<div>
								<div class='content'>
									<h2>客房</h2>
									<ul id="first">
										<li>普通客房</li>
										<li>标准客房</li>
										<li>高级客房</li>
										<li>豪华包房</li>
										<li>总统套房</li>
									</ul>
								</div>
								<div class='content'>
									<h2>餐厅</h2>
									<ul id="second">
										<li>菜谱</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!---->
			<div id="moban">
				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/productCategoryAdd" class="page_right_style"></iframe>

				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/menu?rid=1" class="page_right_style" style="display:none"></iframe>
				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/menu?rid=2" class="page_right_style" style="display:none"></iframe>
				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/menu?rid=3" class="page_right_style" style="display:none"></iframe>
				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/menu?rid=4" class="page_right_style" style="display:none"></iframe>
				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/menu?rid=5" class="page_right_style" style="display:none"></iframe>
				<iframe ID="testIframe" Name="testIframe" FRAMEBORDER=0 SCROLLING=AUTO  SRC="/admin/Spin/menu?mid=1" class="page_right_style" style="display:none"></iframe>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript"> 
	$(function() { 
		$("#category").fix({
			float : 'left',
		skin : 'green',	
		durationTime :false
	});
	});
</script>
<script type="text/javascript">
//初始化宽度、高度  
$(".widget-box").height($(window).height()); 
$(".page_right_style").width($(window).width()-220);
  //当文档窗口发生改变时 触发  
  $(window).resize(function(){
  	$(".widget-box").height($(window).height());
  	$(".page_right_style").width($(window).width()-220);
  })
  /**************/
  $(function(){
			$(".content").on('click',function(){
				$(this).find("ul").slideDown(400).end().siblings().find('ul').slideUp(400);
			});
			$("#first").children("li").eq(0).on('click',function(){
				$(".page_right_style").css("display","none");
				$("#moban").children().eq('1').show();
			});	
			$("#first").children("li").eq(1).on('click',function(){
				$(".page_right_style").css("display","none");
				$("#moban").children().eq('2').show();
			});	
			$("#first").children("li").eq(2).on('click',function(){
				$(".page_right_style").css("display","none");
				$("#moban").children().eq('3').show();
			});	
			$("#first").children("li").eq(3).on('click',function(){
				$(".page_right_style").css("display","none");
				$("#moban").children().eq('4').show();
			});	
			$("#first").children("li").eq(4).on('click',function(){
				$(".page_right_style").css("display","none");
				$("#moban").children().eq('5').show();
			});	
			$("#second").children("li").eq(0).on('click',function(){
				$(".page_right_style").css("display","none");
				$("#moban").children().eq('6').show();
			});		
		});
</script>

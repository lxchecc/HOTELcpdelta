<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\wamp64\www\git\hotel\public/../application/admin\view\index\home.html";i:1519695671;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/style.css"/>
  <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
  <link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />
  <link href="/admin/assets/css/codemirror.css" rel="stylesheet">
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
      <![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->
      <script src="/admin/assets/js/ace-extra.min.js"></script>
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    <!--[if !IE]> -->
    <script src="admin/assets/js/jquery.min.js"></script>        
    <!-- <![endif]-->
    <script src="/admin/assets/dist/echarts.js"></script>
    <script src="/admin/assets/js/bootstrap.min.js"></script>            
    <title></title>
  </head>		
  <body>
    <div class="page-content clearfix">
     <div class="alert alert-block alert-success">
      <button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
      <b style="color:red">!</b><i class="icon-ok green"></i>您已进入<strong class="red">后台管理系统</strong>,登陆时间为<?php echo $time; ?>，登陆IP:<?php echo $ip; ?>.	<b style="background:red;color:#ccc;">请慎重操作</b>
    </div>
    <div class="state-overview clearfix">
      <div class="col-lg-3 col-sm-6">
        <section class="panel">
          <a href="#" title="商城会员">
            <div class="symbol terques">
             <i class="icon-user"></i>
           </div>
           <div class="value">
            <h1><?php echo $user; ?></h1>
            <p>消费用户</p>
          </div>
        </a>
      </section>
    </div>
    <div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol red">
          <i class="icon-tags"></i>
        </div>
        <div class="value">
          <h1><?php echo $dingdan; ?></h1>
          <p>订单记录</p>
        </div>
      </section>
    </div>
    <div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol yellow">
          <i class="icon-shopping-cart"></i>
        </div>
        <div class="value">
          <h1><?php echo $cjdingdan; ?></h1>
          <p>成交订单</p>
        </div>
      </section>
    </div>
    <div class="col-lg-3 col-sm-6">
      <section class="panel">
        <div class="symbol blue">
          <i class="icon-bar-chart"></i>
        </div>
        <div class="value">
          <h1>￥<?php echo $money; ?></h1>
          <p>成交金额</p>
        </div>
      </section>
    </div>
  </div>
  <!--实时交易记录-->
  <div class="clearfix">
    <div class="Order_Statistics ">
      <div class="title_name">房间订单统计信息</div>
      <table class="table table-bordered">
       <tbody>
         <tr><td class="name">未支付订单数：</td><td class="munber"><a href="#"><?php echo $wzf; ?></a>&nbsp;个</td></tr>
         <tr><td class="name">已支付订单数：</td><td class="munber"><a href="#"><?php echo $addd; ?></a>&nbsp;个</td></tr>
         <tr><td class="name">未入住订单数：</td><td class="munber"><a href="#"><?php echo $wrz; ?></a>&nbsp;个</td></tr>
         <tr><td class="name">已入住订单数：</td><td class="munber"><a href="#"><?php echo $yrz; ?></a>&nbsp;个</td></tr>
       </tbody>
     </table>
   </div> 
   <div class="Order_Statistics">
    <div class="title_name">餐厅订单统计信息</div>
    <table class="table table-bordered">
     <tbody>
       <tr><td class="name">未支付订单总数：</td><td class="munber"><a href="#"><?php echo $restwzf; ?></a>&nbsp;个</td></tr>
       <tr><td class="name">已支付订单数：</td><td class="munber"><a href="#"><?php echo $restyzf; ?></a>&nbsp;个</td></tr>
       <tr><td class="name">新上架统计：</td><td class="munber"><a href="#"><?php echo $new; ?></a>&nbsp;个</td></tr>
     </tbody>
   </table>
 </div> 
 <div class="news_style">
  <div class="title_name">最新消息</div>
  <ul class="list">
   <li><i class="icon-bell red"></i><a href="#">后台系统找那个是开通了。</a></li>
   <li><i class="icon-bell red"></i><a href="#">6月共处理订单3451比，作废为...</a></li>
   <li><i class="icon-bell red"></i><a href="#">后台系统找那个是开通了。</a></li>
   <li><i class="icon-bell red"></i><a href="#">后台系统找那个是开通了。</a></li>
   <li><i class="icon-bell red"></i><a href="#">后台系统找那个是开通了。</a></li>
 </ul>
</div> 
</div>
<!--记录-->
<div class="clearfix">
  <div class="home_btn">
   <div>
     <a href="/admin/Spin/categoryManage"  title="产品分类" class="btn  btn-primary btn-sm no-radius">
       <i class="bigger-200"><img src="/admin/images/icon-cpgl.png" /></i>
       <h5 class="margin-top">产品分类</h5>
     </a>
     <a href="/admin/Member/adminInfo?aid=<?php echo $aid; ?>"  title="个人信息" class="btn  btn-success btn-sm no-radius">
       <i class="bigger-200"><img src="/admin/images/icon-grxx.png" /></i>
       <h5 class="margin-top">个人信息</h5>
     </a>
     <a href="/admin/System/systems"  title="系统设置" class="btn  btn-info btn-sm no-radius">
       <i class="bigger-200"><img src="/admin/images/xtsz.png" /></i>
       <h5 class="margin-top">系统设置</h5>
     </a>
     <a href="/admin/Transaction/menu"  title="商品订单" class="btn  btn-purple btn-sm no-radius">
       <i class="bigger-200"><img src="/admin/images/icon-gwcc.png" /></i>
       <h5 class="margin-top">商品订单</h5>
     </a>
     <!-- <a href="/admin/Picture/pictureAdd"  title="添加广告" class="btn  btn-pink btn-sm no-radius">
       <i class="bigger-200"><img src="/admin/images/icon-ad.png" /></i>
       <h5 class="margin-top">添加广告</h5>
     </a> -->
     <a href="/admin/Acticle/acticleAdd"  title="添加文章" class="btn  btn-info btn-sm no-radius">
       <i class="bigger-200"><img src="/admin/images/icon-addwz.png" /></i>
       <h5 class="margin-top">添加文章</h5>
     </a>
   </div>
 </div>
 
</div>

</div>
</body>
</html>
<script type="text/javascript">
//面包屑返回值
var index = parent.layer.getFrameIndex(window.name);
parent.layer.iframeAuto(index);
$('.no-radius').on('click', function(){
	var cname = $(this).attr("title");
	var chref = $(this).attr("href");
	var cnames = parent.$('.Current_page').html();
	var herf = parent.$("#iframe").attr("src");
  parent.$('#parentIframe').html(cname);
  parent.$('#iframe').attr("src",chref).ready();;
  parent.$('#parentIframe').css("display","inline-block");
  parent.$('.Current_page').attr({"name":herf,"href":"javascript:void(0)"}).css({"color":"#4c8fbd","cursor":"pointer"});
	//parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+" class='iframeurl'>" + cnames + "</a>");
  parent.layer.close(index);

});
$(document).ready(function(){

  $(".t_Record").width($(window).width()-640);
		  //当文档窗口发生改变时 触发  
      $(window).resize(function(){
       $(".t_Record").width($(window).width()-640);
     });
    });


  </script>
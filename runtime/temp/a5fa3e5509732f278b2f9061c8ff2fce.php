<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\git\hotel\public/../application/admin\view\transaction\menu.html";i:1519695671;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/style.css"/>       
  <link href="/admin/assets/css/codemirror.css" rel="stylesheet">
  <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
  <link rel="stylesheet" href="/admin/font/css/font-awesome.min.css" />
        <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->
      <script src="/admin/js/jquery-1.9.1.min.js"></script>
      <script src="/admin/js/H-ui.js" type="text/javascript"></script>  
      <script src="/admin/assets/js/bootstrap.min.js"></script>
      <script src="/admin/assets/js/typeahead-bs2.min.js"></script>             
      <script src="/admin/assets/js/jquery.dataTables.min.js"></script>
      <script src="/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
      <script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>          
      <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>

      <script src="/admin/js/lrtk.js" type="text/javascript" ></script>
      <title>订单管理</title>
    </head>

    <body>
      <div class="margin clearfix">
       <div id="refund_style">
         <div class="search_style">

          <ul class="search_content clearfix">
           <li><label class="l_f">产品名称</label><input name="" type="text" class="text_add" placeholder="输入产品名称" style=" width:250px"></li>
           <li><label class="l_f">支付时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li>
           <li style="width:90px;"><button type="button" class="btn_search"><i class="fa fa-search"></i>查询</button></li>
         </ul>
       </div>
       <div class="border clearfix">
         <span class="l_f">
          <a href="javascript:ovid()" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;批量删除</a>
        </span>
        <span class="r_f">共：<b><?php echo $count; ?></b>笔</span>
      </div>
      <!--退款列表-->
      <div class="refund_list">
        <table class="table table-striped table-bordered table-hover" id="sample-table">
          <thead>
           <tr>
            <th width="25px"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
            <th width="120px">订单编号</th>
            <th width="250px">房间编号</th>
            <th width="100px">房间类型</th>       
            <th width="100px">订单时间</th>       
            <th width="100px">价格</th>
            <th width="80px">入住时间</th>
            <th width="70px">状态</th>
            <th width="200px">退房时间</th>                
            <th width="200px">操作</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($res as $value): ?>
         <tr>
           <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
           <td><?php echo $value['oid']; ?></td>
           <td class="order_product_name">
            <a href="#"><?php echo $value['roomid']; ?></a>
          </td>
          <?php if($value['roomtype'] == 1): ?>
          <td>普通房间</td>
          <?php elseif($value['roomtype'] == 2): ?>    
          <td>标准房间</td>
          <?php elseif($value['roomtype'] == 3): ?>    
          <td>高级房间</td>
          <?php elseif($value['roomtype'] == 4): ?>    
          <td>豪华包房</td>
          <?php elseif($value['roomtype'] == 5): ?>  
          <td>总统套房</td>
          <?php endif; ?>  
          <td><?php echo $value['create_time']; ?></td>
          <td><?php echo $value['roomprice']; ?></td>
          <td><?php echo $value['create_time']; ?></td>
          <?php if($value['o_state'] == 1): ?>
          <td class="td-status"><span class="label label-success radius">已支付</span></td>
          <?php else: ?>
          <td class="td-status"> <span class="label label-defaunt  radius">未支付</span></td>
          <?php endif; ?>
          <td><?php echo $value['update_time']; ?></td>
          <td>
           <a title="退款订单详细"  href="/admin/Transaction/refundDetailed?oid=<?php echo $value['oid']; ?>"  class="btn btn-xs btn-info Refund_detailed" >详细</a> 
        <!--    <a title="删除" href="javascript:;"  onclick="Order_form_del(this,<?php echo $value['oid']; ?>)" class="btn btn-xs btn-warning" >删除</a>    --> 
         </td>
       </tr>
       <?php endforeach; ?>
   </tbody>
 </table> 

</div>
</div>
</div>
</body>
</html>
<script>
 //订单列表
 jQuery(function($) {
  var oTable1 = $('#sample-table').dataTable( {
    "aaSorting": [[ 1, "desc" ]],//默认第几个排序
    "bStateSave": true,//状态保存
    "aoColumnDefs": [
      //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
      {"orderable":false,"aTargets":[0,2,3,4,5,6,8,9]}// 制定列不参与排序
      ] } );
                 //全选操作
                 $('table th input:checkbox').on('click' , function(){
                   var that = this;
                   $(this).closest('table').find('tr > td:first-child input:checkbox')
                   .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                  });

                 });
               });
 function Delivery_Refund(obj,id){

  layer.confirm('是否退款当前商品价格！',function(index){
    $(obj).parents("tr").find(".td-manage").prepend('<a style=" display:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="已退款">退款</a>');
    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt  radius">已退款</span>');
    $(obj).remove();
    layer.msg('已退款!',{icon: 6,time:1000});
  });  


};
// function Order_form_del(obj.id){
//   $.ajax({

//   });
// }
//面包屑返回值
var index = parent.layer.getFrameIndex(window.name);
parent.layer.iframeAuto(index);
$('.Refund_detailed').on('click', function(){
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
</script>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"E:\wamp64\www\git\hotel\public/../application/admin\view\transaction\ctamounts.html";i:1519695671;}*/ ?>
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
      <script src="/admin/assets/js/bootstrap.min.js"></script>

      <script src="/admin/assets/js/typeahead-bs2.min.js"></script>           	
      <script src="/admin/assets/js/jquery.dataTables.min.js"></script>
      <script src="/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
      <script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>          
      <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
      <script src="/admin/assets/dist/echarts.js"></script>
      <title>交易金额</title>
    </head>
    <body>
      <div class="margin clearfix">
       <div class="amounts_style">
         <div class="transaction_Money clearfix">
          <div class="Money"><span >成交总额：<?php echo $ctze; ?>元</span><p>最新统计时间:<?php echo $time; ?></p></div>
          <div class="Money"><span ><em>￥</em><?php echo $todayxf; ?></span><p>当天成交额</p></div>
          <div class="l_f Statistics_btn"> 
          <a href="javascript:ovid()" title="当日统计" onclick="Statistics_btn()" class="btn  btn-info btn-sm no-radius"><i class="bigger fa fa-bar-chart "></i><h5 class="margin-top">当日统计</h5></a>
         </div>
       </div>
       <div class="border clearfix">
        <span class="l_f">
          <a href="javascript:ovid()" class="btn btn-danger">当天订单</a> 
        </span>
        <span class="r_f">共：<b><?php echo $todaycount; ?></b>笔</span>
      </div>
      <div class="Record_list">
        <table class="table table-striped table-bordered table-hover" id="sample-table">
         <thead>
           <tr>
            <th width="100px">序号</th> 
            <th width="200px">餐厅编号</th>
            <th width="180px">成交时间</th>
            <th width="120px">成交金额(元)</th>
            <th width="180px">状态</th>
          </tr>
        </thead>
        <tbody> 
        <?php foreach($res as $value): ?>
          <tr>
           <td style="color:red;">CTDD-<?php echo $value['yid']; ?></td>
           <?php if($value['restid'] == 1): ?>
           <td>家庭套餐</td>
           <?php elseif($value['restid'] == 2): ?>
           <td>休闲套餐</td>
           <?php elseif($value['restid'] == 3): ?>
           <td>自助餐</td>
           <?php elseif($value['restid'] == 4): ?>
           <td>酒吧和休息室</td>
           <?php elseif($value['restid'] == 5): ?>
           <td>户外套餐</td>
           <?php elseif($value['restid'] == 6): ?>
           <td>婚庆套餐</td>
           <?php endif; ?>
           <td><?php echo $value['ru_time']; ?></td>
           <td><?php echo $value['y_money']; ?></td>
           <?php if($value['y_status'] == 1): ?>
           <td>成功</td>         
           <?php else: ?>
           <td>未支付</td>
           <?php endif; ?>
         </tr>
         <?php endforeach; ?>
       </tbody>
     </table> 
   </div>
 </div>
</div>
<div id="Statistics" style="display:none">
 <div id="main" style="height:400px; overflow:hidden; width:1000px; overflow:auto" ></div>
</div>
</body>
</html>
<script>
  $(function() {
    var oTable1 = $('#sample-table').dataTable( {
		"aaSorting": [],//默认第几个排序
		"bStateSave": false,//状态保存
		//"dom": 't',
		"bFilter":false,
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,1,2,3,4]}// 制定列不参与排序
      ] } );
    $('table th input:checkbox').on('click' , function(){
     var that = this;
     $(this).closest('table').find('tr > td:first-child input:checkbox')
     .each(function(){
      this.checked = that.checked;
      $(this).closest('tr').toggleClass('selected');
    });

   });
  })
</script>

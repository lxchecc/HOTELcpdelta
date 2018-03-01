<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\git\hotel\public/../application/admin\view\user\integration.html";i:1519695671;}*/ ?>
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
        <title>积分管理</title>
    </head>

    <body>
        <div class="margin clearfix">
           <div class="" id="Other_Management">
               <div class="search_style">

                  <ul class="search_content clearfix">
                     <li><label class="l_f">会员名称</label><input name="" type="text" class="text_add" placeholder="输入会员名称、电话、邮箱" style=" width:400px"></li>
                     <li style="width:90px;"><button type="button" class="btn_search"><i class="fa fa-search"></i>查询</button></li>
                 </ul>
             </div>
            <!--  <div class="border clearfix">
                 <span class="l_f">
                    <a href="javascript:ovid()" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;批量删除</a>
                </span>
                <span class="r_f">共：<b>2345</b>条</span>
            </div> -->
            <div class="list_style">
               <table class="table table-striped table-bordered table-hover" id="sample-table">
                   <thead>
                     <tr>
                        <th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                        <th width="80">用户ID</th>
                        <th width="100">用户名</th>
                        <th width="80">消费金额</th>
                        <th width="120">注册时间</th>   
                        <th width="120">购物(比)</th>              
                        <th width="250">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($res as $value): ?>
                  <tr>
                    <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
                    <td><?php echo $value['id']; ?></td>
                    <td><?php echo $value['username']; ?></td>
                    <td><a href="javascript:ovid()" onclick="integration_history('23')"><?php echo $value['u_money']; ?></a></td>
                    <td><?php echo $value['create_time']; ?></td>
                    <td><a href="javascript:ovid()" onclick="Order_history('33')">5</a></td>
                    <td> <a title="删除" href="javascript:;"  onclick="member_del(this,'1',<?php echo $value['id']; ?>)" class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>     
    </div>

</div>
</div>

<!--购物记录-->
<div id="Order_history" style="display:none; padding:10px;">

    <table class="table table-striped table-bordered table-hover" id="Order_history_list" width="100%">
       <thead>
         <tr>
            <th width="80">用户</th>
            <th width="100">订单号</th>
            <th width="80">数量</th>
            <th width="120">交易状态</th>   
            <th width="120">交易时间</th>              
        </tr>
    </thead>
    <tr>
        <td>花海天天</td>
        <td><a href="#">hd2335464544534534</a></td>
        <td>3</td>
        <td>交易失败</td>
        <td>2016-7-12 12:23:34</td>
    </tr>
</tbody>    
</table>     
</div>
</body>
</html>
<script>
    jQuery(function($) {
        var oTable1 = $('#sample-table').dataTable( {
				"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,2,3,6]}// 制定列不参与排序
        ] } );


        $('table th input:checkbox').on('click' , function(){
           var that = this;
           $(this).closest('table').find('tr > td:first-child input:checkbox')
           .each(function(){
              this.checked = that.checked;
              $(this).closest('tr').toggleClass('selected');
          });

       });
    });



    /*用户-删除*/
    function member_del(obj,id,uid){
       layer.confirm('确认要删除吗？',function(index){
         $.ajax({
            "type":"post",
            "url":"/admin/User/integration",
            "data":{
                "uid":uid
            },
            success:del
        });
        function del(data){
             $(obj).parents("tr").remove();
             layer.msg('已删除!',{icon:1,time:1000});
        } 
      });
   }
//浏览记录

function Browse_history(id){
	layer.open({
        type: 1,
        title:'浏览记录',
        area: ['800px','400px'],
        shadeClose: true,
        content: $('#Browse_history'),
    })	
    $('#Browse_history_list').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
    "bStateSave": true,//状态保存
    "aoColumnDefs": [{
     "bSortable": false, 
     "orderable":false, 
     "aTargets": [0,1]
 }]
});	
}


//购物记录
function Order_history(id){
	layer.open({
        type: 1,
        title:'购物记录',
        area: ['800px','400px'],
        shadeClose: true,
        content: $('#Order_history'),
    });	
  $('#Order_history_list').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
    "bStateSave": true,//状态保存
    "aoColumnDefs": [{
     "bSortable": false, 
     "orderable":false, 
     "aTargets": [0,1]
 }]
});		
}


</script>

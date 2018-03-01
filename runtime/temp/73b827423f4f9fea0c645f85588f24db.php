<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\wamp64\www\git\hotel\public/../application/admin\view\user\userlist.html";i:1519695671;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/style.css"/>       
  <link href="/admin/assets/css/codemirror.css" rel="stylesheet">
  <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
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

<script type="text/javascript">
 if("ontouchend" in document) document.write("<script src='/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/admin/assets/js/bootstrap.min.js"></script>
<script src="/admin/assets/js/typeahead-bs2.min.js"></script>
<!-- page specific plugin scripts -->
<script src="/admin/assets/js/jquery.dataTables.min.js"></script>
<script src="/admin/assets/js/jquery.dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/admin/js/H-ui.admin.js"></script> 
<script src="/admin/assets/layer/layer.js" type="text/javascript" ></script>
<script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
<title>用户列表</title>
</head>

<body>
  <div class="page-content clearfix">
    <div id="Member_Ratings">
      <div class="d_Confirm_Order_style">
        <div class="search_style">

          <ul class="search_content clearfix">
           <li><label class="l_f">会员名称</label><input name="" type="text"  class="text_add" placeholder="输入会员名称、电话、邮箱"  style=" width:400px"/></li>
           <li><label class="l_f">添加时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li>
           <li style="width:90px;"><button type="button" class="btn_search"><i class="icon-search"></i>查询</button></li>
         </ul>
       </div>
       <!---->
       <div class="border clearfix">
         <span class="l_f">
          <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a>
        </span>
        <span class="r_f">共：<b><?php echo $count; ?></b>条</span>
      </div>
      <!---->
      <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
        <thead>
         <tr>
          <th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
          <th width="80">ID</th>
          <th width="100">用户名</th>
          <!-- <th width="80">性别</th> -->
          <th width="120">手机</th>
          <th width="150">邮箱</th>
          <th width="">地址</th>
          <th width="180">加入时间</th>
          <th width="100">等级</th>
          <th width="70">状态</th>                
          <th width="250">操作</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($res as $key=>$value): ?>
        <tr>
          <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
          <td><?php echo $value['id']; ?></td>
          <td><?php echo $value['username']; ?></td>
          <!-- <td></td> -->
          <td><?php echo $value['tel']; ?></td>
          <td><?php echo $value['email']; ?></td>
          <td class="text-l"><?php echo $value['address']; ?></td>
          <td><?php echo $value['hy_time']; ?></td>
          <td><?php if($value['hy_type']==3): ?>金牌会员<?php elseif($value['hy_type']==2): ?>银牌会员<?php elseif($value['hy_type']==1): ?>铜牌会员<?php endif; ?></td>
          <?php if($value['hy_zt']==1): ?>
          <td class="td-status"><span class="label label-success radius">已启用</span></td>
          <?php else: ?>
          <td class="td-status"><span class="label label-defaunt radius">已停用</span></td>
          <?php endif; ?>
          <td class="td-manage">
            <?php if($value['hy_zt']==1): ?>
            <a onClick="member_stop(this,<?php echo $value['hid']; ?>)"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
            <?php else: ?>
            <a onClick="member_start(this,<?php echo $value['hid']; ?>)"  href="javascript:;" title="停用"  class="btn btn-xs "><i class="icon-ok bigger-120"></i></a> 
            <?php endif; ?>
            <a title="删除" href="javascript:;"  onclick="member_del(this,<?php echo $value['hid']; ?>)" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
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
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
      ] } );


    $('table th input:checkbox').on('click' , function(){
     var that = this;
     $(this).closest('table').find('tr > td:first-child input:checkbox')
     .each(function(){
      this.checked = that.checked;
      $(this).closest('tr').toggleClass('selected');
    });

   });


    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
    function tooltip_placement(context, source) {
     var $source = $(source);
     var $parent = $source.closest('table')
     var off1 = $parent.offset();
     var w1 = $parent.width();

     var off2 = $source.offset();
     var w2 = $source.width();

     if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
     return 'left';
   }
 })
  /*用户-查看*/
  function member_show(title,url,id,w,h){
   layer_show(title,url+'#?='+id,w,h);
 }
 /*用户-停用*/
 function member_stop(obj,id){
   layer.confirm('确认要停用吗？',function(index){
     $.ajax({
      "type":"post",
      "url":"/admin/User/userList",
      "data":{
        'id':id,
        'hy_zt':0
      },
      success:del
    });
     function del(data)
     {
      if (data ==1){
          layer.alert('修改成功！',{
             title: '提示框',        
             icon:1,    
           });
       window.setTimeout("window.location='/admin/User/userList'",1000);
      }
    }
  });
 }

 /*用户-启用*/
 function member_start(obj,id){
   layer.confirm('确认要启用吗？',function(index){
     $.ajax({
      "type":"post",
      "url":"/admin/User/userList",
      "data":{
        'id':id,
        'hy_zt':1
      },
      success:up
    });
     function up(data)
     {
      if (data ==1){
          layer.alert('修改成功！',{
             title: '提示框',        
             icon:1,    
           });
       window.setTimeout("window.location='/admin/User/userList'",1000);
      }
    }
  });
 }
 /*用户-删除*/
 function member_del(obj,id){
   layer.confirm('确认要删除吗？',function(index){
     $.ajax({
      "type":"post",
      "url":"/admin/User/del",
      "data":{
        'id':id,
        'hy_zt':3
      },
      success:shanchu
    });
     function shanchu(data)
     {
      if (data == 2){
        layer.msg('删除失败!',{icon:1,time:1000});
      }else {
        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
      }
    }
    
  });
 }
 laydate({
  elem: '#start',
  event: 'focus' 
});

</script> 
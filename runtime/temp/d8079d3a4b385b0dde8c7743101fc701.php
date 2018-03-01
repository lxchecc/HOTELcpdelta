<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\wamp64\www\git\hotel\public/../application/admin\view\spin\menu.html";i:1519695671;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/admin/css/style.css"/>       
  <link href="/admin/assets/css/codemirror.css" rel="stylesheet">
  <link rel="stylesheet" href="/admin/assets/css/ace.min.css" />
  <link rel="stylesheet" href="/admin/assets/css/font-awesome.min.css" />
  <script src="/admin/assets/js/jquery.min.js"></script>
  <script type="text/javascript">
   window.jQuery || document.write("<script src='/admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
 </script>
 <script type="text/javascript">
   if("ontouchend" in document) document.write("<script src='/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
 </script>
 <script src="/admin/assets/js/bootstrap.min.js"></script>
 <script src="/admin/assets/js/typeahead-bs2.min.js"></script>
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
        <div class="table_menu_list">
         <table class="table table-striped table-bordered table-hover" id="sample-table">
          <thead>
           <tr>
            <th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
            <th width="80">ID</th>
            <th width="100">名字</th>
            <th width="30">样式</th>
            <th width="120">价格</th>
            <th width="150">介绍</th>
            <th width="180">加入时间</th>    
            <th>类型</th>         
            <th width="250">操作</th>
          </tr>
        </thead>
        <tbody>
          <?php if(isset($mid)): foreach($res as $key=>$value): ?>
          <tr>
            <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
            <td width="80" height="40"><?php echo $value['mid']; ?></td>
            <td width="100" height="40"><?php echo $value['m_name']; ?></td>
            <td width="40" height="40"><img style="height: 40px;" src="<?php echo $value['m_picture']; ?>"></td>
            <td width="120" height="40"><?php echo $value['m_money']; ?></td>
            <td width="150" height="40"><?php echo $value['m_content']; ?></td>
            <td width="180" height="40"><?php echo $value['m_time']; ?></td>
            <td class="td-status" height="40"><span class="label label-success radius">已启用</span></td>
            <td class="td-manage">
              <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
              <a title="编辑" onclick="member_edit(<?php echo $value['mid']; ?>)" href="javascript:;"  class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a> 
              <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
            </td>
          </tr>
          <?php endforeach; else: foreach($res as $key=>$value): ?>
          <tr>
            <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
            <td width="80" height="40"><?php echo $value['rid']; ?></td>
            <td width="100" height="40"><?php echo $value['roomid']; ?></td>
            <td width="40" height="40"><img style="height: 40px;" src="<?php echo $value['r_picture']; ?>"></td>
            <td width="120" height="40"><?php echo $value['roomprice']; ?></td>
            <td width="150" height="40"><?php echo $value['room_content']; ?></td>
            <td width="180" height="40"><?php echo $value['room_time']; ?></td>
            <td class="td-status" height="40"><span class="label label-success radius">已启用</span></td>
            <td class="td-manage">
              <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
              <a title="编辑" onclick="member_edit(<?php echo $value['rid']; ?>,<?php echo $rid; ?>)" href="javascript:;"  class="btn btn-xs btn-info"><i class="icon-edit bigger-120"></i></a> 
              <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
            </td>
          </tr>
          <?php endforeach; endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<!--添加用户图层-->
<!-- <form action="/admin/User/adduser" method="post"> -->
<div class="add_menber" id="add_menber_style" style="display:none">
  <ul class=" page-content">
   <li><label class="label_name">名&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</label><span class="add_name"><input value="" id="user" name="名称" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
   <li><label class="label_name">价格：</label><span class="add_name"><input name="固定电话" type="text"  class="text_add" id="money"/></span><div class="prompt r_f"></div></li>
   <li class="adderss"><label class="label_name">介绍</label><span class="add_name"><input id="content" name="介绍" type="text"  class="text_add" style=" width:350px"/></span><div class="prompt r_f"></div></li>
 </ul>
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
    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="icon-ok bigger-120"></i></a>');
    $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
    $(obj).remove();
    layer.msg('已停用!',{icon: 5,time:1000});
  });
 }
 /*用户-启用*/
 function member_start(obj,id){
   layer.confirm('确认要启用吗？',function(index){
    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="icon-ok bigger-120"></i></a>');
    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
    $(obj).remove();
    layer.msg('已启用!',{icon: 6,time:1000});
  });
 }
 /*用户-编辑*/
 function member_edit(id,type=null){
   layer.open({
    type: 1,
    title: '修改内容信息',
    maxmin: true, 
    shadeClose:false, //点击遮罩关闭层
    area : ['800px' , ''],
    content:$('#add_menber_style'),
    btn:['提交','取消'],
    yes:function(index,layero){ 
     var num=0;
     var str="";
     $(".add_menber input[type$='text']").each(function(n){
      if($(this).val()=="")
      {
        layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
          title: '提示框',       
          icon:0,               
        }); 
        num++;
        return false;            
      }
      $.ajax({
        "type":"post",
        "url":"/admin/Spin/addSpin",
        "data":{
          "aid":id,
          "type":type,
          "user":$('#user').val(),
          "money":$('#money').val(),
          "content":$('#content').val()
        },
        success:update
      });
    });
     function update(data)
     {
      if (data == 1){
        window.location.href='';
      }
      if(num>0){  return false;}   
      else{
       layer.alert('修改成功！',{
         title: '提示框',        
         icon:1,    
       });
       layer.close(index);  
     }    
   }                    
 }
});
 }
 /*用户-删除*/
 function member_del(obj,id){
   layer.confirm('确认要删除吗？',function(index){
    $(obj).parents("tr").remove();
    layer.msg('已删除!',{icon:1,time:1000});
  });
 }
 laydate({
  elem: '#start',
  event: 'focus' 
});
</script> 
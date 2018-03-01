<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\wamp64\www\git\hotel\public/../application/admin\view\system\systemlogs.html";i:1519695671;}*/ ?>
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
        <script src="/admin/js/H-ui.js" type="text/javascript"></script>
        <script src="/admin/js/displayPart.js" type="text/javascript"></script>
        <script src="/admin/assets/laydate/laydate.js" type="text/javascript"></script>
        <title>系统日志</title>
    </head>

    <body>
        <div class="margin clearfix">
           <div id="system_style">
               <div class="search_style">
                   
                  <ul class="search_content clearfix">
                     <li><label class="l_f">名称</label><input name="" type="text" class="text_add"style=" width:250px"></li>
                     <li><label class="l_f">时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li>
                     <li style="width:90px;"><button type="button" class="btn_search"><i class="fa fa-search"></i>查询</button></li>
                 </ul>
             </div>
             <!--系统日志-->
             <div class="system_logs">
                 <table class="table table-striped table-bordered table-hover" id="sample-table">
                     <thead>
                         <tr>
                            <th width="80px">ID</th>
                            <th width="120px">登录用户</th>
                            <th width="120px">角色</th>
                            <th width="">操作内容</th>
                            <th width="150px">操作时间</th>              
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($res as $value): ?>
                        <tr>
                           <td><?php echo $value['iid']; ?></td>
                           <td><?php echo $value['ausername']; ?></td>
                           <?php if($value['admintype'] == 3): ?>
                           <td>超级管理员</td>
                           <?php elseif($value['admintype'] == 2): ?>
                           <td>高级管理员</td>
                           <?php elseif($value['admintype'] == 1): ?>
                           <td>普通管理员</td>
                           <?php endif; ?>
                           <td><?php echo $value['i_content']; ?></td>
                           <td><?php echo $value['alogtime']; ?></td>
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
  laydate({
    elem: '#start',
    event: 'focus' 
});
  $(function() {
      var oTable1 = $('#sample-table').dataTable( {
  "aaSorting":false,//默认第几个排序
  "bStateSave": true,//状态保存
  "aoColumnDefs": [
	//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	{"orderable":false,"aTargets":[0,1,2,3]}// 制定列不参与排序
  ]});	
  })
</script>

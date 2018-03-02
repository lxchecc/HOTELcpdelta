<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\wamp64\www\git\hotel\public/../application/admin\view\member\wuxianjilist.html";i:1519950842;}*/ ?>
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
		  <title>管理权限</title>
		</head>
		<body>

            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        
   				<div class="compete_list">
					<table id="sample-table-1" class="table table-striped table-bordered table-hover">         
   
                <thead>
                    <tr>
                        <th>
                            CID
                        </th>
                        <th>
				            			分类名称
                        </th>
                        <th>
                       		分类等级
                        </th>
                        <th>
				            			操作
                        </th>                      
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($test)): foreach($test as $val): ?>
                    <tr>
                        <th>
                          <?php echo $val['cid']; ?>
                        </th>
                        <th>
                            <?php 
                              for($i=1; $i<$val['level']; $i++){
                                echo '----'; 
                              }
                            ?>
                          <?php echo $val['name']; ?>
                        </th>
                        <th>
                          <?php echo $val['level']; ?>级分类
                        </th>
                        <th>
                           <a title="删除" href="javascript:;" onclick="wuxianjidel(this,<?php echo $val['cid']; ?>)" 
                           class="btn btn-xs btn-warning" ><i class="fa fa-trash  bigger-120"></i></a>
                           <a title="添加" href="javascript:;" onclick="wuxianjiadd(this,<?php echo $val['cid']; ?>)"
                           class="btn btn-xs btn-warning" ><i class="fa fa-plus bigger-120"></i> </a>                           
                        </th>                      
                          </tr>


                    <?php endforeach; endif; ?>
                </tbody>
            </table>
            <div id="page"></div>
        </div>

       
<script>
function wuxianjidel(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    $.ajax({
      "type":"post",
      "url":"/admin/Member/wuxianjidec",
      "data":{
        'id':id
      },
      success:wxjdeldone
    });
    function wxjdeldone(data)
    {
      console.log(data);
      if (data == 1){
        layer.msg('已删除!',{icon:1,time:1000});
                window.location.href="/admin/Member/wuxianjilist";

      }else if(data == 2) {
        $(obj).parents("tr").remove();
        layer.msg('删除失败!',{icon:1,time:1000});
      }else if(data == 3){
        alert("删除失败，您的等级小于或等于对方的等级!");
      }
    }    
  });
}


function wuxianjiadd(obj,id){
  layer.confirm('新的分类',function(index){
    $.ajax({
      "type":"post",
      "url":"/admin/Member/wuxianjiadd",
      "data":{
        'id':id
      },
      success:wxjadddone
    });
    function wxjadddone(data)
    {
      console.log(data);
      if (data == 1){
        $(obj).parents("tr").remove();
        layer.msg('添加成功!',{icon:1,time:1000});
        window.location.href="/admin/Member/wuxianjilist";

      }
    }    
  });
}
 
</script>

</body>
</html>

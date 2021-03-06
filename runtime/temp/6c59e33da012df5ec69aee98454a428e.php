<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\wamp64\www\git\hotel\public/../application/admin\view\member\powerlist.html";i:1519939984;}*/ ?>
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
        <div class="x-nav">
						<div class="border clearfix">
							<span class="l_f">
								<a href="javascript:ovid()" id="role_add" class="btn btn-warning"><i class="fa fa-plus"></i> 添加角色</a>
								<!-- <a href="javascript:ovid()" class="btn btn-danger"><i class="fa fa-trash"></i> 批量删除</a> -->
							</span>
							<span class="r_f">共：<b>5</b>人</span>
						</div>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        
   				<div class="compete_list">
					<table id="sample-table-1" class="table table-striped table-bordered table-hover">         
   
                <thead>
                    <tr>
                        <th>
                            角色名
                        </th>
                        <th>
							产品权限
                        </th>
                        <th>
                       		交易权限
                        </th>
                        <th>
							会员权限
                        </th>
                        <th>
                       		消息权限
                        </th>
                        <th>
							文章权限
                        </th>
                        <th>
                       		系统权限
                        </th>
                        <th>
							管理权限
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($res)): foreach($res as $val): ?>
                    <tr>                  
                        <td>
                            <?php echo $val['role_name']; ?>
                        </td>
                        <td>
                            <?php if($val['role_1']): ?>
                            <i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($val['role_2']): ?>
                            <i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($val['role_3']): ?>
                            <i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($val['role_4']): ?>
                            <i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($val['role_5']): ?>
                            <i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($val['role_6']): ?>
                            <i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($val['role_7']): ?>
							<i class="btn btn-xs btn-success fa fa-check  bigger-120"></i>	
							<?php else: ?>
							<i class="btn btn-xs fa fa-close bigger-120"></i>
                            <?php endif; ?>                
                        <td>
    						<a href="javascript:ovid()" id="role_edit" class="btn btn-warning" title="角色编辑"><i class="fa fa-120"></i> 编辑</a>

							
		                </td>						                        
                    </tr>
                    <?php endforeach; endif; ?>
                </tbody>
            </table>
            <div id="page"></div>
        </div>

       
        <script>
   /*添加管理员*/
  $('#role_add').on('click', function(){
	layer.open({
	  type: 1 //Page层类型
	  ,area: ['300px', '500px']
	  ,title: '增加角色'
	  ,shade: 0.6 //遮罩透明度
	  ,maxmin: true //允许全屏最小化
	  ,anim: 1 //0-6的动画形式，-1不开启
	  ,content: ' <div>&nbsp;&nbsp;&nbsp;角色名：<input type="text" id="rname"></input></div><br><div>&nbsp;产品权限：<input type="text" id="rp1"></input></div><br><div>&nbsp;交易权限：<input type="text" id="rp2"></input></div><br><div>&nbsp;会员权限：<input type="text" id="rp3"></input></div><br><div>&nbsp;消息权限：<input type="text" id="rp4"></input></div><br><div>&nbsp;文章权限：<input type="text" id="rp5"></input></div><br><div>&nbsp;系统权限：<input type="text" id="rp6"></input></div><br><div>&nbsp;管理权限：<input type="text" id="rp7"></input></div>'
        ,btn:['保存','取消'],  
        btn1: function (index,layero) {  
          $.ajax({
      "type":"post",
      "url":"/admin/Member/roleadd",
      "data":{
        'rolename':$("#rname").val(),
        'rp1':$("#rp1").val(),
        'rp2':$("#rp2").val(),
        'rp3':$("#rp3").val(),
        'rp4':$("#rp4").val(),
        'rp5':$("#rp5").val(),
        "rp6":$("#rp6").val(),
        'rp7':$("#rp7").val()
      },
      success:addrole
    });
          function addrole(data)
     { 
        console.log(data);
        alert('成功');
        layer.close(index);  
                window.location.href="/admin/Member/powerlist";

     }
        },  
        btn2:function (index,layero) {  
             layer.close(index);  
        }  	});  

    function roleinfo()
    {
  	$.ajax({
  		"type":"post",
  		"url":"/admin/Member/roleadd",
  		"data":{
  			'rolename':$("#rname").val(),
  			'rp1':$("#rp1").val(),
  			'rp2':$("#rp2").val(),
  			'rp3':$("#rp3").val(),
  			'rp4':$("#rp4").val(),
  			'rp5':$("#rp5").val(),
  			"rp6":$("#rp6").val(),
  			'rp7':$("#rp7").val()
  		},
  		success:addrole
  	});
          function addrole(data)
     { 
        console.log(data);
        alert(data);
     }
    }
  	function addrole(data)
  	{	
  			console.log(data);
  			alert(data);
  	}
  })
	//表单验证提交
	$("#form-admin-add").Validform({
		
		tiptype:2,

		callback:function(data){
		//form[0].submit();
		if(data.status==1){ 
			layer.msg(data.info, {icon: data.status,time: 1000}, function(){ 
                    location.reload();//刷新页面 
                });   
		} 
		else{ 
			layer.msg(data.info, {icon: data.status,time: 3000}); 
		} 		  
		var index =parent.$("#iframe").attr("src");
		parent.layer.close(index);
			//
		}
		
	});	
    
</script>

</body>
</html>

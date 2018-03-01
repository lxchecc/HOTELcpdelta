<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"E:\wamp64\www\git\hotel\thinkphp\tpl\dispatch_jump.tpl";i:1519823746;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background-image:url('/static/images/bg.jpg'); font-family: "Microsoft Yahei","Helvetica Neue",Helvetica,Arial,sans-serif; color: #333; font-size: 16px;}
        .system-message{width:700px;height:200px;background:#E2E2E2;margin:150px auto;padding: 50px 50px;opacity: 0.5;border-radius: 50px;box-shadow: 5px 5px 10px #99817D;}
        .system-message img{width: 150px;height: 150px;float: left;margin: 20px 20px;}
        .system-message .jump{ padding-top: 10px; float: left;margin-top:10px; }
        .system-message .jump a{ color: #333; }
        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 30px; float: left;margin-top: 40px;width: 510px;}
        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display: none; }
    </style>
</head>
<body>
    <div class="system-message clearFix">
        <?php switch ($code) {case 1:?>
            <img src="/static/images/success.gif"/>
            <p class="success" style="color:green;"><?php echo(strip_tags($msg));?></p>
            <?php break;case 0:?>
            <img src="/static/images/error.gif" />
            <p class="error" style="color:red;"><?php echo(strip_tags($msg));?></p>
            <?php break;} ?>
        <p class="detail"></p>
        <p class="jump" >
            页面自动 <a id="href" style="color:blue;" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
        </p>
    </div>
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
    </script>
</body>
</html>

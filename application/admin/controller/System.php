<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
// use app\admin\controller\Define;
include "Define.php";
//系统管理
class System extends controller
{
	public function systems()
	{
		$beian = BEIAN;
		$name = NAME;
		$content = CONTENT;
		$info = INFO;
		// dump($name);
		if ($_POST){
			$beian = $_POST['beian'];
			$name = $_POST['name'];
			$content = $_POST['content'];
			$info = $_POST['info'];
			$file = 'Define.php';
			$content = "<?php 
			define ('NAME' , '$name');
			define ('CONTENT' , '$content');
			define ('INFO' , '$info');
			define ('BEIAN'  , '$beian');";
			$config = file_put_contents($file, $content);
			if ($config){
				$this->success('修改成功','/admin/System/systems',3);
			}else {
				$this->error("修改失败",'/admin/System/systems',3);
			}
		}
		$this->assign('beian',$beian);
		$this->assign('name',$name);
		$this->assign('content',$content);
		$this->assign('info',$info);
		return $this->fetch();
	}
	public function systemLogs()
	{
		//查询所有的管理员记录
		$res = Db::table('hotel_admininfo i,hotel_admin a')->where('iid','<>','0')->where('i.aid=a.aid')->select();
		foreach ($res as $key => $value) {
			$time=$value['alogtime'];
			$time = date('Y-m-d H:i:s',$time);
			$res[$key]['alogtime'] = $time;
		}
		//分配变量
		$this->assign('res',$res);
		return $this->fetch();
	}
	public function systemSection()
	{
		$time = date("Y-m-d H:i:s",time());
		$this->assign('time',$time);
		return $this->fetch();
	}

}
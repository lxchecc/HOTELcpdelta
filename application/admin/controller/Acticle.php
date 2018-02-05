<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\Model\Acticle as ActicleModel;
//文章管理
class Acticle extends controller
{
	public $acticle;
	public function __construct()
	{
		parent::__construct();
		$this->acticle = new ActicleModel();
	}
	public function articleSort()
	{
		$res = $this->acticle->articleSort();
		foreach ($res as $key => $value) {
			$time = $value['x_time'];
			$time = date('Y-m-d H:i:s',$time);
			$res[$key]['x_time']=$time;
		}
		$count = $this->acticle->titleCount();
		$this->assign("count",$count);
		$this->assign("res",$res);
		return $this->fetch();
	}
	public function acticleAdd()
	{
		if ($_POST){
			//接收post传过来的值
			$title = $_POST['title'];
			$content = $_POST['content'];
			$brief = $_POST['brief'];
			$time = time();
			//获取session中存放的aid
			$aid = Session::get('aid');
			//查询出该管理员的信息
			$aidselect = $this->acticle->aidselect($aid);
			foreach ($aidselect as $key => $value) {
				$admintype = $value['admintype'];
				$ausername = $value['ausername'];
			}
			//判断当前登录的管理等级是否大于普通管理员
			if ($admintype > 1){
				//在消息表中插入一条消息
				$res = Db::table('hotel_xiaoxi')->insert(['aid'=>$aid,'x_content'=>$content,'x_title'=>$title,'x_brief'=>$brief,'x_time'=>$time]);
			//插入成功在信息表中插入一条操作信息
				if ($res){
				//获取ip
					$ip = $_SERVER['SERVER_ADDR'];
					if ($ip == '::1'){
						$ip = '127.0.0.1';
						$ip = ip2long($ip);
					}else {
						$ip;
					}
					$time = time();
					$data = [
					'aid' => $aid,
					'admintype' => $admintype,
					'i_content' => '添加消息成功',
					'ausername' => $ausername,
					'aip' => $ip,
					'alogtime' => $time,
					];
					//在系统日志表中添加一条操作记录
					$info = $this->acticle->info($data);
					return 1;
				}else {
					return 2;
				}
			} else{
				return 3;
			}	
		}
		return $this->fetch();
	}
	public function deltitle()
	{
		if ($_POST){
			$id = $_POST['id'];
			$del = $this->acticle->deltitle($id);
			if ($del){
				echo 1;
			} else {
				echo 2;
			}
		}
	}
}
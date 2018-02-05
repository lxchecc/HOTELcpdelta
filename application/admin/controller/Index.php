<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use \think\Session;
use app\admin\Model\Index as IndexModel;
class Index extends Controller
{
	public $index;
	public function __construct()
	{
		parent::__construct();
		$this->index = new IndexModel();
	}
	public function index()
	{
		if (Session::get('aid')){
			$aid = Session::get('aid');
			$res = Db::table('hotel_admin')->where("aid",$aid)->select();
			$this->assign('admintype',$res[0]['admintype']);
			$this->assign('aid',$res[0]['aid']);
		} else {
			$this->error('您还没有登录，请前往登录','/admin/Login/login',3);
		}
		return $this->fetch();
	}
	public function home()
	{
		//获取sessionID
		$aid = Session::get('aid');
		//获取IP
		$ip = $_SERVER['SERVER_ADDR'];
				if ($ip == '::1'){
					$ip = '127.0.0.1';
					$ip = ip2long($ip);
				}else {
					$ip;
				}
		$ip = long2ip($ip);
		//获取消费用户总数
		$user = $this->index->user();
		//获取总订单数
		$dingdan = $this->index->dingdan();
		$ctdd = $this->index->ctdd();
		$dingdan = $ctdd+$dingdan;
		//获取支付完成的订单数
		$cjdingdan = $this->index->cjdingdan();
		$cddd = $cjdingdan;
		// dump($cjdingdan);
		$ctdingdan = $this->index->ctdingdan();
		$cjdingdan = $ctdingdan+$cjdingdan;
		//获取成交金额总数
		$money = $this->index->roommoney();
		$ctmoney = $this->index->ctmoney();
		$money = $money + $ctmoney;
		//未支付订单总数
		$wzf = $this->index->wzf();
		//未入住订单总数
		$time = time();
		$wrz = $this->index->wrz($time);
		//已入住订单总数
		$yrz = $this->index->yrz($time);
		//餐厅未支付订单总数
		$restwzf = $this->index->restwzf();
		//餐厅已支付订单总数
		$restyzf = $this->index->restyzf();
		//新上架总数
		$time = time();
		$newsj = $time-15*(24*60*60);
		$new = $this->index->new($newsj);
		//分配变量
		$this->assign('addd',$cddd);
		$this->assign('new',$new);
		$this->assign('restyzf',$restyzf);
		$this->assign('restwzf',$restwzf);
		$this->assign('yrz',$yrz);
		$this->assign('wrz',$wrz);
		$this->assign('wzf',$wzf);
		$this->assign('money',$money);
		$this->assign('cjdingdan',$cjdingdan);
		$this->assign('dingdan',$dingdan);
		$this->assign('user',$user);
		$this->assign('ip',$ip);
		//获取时间
		$time = date('Y年m月d日 H时i分s秒',time());
		$this->assign('time',$time);
		$this->assign('aid',$aid);
		return $this->fetch();
	}
	public function admin()
	{
		$aid = $_REQUEST['aid'];
		$res = Db::table('hotel_admin')->where("aid",$aid)->select();
		$info = Db::table('hotel_admininfo')->where('aid',$aid)->select();
		foreach ($info as $key => $value) {
			$ip = $value['aip'];
			$ip = long2ip($ip);
			$time = $value['alogtime'];
			$time = date('Y-m-d H:i:s',$time);
			$info[$key]['aip'] = $ip;
			$info[$key]['alogtime'] = $time;
		}
		$this->assign('info',$info);
		foreach ($res as $key => $value) {
			$atime = date('Y-m-d',$value['atime']);
			$value['atime']=$atime;
			$this->assign('admin',$value);
			$this->assign('aid',$aid);
		}
		return $this->fetch();
	}
}
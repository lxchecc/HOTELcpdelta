<?php
namespace app\index\controller;

use app\index\model\Room;
use app\index\model\Order;
use think\Controller;
use think\Db;
use think\Request;
use think\helper\Time;
use think\Session;
class Rooms extends Controller
{
	//房间模板
	public function rooms()
	{
		$list = Db::name('room')->where('status',0)->paginate(4,100000);
		$room = Db::name('room')->group('roomtype')->select();
		//dump($room);die;
        $uid = Session::get('uid');
        $user = Db::name('user')->where('id',$uid)->find();
        $this->assign('user',$user);		
		$this->assign('room',$room);
		$this->assign('list',$list);
		return $this->fetch();
	}
	//查询房间
	public function doroom()
	{
		$roomtype = input('roomtype');
		$number = Db::name('room')->where('roomtype',$roomtype)->where('status',0)->select();
		//dump($number);
		return json_encode($number);
	}
	//添加预定
	public function addroom()
	{

		$uid = Session::get('uid');
		if(empty($uid)){
			return 0;
		}
		list($start , $end) = Time::today();
		//echo $start;1495123200
		
		$rutime = input('ru');
		$tuitime = input('tui');
		//echo strtotime($rutime);1494950400
		if(empty($rutime)){
			return 1;
		}
		//入住时间
		if(strtotime($rutime) < $start){
			return 1;	
		}
		if(empty($tuitime)){
			return 2;
		}
		//明天零的时间
		$tomorrow = date("Y-m-d",strtotime('+1 day'));
		//退房时间
		if(strtotime($tomorrow) > strtotime($tuitime) || strtotime($rutime) >= strtotime($tuitime)){
			return 2;
		}
		$roomtype = input('roomtype');
		if(empty($roomtype) || $roomtype=='请选择房间类型'){
			return 3;
		}
		$roomid = input('roomid');
		if(empty($roomid) || $roomid=='请选择房间号'){
			return 4;
		}

		$room = Db::name('room')->where('roomtype',$roomtype)->where('roomid',$roomid)->find();
		//dump($room);
		$rid = $room['rid'];
		$money = $room['roomprice'];
		$newtime = strtotime($tuitime) - strtotime($rutime);
		;
		$time = $newtime / (60*60*24);
		$newMoney = $money * $time;
		$data = [
				['rid'=> $rid,'uid'=> Session::get('uid'),'ru_time'=> strtotime($rutime),'tui_time'=> strtotime($tuitime),'o_money'=>$newMoney]
			];
		$order = new Order;
		$result = $order->saveAll($data);
		if($result){
			$status = Db::name('room')->where('rid',$rid)->update(['status'=>1]);
			return 5;
		}else{
			return false;
		}
	}

}
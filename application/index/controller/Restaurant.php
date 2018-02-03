<?php
namespace app\index\controller;

use app\index\model\Sumption;
use think\Controller;
use think\Db;
use think\Request;
use think\helper\Time;
use think\Session;
class Restaurant extends controller
{
	//餐厅模板
	public function restaurant()
	{
		return $this->fetch();
	}
	//查询餐厅
	public function dorest()
	{
		$restType = input('restType');
		$number = Db::name('rest')->where('c_type',$restType)->where('status',0)->select();
		return json_encode($number);
	}
	//添加预定
	public function addrest()
	{
		if(empty(Session::get('uid'))){
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
		$c_type = input('c_type');
		if(empty($c_type) || $c_type=='请选择餐厅类型'){
			return 3;
		}
		$c_seat = input('c_seat');
		if(empty($c_seat) || $c_seat=='请选择餐厅号'){
			return 4;
		}

		$rest = Db::name('rest')->where('c_type',$c_type)->where('c_seat',$c_seat)->find();
		$cid = $rest['cid'];
		$money = $rest['cprice'];
		$newtime = strtotime($tuitime) - strtotime($rutime);
		;
		$time = $newtime / (60*60*24);
		$newMoney = $money * $time;
		$data = [
				['restid'=> $cid,'uid'=> Session::get('uid'),'ru_time'=> strtotime($rutime),'tui_time'=> strtotime($tuitime),'y_money'=>$newMoney]
			];
		$sumption = new Sumption;
		$result = $sumption->saveAll($data);
		if($result){
			$status = Db::name('rest')->where('cid',$cid)->update(['status'=>1]);
			return 5;
		}else{
			return false;
		}
	}
}
<?php
namespace app\index\controller;

//use app\index\model\Menuche;
//use app\index\model\Order;
use think\Controller;
use think\Db;
use think\Session;
use think\Request;
class Destine extends Controller
{
	public function destine()
	{
		if(empty(Session::get('uid'))){
			$this->redirect('/index/User/login');
		}
		$uid = session::get('uid');
		//菜单 
		$che = Db::query("select * from hotel_menu,hotel_menuche,hotel_user where hotel_menu.mid=hotel_menuche.mid and hotel_menuche.uid=hotel_user.id and hotel_user.id=$uid");
		
		//房间
		$ord = Db::query("select * from hotel_order,hotel_room,hotel_user where hotel_user.id=$uid and hotel_order.rid=hotel_room.rid and hotel_user.id=hotel_order.uid");
		
		//餐厅
		$sum = Db::query("select * from hotel_rest,hotel_sumption,hotel_user where hotel_user.id=$uid and hotel_rest.cid=hotel_sumption.restid and hotel_user.id=hotel_sumption.uid");
		$num = $this->tongji();
		$this->assign('num',$num);
		$this->assign('sum',$sum);
		$this->assign('ord',$ord);
		$this->assign('che', $che);
        $user = Db::name('user')->where('id',$uid)->find();
        $this->assign('user',$user);	
		return $this->fetch();
	}
	//统计总价
	public function tongji()
	{
		$uid = session::get('uid');
		$menuche = Db::name('menuche')->where('uid',$uid)->where('status',0)->select();
		static $m_money = 0;
		foreach ($menuche as $key => $value) {
			$m_money += $value['m_money'];
		}
		$order = Db::name('order')->where('uid',$uid)->where('o_state',2)->select();
		static $o_money = 0;
		foreach ($order as $key => $value) {
			$o_money += $value['o_money'];
		}
		$sumption = Db::name('sumption')->where('uid',$uid)->where('y_status',0)->select();
		static $y_money = 0;
		foreach ($sumption as $key => $value) {
			$y_money += $value['y_money'];
		}
		$num = $m_money + $o_money + $y_money;
		return $num;
	}
	//支付总价
	public function zong()
	{
		$num = $this->tongji();
		$uid = session::get('uid');
		$money = (int)trim(input('money'));
		if($num == $money){
			$result = db::name('user')->where('id',$uid)->find();
			if($money > $result['u_money']){
				return 4;
			}
			$newMoney = $result['u_money']-$money;
			Db::name('user')->where('id',$uid)->update(['u_money'=>"$newMoney"]);
			Db::name('menuche')->where('uid',$uid)->update(['status'=>1]);
			Db::name('order')->where('uid',$uid)->update(['o_state'=>1]);
			Db::name('sumption')->where('uid',$uid)->update(['y_status'=>1]);
			return 1;
		}else{
			return 2;
		}
	}
	//取消订单
	public function delCai(Request $request)
	{
		$mcid = $request->param('mcid');
		$oid = $request->param('oid');
		$yid = $request->param('yid');
		//餐厅
		$sump = Db::table('hotel_sumption')->where('yid',$yid)->find();
		$cid = $sump['restid'];
		Db::table('hotel_sumption')->delete("$yid");
		Db::table('hotel_rest')->where('cid',$cid)->update(['status'=>0]); 
		//房间
		$room = Db::table('hotel_order')->where('oid',$oid)->find();
		$rid = $room['rid'];
		Db::table('hotel_order')->delete("$oid");
		Db::table('hotel_room')->where('rid',$rid)->update(['status'=>0]);
		//菜单
		Db::table('hotel_menuche')->delete("$mcid");
		
	}
	//申请付款(菜单)
	public function addCai()
	{
		$uid = session::get('uid'); 
		$mcid = input('mcid');
		
		$money = (int)trim(input('money'));
		//检测该用户是否入住
		$room = Db::table('hotel_order')->where('uid',$uid)->find();
		if($room == null){
			return 1;
		}
		//房间餐
		$result = Db::name('menuche')->where('uid',$uid)->where('mcid',$mcid)->select();
		foreach ($result as $key => $value) {
			$m_money = $value['m_money'];
		}
		
		if($m_money == $money){
			$result = db::name('user')->where('id',$uid)->find();
			if($money > $result['u_money']){
				return 4;
			}
			$newMoney = $result['u_money']-$money;
			Db::name('user')->where('id',$uid)->update(['u_money'=>"$newMoney"]);
			Db::name('Menuche')->where('uid',$uid)->where('mcid',$mcid)->update(['status'=>1]);
			return 2;
		}else{
			return 3;
		}
	}

	//房间餐
	public function addroom()
	{
		$uid = session::get('uid');
		$money = (int)trim(input('money'));
		$oid = input('oid');
		//房间
		$query = Db::table('hotel_order')->where('uid',$uid)->where('oid',$oid)->select();
		foreach ($query as $key => $value) {
			$o_money = $value['o_money'];
		}
		if($o_money == $money){
			$result = db::name('user')->where('id',$uid)->find();
			if($money > $result['u_money']){
				return 4;
			}
			$newMoney = $result['u_money']-$money;
			Db::name('user')->where('id',$uid)->update(['u_money'=>"$newMoney"]);
			Db::name('order')->where('uid',$uid)->where('oid',$oid)->update(['o_state'=>1]);
			return 2;
		}else{
			return 3;
		}
	}
	//餐厅
	public function addrest()
	{
		$uid = session::get('uid');
		$money = (int)trim(input('money'));
		$yid = input('yid');
		$result = Db::table('hotel_sumption')->where('uid',$uid)->where('yid',$yid)->select();
		foreach ($result as $key => $value) {
			$o_money = $value['y_money'];
		}
		if($o_money == $money){
			$result = db::name('user')->where('id',$uid)->find();
			if($money > $result['u_money']){
				return 4;
			}
			$newMoney = $result['u_money']-$money;
			Db::name('user')->where('id',$uid)->update(['u_money'=>"$newMoney"]);
			Db::name('sumption')->where('uid',$uid)->where('yid',$yid)->update(['y_status'=>1]);
			return 1;
		}else{
			return 2;
		}

	}
	//退款
	public function refund()
	{
		$uid = session::get('uid');
		$mcid = input('mcid');
		$oid = input('oid');
		$yid = input('yid');
		$men = Db::name('menuche')->where('mcid',$mcid)->where('uid',$uid)->update(['m_refund'=>1]);
		$sum = Db::name('sumption')->where('yid',$yid)->where('uid',$uid)->update(['y_refund'=>1]);
		$order = Db::table('hotel_order')->where('oid',$oid)->where('uid',$uid)->update(['o_refund'=>1]);
		if($sum || $order || $men){
			return 1;
		}

	}

}
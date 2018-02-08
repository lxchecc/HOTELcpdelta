<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\File;
use think\Session;
class Spin extends Controller
{
	public function categoryManage()
	{
		return $this->fetch();
	}
	public function productCategoryAdd()
	{
		return $this->fetch();
	}
	public function admin()
	{
//添加餐饮或房间
	//获取传过来的值
		$file = request()->file('file');
		$info = $file->move(ROOT_PATH . 'public' . DS . 'uplodes');
		$lj = $info->getSaveName();
		$lj = '\uplodes'.'\\'.$lj;
		$cname = $_REQUEST['cname'];
		$money = $_REQUEST['money'];
		$content = $_REQUEST['content'];
		$r_type = $_REQUEST['room'];
		$ct = $_REQUEST['ct'];
		$aid = Session::get('aid');
		$time = time();
	//判断传过来的值是否为空
		if ($cname == '' && $money == '' && $content == ''){
			$this->error('添加失败','/admin/Spin/productCategoryAdd',3);
		}
	//判断传过来的是要添加放假还是餐饮
		if ($_REQUEST['type'] == 1){
		//添加餐饮
			$res = Db::table('hotel_menu')->insert(['m_money'=>$money,'m_content'=>$content,'m_time'=>$time,'m_picture'=>$lj,'m_name'=>$cname]);
			if ($res) {
				$this->success('新增成功','/admin/Spin/productCategoryAdd',3);
			}
		}elseif ($_REQUEST['type'] == 2) {
		//添加房间
			$resselect = Db::table('hotel_room')->where('roomid',$cname)->select();
			if ($resselect){
				$this->error('添加失败,该房间已存在','/admin/Spin/productCategoryAdd',3);
			}else{
				$res = Db::table('hotel_room')->insert(['roomid'=>$cname,'roomtype'=>$r_type,'roomprice'=>$money,'r_picture'=>$lj,'room_time'=>$time,'room_content'=>$content,'aid'=>$aid]);
				if ($res){
					$this->success('新增成功','/admin/Spin/productCategoryAdd',3);
				} else {
					$this->error('添加失败','/admin/Spin/productCategoryAdd',3);
				}
			}
		} else{
			//添加餐厅
			$ctselect = Db::table('hotel_rest')->where('c_seat',$cname)->select();
			//查询要插入的餐桌编号是否已存在
			if ($ctselect){
				$this->error('添加失败，该桌号已存在','/admin/Spin/productCategoryAdd',3);
			}
			$ctinsert = Db::table('hotel_rest')->insert(['cprice'=>$money,'c_seat'=>$cname,'c_type'=>$ct,'c_picture'=>$lj,'c_content'=>$content]);
			if ($ctinsert){
				$this->success('新增成功','/admin/Spin/productCategoryAdd',3);
			}else{
				$this->error('添加失败','/admin/Spin/productCategoryAdd',3);
			}
		}
	}
	public function menu()
	{
		//判断传过来的是要显示菜单还是房间
		if ($_REQUEST){
			//便利菜单
			if (isset($_REQUEST['mid'])){
				//查询所有的菜单
				$res = Db::table('hotel_menu')->where('mid','<>','0')->select();
				//用foreach将时间戳转换为日期格式
				foreach ($res as $key => $value) {
					$time = $value['m_time'];
					$time = date('Y-m-d H:i:s',$time);
					$res[$key]['m_time'] = $time;
				}
				//查询一共有多少菜单
				$count = Db::table('hotel_menu')->count('mid','<>','0');
				$mid = 2;
				//分配变量
				$this->assign('count',$count);
				$this->assign('mid',$mid);
				$this->assign('res',$res);
			} else if($_REQUEST['rid']){
			//便利房间 根据传过来的房间类型查询
				$res = Db::table('hotel_room')->where('roomtype',$_REQUEST['rid'])->select();
			//用foreach将时间戳转换为日期格式
				foreach ($res as $key => $value) {
					$time = $value['room_time'];
					$time = date('Y-m-d H:i:s',$time);
					$res[$key]['room_time'] = $time;
				}
			//查询当前类型的房间一共有多少
				$count = Db::table('hotel_room')->count('roomtype',$_REQUEST['rid']);
				$rid = $_REQUEST['rid'];
			//分配变量
				$this->assign('count',$count);
				$this->assign('rid',$rid);
				$this->assign('res',$res);
			}
		}
		return $this->fetch();
	}
	public function addSpin()
	{
		//修改房间或菜单信息
		//接收AJAX传过来的值
		$type = $_POST['type'];
		$mid = $_POST['aid'];
		$m_name = $_POST['user'];
		$money = $_POST['money'];
		$content = $_POST['content'];
		//判断是否传过来类型 如果为空则是修改菜单
		if ($type == null){
			//修改菜单信息
			$res = Db::table('hotel_menu')->where("mid",$mid)->update(['m_name'=>$m_name,'m_money'=>$money,'m_content'=>$content]);
			//返回值
			if ($res){
				echo 1;
			}else {
				echo 2;
			}
		}else {
			//修改房间信息
			$res = Db::table('hotel_room')->where('rid',$mid)->update(['roomid'=>$m_name,'roomprice'=>$money,'room_content'=>$content]);
			//返回值
			if ($res){
				echo 1;
			} else {
				echo 2;
			}
		}
	}
}
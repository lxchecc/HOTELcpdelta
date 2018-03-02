<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\admin\model\Member as MemberModel;
//会员管理

class Member extends controller
{
	public $member;
	public static $wuxiandata = [];
	public static $num =1;
	public function __construct()
	{
		parent::__construct();
		$this->member = new MemberModel();
	}
	//删除管理员
	public function adminCompetence()
	{
		//查询出所有的管理员
		$res = $this->member->vip();
		$aid = Session::get('aid');
		$log = $this->member->upselect($aid);
		foreach ($log as $key => $value) {
			$aidtype = $value['admintype'];
		}
		if ($_POST){
		//删除某个管理员
			$id = $_POST['id'];
			$qid = $this->member->upselect($id);
			foreach ($qid as $key => $value) {
				$didtype = $value['admintype'];
			}
			if ($aidtype > $didtype){
				$del = $this->member->delvip($id);
				if ($del){
					return 1;
				}else{
					return 2;
				}
			} else{
				return 3;
			}
		}
		$this->assign('res',$res);
		return $this->fetch();
	}
	//查询管理员的个人信息
	public function adminInfo()
	{
		//接收传过来的当前登录的管理员的ID
		$aid = $_REQUEST['aid'];
		//查询出该管理员的所有信息
		$res = Db::table('hotel_admin')->where("aid",$aid)->select();
		//查询该管理员的所有操作信息
		$info = Db::table('hotel_admininfo')->where('aid',$aid)->select();
		//利用foreach将时间戳和IP转换
		foreach ($info as $key => $value) {
			$ip = $value['aip'];
			$ip = long2ip($ip);
			$time = $value['alogtime'];
			$time = date('Y-m-d H:i:s',$time);
			$info[$key]['aip'] = $ip;
			$info[$key]['alogtime'] = $time;
		}
		//分配变量
		$this->assign('info',$info);
		//利用foreach将时间戳和IP转换
		foreach ($res as $key => $value) {
			$atime = date('Y-m-d',$value['atime']);
			$value['atime']=$atime;
			$this->assign('admin',$value);
			$this->assign('aid',$aid);
		}
		return $this->fetch();
	}
	//添加管理员
	public function administrator()
	{
		//查询出所有的管理员
		$res = $this->member->vip();
		foreach ($res as $key => $value) {
			$time = $value['atime'];
			$time = date("Y-m-d H:i:s",$time);
			$res[$key]["atime"]=$time;
		}
		//分配变量
		$this->assign('res',$res);
		if ($_POST){
			// dump($_POST);
			$ausername = $_POST['user_name'];
			$apassword = md5($_POST['userpassword']);
			$asex = $_POST['form_field_radio'];
			$aname = $_POST['realyname'];
			$asfz = $_POST['user_sfz'];
			$atel = $_POST['user_tel'];
			$aemail = $_POST['email'];
			$atime = time();
			$admintype = $_POST['admin_role'];
			$ip = $_SERVER['SERVER_ADDR'];
				if ($ip == '::1'){
					$ip = '127.0.0.1';
					$ip = ip2long($ip);
				}else {
					$ip;
				}
			$aid = Session::get('aid');
			$aidselect = $this->member->upselect($aid);
			foreach ($aidselect as $key => $value) {
				$aid_type = $value['admintype'];
			}
			$data = ['ausername'=>$ausername,'apassword'=>$apassword,'asex'=>$asex,'aname'=>$aname,'asfz'=>$asfz,'atel'=>$atel,'aemail'=>$aemail,'atime'=>$atime,'admintype'=>$admintype,'aip'=>$ip];
			if ($admintype < $aid_type){
				$insert = $this->member->addadmin($data);
				if ($insert){
					$this->success('新增成功','/admin/Member/administrator',3);
				} else{
					$this->error('新增失败','/admin/Member/administrator',3);
				}
			} else{
				$this->error("新增失败，您不可以添加与自己同级或大于本级的管理员",'/admin/Member/administrator',3);
			}		
		}
		return $this->fetch();
	}
	public function competence()
	{
		return $this->fetch();
	}
	public function powerlist()
	{
		$res = Db::table('hotel_adrole')->select();		
		$this->wuxianji(0);	
		$this->assign('test',self::$wuxiandata);	
		$this->assign('res',$res);
		return $this->fetch();
	}	
	public function roleadd()
	{
		$data['role_name'] = $_POST['rolename'];
		$data['role_1'] = $_POST['rp1'];
		$data['role_2'] = $_POST['rp2'];
		$data['role_3'] = $_POST['rp3'];
		$data['role_4'] = $_POST['rp4'];
		$data['role_5'] = $_POST['rp5'];
		$data['role_6'] = $_POST['rp6'];
		$data['role_7'] = $_POST['rp7'];
		$res = Db::table('hotel_adrole')->insert($data);
		if (!empty($res)) return 1;
	}
	
	public function wuxianjilist()
	{
		$res = Db::table('hotel_adrole')->select();		
		$this->wuxianji(0);	
		$this->assign('test',self::$wuxiandata);	
		$this->assign('res',$res);
		return $this->fetch();
	}	
	public function wuxianjidec()
	{
		$cid = $_POST['id'];
		$res = Db::table('hotel_category')->where('cid',"$cid")->delete();
		return 1;
	}	

	public function wuxianjiadd()
	{
		$data=[];
		$cid = $_POST['id'];
		$mys = Db::table('hotel_category')->where('cid',"$cid")->select();
		$data['pid']=$cid;
		$level = $mys[0]['level']+1;
		$data['level']=$level;
		$data['name']="$cid.号分类下的第.$level.级子分类";
		$res = Db::table('hotel_category')->insert($data);
		return 1;
	}	

	public function wuxianji($a)
	{
		$res = Db::table('hotel_category')->where('pid',"$a")->select();
		$ans = [];
		foreach ($res as $val)
		{	
			array_push(self::$wuxiandata,$val);
			//var_dump($val);
			self::$wuxiandata++;
			$cid = $val['cid'];
			$child = Db::table('hotel_category')->where('pid',"$cid")->select();
			if (!empty($child)) {
			$childdata = $this->wuxianji($cid);
			array_push($ans,$childdata);
			}
		}
	}
	//管理员修改信息
	public function upinfo()
	{
		//获取session中存放的管理员的ID
		$aid = Session::get('aid');
		//查询出该ID的所有信息
		$select = $this->member->upselect($aid);
		//接收ajax传过来的值
		if ($_POST){
			//分配值
			$aname = $_POST['user'];
			$aage = $_POST['age'];
			$atel = $_POST['tel'];
			$aemail = $_POST['email'];
			$aqq = $_POST['qq'];
			//将ajax传过来的值放到数组中  准备修改
			$data = ['aname'=>$aname,'aage'=>$aage,'atel'=>$atel,'aemail'=>$aemail,'aqq'=>$aqq];
			//修改
			$up = $this->member->upinfo($aid,$data);
			//判断是否修改成功 无论修改成功还是失败 都在hotel_admininfo表中插入一条记录
			if ($up){
				//获取该ID的所有信息
				foreach ($select as $key => $value) {
					//用户名
					$ausername = $value['ausername'];
					//id
					$aid = $value['aid'];
					//管理员类型
					$type = $value['admintype'];	
				}
				//IP
				$ip = $_SERVER['SERVER_ADDR'];
				if ($ip == '::1'){
					$ip = '127.0.0.1';
					$ip = ip2long($ip);
				}else {
					$ip;
				}
				//时间
				$time = time();
				//将所需要的数据放入数组中
				$data = ['aid'=>$aid,'admintype'=>$type,'i_content'=>'修改信息成功','ausername'=>$ausername,'aip'=>$ip,'alogtime'=>$time];
					//插入
				$insert = $this->member->insertinfo($data);
				//判断是否插入成功 返回到页面
				if ($insert){
					echo 1;
					die;
				} else{
					echo 2;
					die;
				}
			} else {
				//修改失败后的插入
				foreach ($select as $key => $value) {
					$ausername = $value['ausername'];
					$aid = $value['aid'];
					$type = $value['admintype'];	
				}
				$ip = $_SERVER['SERVER_ADDR'];
				if ($ip == '::1'){
					$ip = '127.0.0.1';
					$ip = ip2long($ip);
				}else {
					$ip;
				}
				$time = time();
				$data = ['aid'=>$aid,'admintype'=>$type,'i_content'=>'修改信息失败','ausername'=>$ausername,'aip'=>$ip,'alogtime'=>$time];
				$insert = $this->member->insertinfo($data);
			}
		} 
	}
	//管理员修改密码
	public function uppwd()
	{
		//修改密码
		if ($_POST){
			//获取AJAX传过来的值
			//ID
			$aid = $_POST['id'];
			//旧密码  进行md5加密  
			$pass = md5($_POST['pass']);
			//新密码  进行md5加密
			$newpass = md5($_POST['newpass']);
			//查询出该管理员的原本密码
			$password = $this->member->upselect($aid);
			//获取所需要的数据方便修改后再hotel_admininfo表中插入一条记录
			foreach ($password as $key => $value) {
				$pwd = $value['apassword'];
				$ausername = $value['ausername'];
				$aid = $value['aid'];
				$type = $value['admintype'];
			}
			$ip = $_SERVER['SERVER_ADDR'];
			if ($ip == '::1'){
				$ip = '127.0.0.1';
				$ip = ip2long($ip);
			}else {
				$ip;
			}
			$time = time();
				//判断旧密码和数据库中的密码是否相同
			if ($pass == $pwd){
				//相同则修改 并在hotel_admininfo表中插入一条记录
				$data = ['apassword'=>$newpass];
				$up = $this->member->upinfo($aid,$data);
				if ($up){
					$data = ['aid'=>$aid,'admintype'=>$type,'i_content'=>'修改密码成功','ausername'=>$ausername,'aip'=>$ip,'alogtime'=>$time];
					//插入
					$insert = $this->member->insertinfo($data);
					if ($insert){
						echo 1;
						die;
					} else{
						echo 2;
						die;
					}
				}else {
					//修改密码失败
					$data = ['aid'=>$aid,'admintype'=>$type,'i_content'=>'修改密码失败','ausername'=>$ausername,'aip'=>$ip,'alogtime'=>$time];
					$insert = $this->member->insertinfo($data);
				}
			} else{
				//旧密码与数据库中的不相同
				$data = ['aid'=>$aid,'admintype'=>$type,'i_content'=>'修改密码失败,密码错误','ausername'=>$ausername,'aip'=>$ip,'alogtime'=>$time];
				$insert = $this->member->insertinfo($data);
			}
		}
	}
	//禁止某个管理员登录
	public function upadminzt()
	{
		if ($_POST){
			$aid = $_POST['id'];
			$aidtype = $this->member->upselect($aid);
			foreach ($aidtype as $key => $value) {
				$aidtype = $value['admintype'];
			}
			$did = Session::get('aid');
			$didtype = $this->member->upselect($did);
			foreach ($didtype as $key => $value) {
				$didtype = $value['admintype'];
			}
			$data = ['admin_zt'=>0];
			if ($didtype > $aidtype){
				$update = $this->member->upzt($aid,$data);
				if ($update){
					echo 1;
					die;
				} else{
					echo 2;
					die;
				}
			}else{
				echo 3;
				die;
			}
			
		}
	}
	//允许某个管理员登录
	public function upzt()
	{
		if ($_POST){
			$aid = $_POST['id'];
			$aidtype = $this->member->upselect($aid);
			foreach ($aidtype as $key => $value) {
				$aidtype = $value['admintype'];
			}
			$did = Session::get('aid');
			$didtype = $this->member->upselect($did);
			foreach ($didtype as $key => $value) {
				$didtype = $value['admintype'];
			}
			$data = ['admin_zt'=>1];
			if ($didtype > $aidtype){
				$update = $this->member->upzt($aid,$data);
				if ($update){
					echo 1;
					die;
				} else{
					echo 2;
					die;
				}
			}else {
				echo 3;
				die;
			}
		}
	}
}
<?php
namespace app\index\controller;

use app\index\model\User as UserModel;
use app\index\controller\SaeTOAuthV2;
use app\index\controller\Msg;
use think\Db;
use think\Controller;
use think\Cookie;
use think\Session;
define('WB_KEY','1309174983');
define('WB_SKC','802639d8df32f7b4e386b75eb8a0700c');

class User extends controller
{
	//登录，注册模板
	public function login()
	{
		return $this->fetch();
	}
	//执行登录
	public function dologin()
	{
		$username = trim($_POST['user']);
		$result = Db::name('user')->where('username|email|tel',"$username")->select();
		if ($result && count($result)>0) {
			$passwd = md5(trim($_POST['passwd']));
			if($passwd == $result[0]['password']){
				Session::set('uid',$result[0]['id']);

				Session::set('username',$result[0]['username']);
				echo 1;
			}else{
				echo 2;
			}
		}else{
			echo 0;
		}
	}
	
	//注销
	public function loginOut()
	{
		Session::clear();
		//echo "<meta http-equiv=refresh content='0; url=/index/index/index'>";
		//header("Location:/index/index/index");
		$this->redirect('/index/index/index');		
	}
	//手机验证码
	public function signPhone()
	{
		$phone = new Phone();
		$phone->phoneReg();
	}
	//邮箱验证码
	public function signEmail()
	{
		$email = new Email();
		$email->emailReg();
	}
	public function doUsed()
	{
		$username = trim($_POST["user"]);
		$result = Db::name('user')->where('username',"$username")->select();
		if($result)
		{
		    echo 2;
		}
		else{
		    echo 8;
		}
	}
	//注册方法

	public function register()
	{
		//----------------------判断用户名--------------------
		if (empty($_POST['username'])) {
			echo 1;die;	
		}
		$username=trim($_POST['username']);
		$user = UserModel::get(['username'=>$username]);
		if (!empty($user)){
			echo 2;die;	
		}
		
		//-------------------选择验证方式----------------
		if (array_key_exists('phone', $_POST)) {
			if(empty($_POST['phone'])){
				echo 3;die;
			}
    		$phone = new Phone();
    		$phone->gain();
    		$data['tel'] = $_POST['phone'];
		}else if(array_key_exists('email', $_POST)){
			if(empty($_POST['email'])){
				echo 3;die;
			}
			$email = new Email();
			$email->card();
			$data['email'] = Cookie::get('toemail');
		}else{
			echo 3;die;
		}

		//-------------处理ip--------------------
		if ($_SERVER['REMOTE_ADDR']=='::1') {
			$data['uip'] = ip2long('127.0.0.1');
		} else {
			$data['uip'] = ip2long($_SERVER['REMOTE_ADDR']);
		}

		//---------------------把数据赋给data数组----------------------
		
		if (empty($_POST['passwd'])) {
			echo 6;die;
		}
		$data['username'] = trim($username);
		$data['password'] = md5(trim($_POST['passwd']));
		$result = UserModel::create($data);
		if ($result) {
			$arr = $result->toArray();
			$uid = $arr['id'];
			echo 7;
			Session::set('uid',$uid);
			Session::set('username',$data['username']);
			//$_SESSION['uid'] = $_POST['uid'];
		}
		echo 10;
	}
	//微博登录
	public function weibo()
	{
		$auth = new SaeTOAuthV2(WB_KEY,WB_SKC);
		$url = 'http://hotel.52git.cn/callback.php';
		$oauth = $auth->getAuthorizeURL($url);
		//header('Location: '.$oauth);
		$this->redirect($oauth);
	}
	
	public function userinfo()
	{
        $uid = Session::get('uid');
        /*$type = Room::get(['roomtype'=>1]);
        $first = $type->roomtype;*/
        $room = Db::name('room')->group('roomtype')->select();
        $user = Db::name('user')->where('id',$uid)->find();
        $this->assign('user',$user);
        $this->assign('room',$room);
        return $this->fetch();
	}

	public function log3rd()
	{
		define( 'APPID', '1545454173a186');	
		define( 'TOKEN', 'f135e629656417fe159e0de2f8c430a9');		

		$open = new open51094();
		$code = $_GET['code'];
		$log = $open->me($code);

        $this->assign('log',$log);


		$user = UserModel::get(['username'=>$log['uniq']]);
		if (empty($user))
		{
			if ($_SERVER['REMOTE_ADDR']=='::1') {
				$data['uip'] = ip2long('127.0.0.1');
			} else {
				$data['uip'] = ip2long($_SERVER['REMOTE_ADDR']);
			}
			$data['username'] = $log['uniq'];
			$data['password'] = md5('3rdlogin');
			$data['picture'] = $log['img'];
			$data['realyname'] = $log['name'];		

			$result = UserModel::create($data);

			if ($result) {
				$arr = $result->toArray();
				$uid = $arr['id'];
				Session::set('uid',$uid);
				Session::set('username',$data['username']);
			}
		}
		else
		{
			Session::set('uid',$user['id']);
			Session::set('username',$user['username']);
		}




        return $this->fetch();
	}


	


}
class open51094{


	private $appid;


	private $token;	


	private $return_uri;


	private $access_token;


	private $url = 'http://open.51094.com/user/auth.html';





	function __construct(){


		$this->appid = APPID;


		$this->token = TOKEN;


	}





	function me( $code ){


		#$this->getAccessToken();


		$params=array(


				'type'=>'get_user_info',


				'code'=>$code,


				'appid'=>$this->appid,


				'token'=>$this->token


			);


		return $this->http( $params );


	}





	/*private function getAccessToken(){


		if( !isset( $_SESSION['open_51094_access_token'] ) || empty( $_SESSION['open_51094_access_token'] ) ){


			$params = array(


					'type'=>'get_access_token',


					'appid'=>$this->appid,


					'token'=>$this->token


				);


			$ret = $this->http( $params );


			if( isset( $ret['access_token'] ) && !empty( $ret['access_token'] ) &&  32 == strlen( $ret['access_token'] ) ){


				$this->access_token = $ret['access_token'];


				$_SESSION['open_51094_access_token'] = $ret['access_token'];


			}else{


				exit('time out');


			}


		}else{


			$this->access_token = $_SESSION['open_51094_access_token'];


		}


	}*/





	private function http( $postfields='', $method='POST', $headers=array()){


		$ci=curl_init();


		curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, FALSE); 


		curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);


		curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 30);


		curl_setopt($ci, CURLOPT_TIMEOUT, 30);


		if($method=='POST'){


			curl_setopt($ci, CURLOPT_POST, TRUE);


			if($postfields!='')curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);


		}


		$headers[]="User-Agent: 51094PHP(open.51094.com)";


		curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);


		curl_setopt($ci, CURLOPT_URL, $this->url);


		$response=curl_exec($ci);


		curl_close($ci);


		$json_r=array();


		if(!empty( $response ))$json_r=json_decode($response, true);


		return $json_r;


	}
}
//用户手机注册类
class Phone
{
	//-------------手机验证码----------------
	public function gain()
	{
		
		//------------------判断手机验证码------------------
		if(CooKie::has('dx')){
			$gain = Cookie::get('dx');
			if($gain !== $_POST['yzm']){
				echo 5;die;
			}
		}else{
			return true;
		}
	}

	//手机验证
	public function phoneReg()
	{
		//-----------------检查手机号----------------------
		if(empty($_POST['phone'])){
			echo 3;die;
		}
		$phone=trim($_POST['phone']);
		$pattern = '/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/';
		if(!preg_match($pattern , $phone , $matches)){
			//$this->error('手机格式不正确','index.php?c=User&a=login');
			echo 4;die;	
		}

		/*Cookie::set('phone' , $phone ,time()+5*3600);*/
		$m = new Msg();
		/*if ($m) {
			echo 1; die;
		} else {
			echo 2; die;
		}*/

		$dx = $m->num;
		$result = $m->msg($phone);

		if($dx){
			Cookie::set('dx' , $dx ,time()+5*3600);
		}
		
	}
}

/**
     * tp5邮件
     * @param
     * @author staitc7 <31229627527@qq.com>
     * @return mixed
     */
/*class Email
{
	//----------------邮箱验证码-------------
	public function card() 
	{
		if(Cookie::has('str')){
			$str = Cookie::get('str');
			if($str !== $_POST['yzm']){
				echo 5;die;
			}
		}else{
			echo 5;die;
		}
    }
    //--------------邮箱验证-----------------
    public function emailReg()
    {
    	$toemail = trim($_POST['email']);
    	if(!empty($toemail)){
  			//$pattern = '/^\d{5,12}@[qQ][qQ]\.(com|cn)$/';
  			$pattern = "/[a-za-z0-9]+@[a-za-z0-9]+.[a-z]{2,4}/";
    		if (!preg_match($pattern , $toemail , $matches)) {
				echo 4;die;
			}
    	}
    	$name = '最佳酒店';
    	$subject='最佳酒店的邮箱验证';
    	$str = '1234567890';
    	$str = substr(str_shuffle($str),0,4);
    	Cookie::set('str' , $str ,time()+10*3600);
    	Cookie::set('toemail' , $toemail ,time()+10*3600);
    	$content='恭喜你，注册最佳酒店，您的验证为：'."$str";
    	send_mail($toemail,$name,$subject,$content);
    }
}
*/

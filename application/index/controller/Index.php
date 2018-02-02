<?php
namespace app\index\controller;

use app\index\model\Room;
use think\Controller;
use think\Db;
use think\Session;
use think\File;
class Index extends Controller
{
    //首页模板
    public function index()
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
    public function userInfo()
    {

        $realyname = input('realyname');
        if(empty($realyname)){
            return 1;
        }
        $tel = input('tel');
        if(empty($tel)){
            return 2;
        }
        $phone=trim($tel);
        $pattern = '/^0?(13[0-9]|15[012356789]|17[013678]|18[0-9]|14[57])[0-9]{8}$/';
        if(!preg_match($pattern , $phone , $matches)){
            //$this->error('手机格式不正确','index.php?c=User&a=login');
            return 3;
        }
        $email = input('email');
        if(empty($email)){
            return 2;
        }
        $toemail = trim($email);
        if(!empty($toemail)){
            //$pattern = '/^\d{5,12}@[qQ][qQ]\.(com|cn)$/';
            $pattern = "/[a-za-z0-9]+@[a-za-z0-9]+.[a-z]{2,4}/";
            if (!preg_match($pattern , $toemail , $matches)) {
                return 3;
            }
        }
        $usersfz = input('usersfz');
        if(empty($usersfz)){
            return 2;
        }

        $idCard = trim($usersfz);
        if(!empty($idCard)){
            $pattern = '/(^\d{15}$)|(^\d{17}([0-9]|X)$)/';
            if(!preg_match($pattern, $idCard,$matches)){
                return 3;
            }
        }

        $uid = Session::get('uid');
        $result = Db::name('user')->where('id',$uid)->update(['realyname'=>$realyname,'usersfz'=>$idCard,'tel'=>$phone,'email'=>$toemail]);
        if($result){
            return 4;
        }
    }
    //上传头像
    public function upload(){
        $uid = Session::get('uid');
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('image');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
        $path = '\uploads'.'\\'.$info->getSaveName();
        }else{
        // 上传失败获取错误信息
        echo $file->getError();
        }
        $data['picture'] = $path;
        $result = Db::name('user')->where('id',$uid)->update(['picture'=>$path]);
        if($result){
            $this->redirect('/index/index/index');
        }else{
            $this->redirect('/index/index/index');
        }
    }
    //充值
    //进行充值
    public function addMoney()
    {
        $uid = Session::get('uid');
        $money = trim(input('money'));
        $data = Db::name('user')->where('id',$uid)->find();
        $newMoney = $money + $data['u_money'];
        $result = Db::name('user')->where('id',$uid)->update(['u_money'=>$newMoney]);
        if($result){
            return 1;
        }else{
            return false;
        }
    } 
}

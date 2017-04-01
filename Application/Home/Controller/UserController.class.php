<?php 
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller {
 //    public function index(){
	// echo "user";
 //    }
    // 数据库添加
    public function add(){
	$User = M('User');
	$data['name']=$_POST['name'];
    $data['pwd']=$_POST['pwd'];
    $data['pwd2']=$_POST['pwd2'];
    $data['email']=$_POST['email'];
    $data['tel']=$_POST['tel'];
    $User->add($data);
    echo "注册成功,3秒后跳转登录页";
    }
    //检测用户名是否存在
    public function selectName(){
        
    
    $User = M('User');
    $data['name']=$_POST['name'];
    $name=$User->WHERE($data)->select();
    if($name!=""){
      echo 1;
    }else{
      echo 0;
    }
    }
    //检测用户名密码是否一致
    public function selectPwd(){
    // session_start();
    // $_SESSION['username'] = $_POST['name']; php原生session方法
    $User = M('User');
    $data['name']=$_POST['name'];
    session('username',$_POST['name']);//thinkphp方法获取用户登录名
    $data['pwd']=$_POST['pwd'];
    $name=$User->WHERE($data)->select();
    if($name!=""){
      echo 0;
    }else{
      echo 1;
    }
    }



    // 数据库更改
    public function update(){
	$User = M('User');
	$map['id']=1;
	$data['user']='dasdas';
    $User->WHERE($map)->save($data);
    }
    // 删除数据
    public function delete(){
    	$User = M('User');
    	$User->delete(20);
    }
}
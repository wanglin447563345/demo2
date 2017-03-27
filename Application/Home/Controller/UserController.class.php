<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller {
    public function index(){
	echo "user";
    }
    // 数据库添加
    public function add(){
	$User = M('User');
	$data['user']=$_POST['name'];
	$data['pwd']=$_POST['pwd'];
	$data['email']=$_POST['email'];
    $User->add($data);
    }
    数据库更改
    public function update(){
	$User = M('User');
	$map['id']=1;
	$data['user']='dasdas';
    $User->WHERE($map)->save($data);
    }
 //    public function update(){
	// $User = M('User');
	// $data['id']=1;
	// $data['user']='2222';
 //    $User->save($data);
 //    }
    // 删除数据
    public function delete(){
    	$User = M('User');
    	$User->delete(20);
    }
}
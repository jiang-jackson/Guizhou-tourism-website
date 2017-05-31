<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class LoginController extends Controller
{
	
	public function register(){
		$this->display("Login:register");
	}

	//注册验证码
	public function rand(){
		  // echo rand(1000,9999);
// 生成四位数的随机数
$a = range(a,z);
$b = range(0,9);
for ($i=0; $i < 10; $i++) {
   // echo $a[rand(0,25)];
array_push($a,$b[$i]);//给数组添加元素
	# code...
}
// print_r($a);
$str = '';
for ($j=0; $j < 4 ; $j++) { 
	$str .= $a[rand(0,35)];
	// echo($str);
	# code...
	// $str1 = $a[rand(0,35)];
	// $str = $str1.$str1;
}
// session_start();//启用会话系统
//setcookie('name',$str,time()+60);//存储session
cookie('name',$str,60);
// 图像处理
header("content-type:image/png");
$img = imagecreatetruecolor(50, 20);
$blue = imagecolorallocate($img, 0, 0, 255);
imagefill($img, 0, 0, $blue);
$red = imagecolorallocate($img, 255, 0, 0);
$red1 = imagecolorallocate($img, 250, 123, 0);
$red2 = imagecolorallocate($img, 255, 90, 200);
$red3 = imagecolorallocate($img, 2, 155, 80);
imageline($img, 0, 15, 50, 20, $red);
imageline($img, 20, 50, 15, 0, $red1);
imageline($img, 17, 39, 50, 20, $red2);
imageline($img, 20, 40, 40, 10, $red3);
$green = imagecolorallocate($img, 0, 255, 0);
imagestring($img, 5, 4, 0, $str, $green);
imagepng($img);
imagedestroy($img);
$this->ajaxReturn(123);
	}
public function login(){
		$this->display("Login:login");
	}
	// 退出
  public function tuichu(){
    session('username',null);
    $this->display("Login:login");

    
  }
}
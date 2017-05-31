<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class FormController extends Controller
{
	// 网站表单注册处理
	public function registerdeal(){
		   $userdata = array();
           $username = I("post.username");
           $password = I("post.password");
           $confirmpassword = I("post.confirmpassword");
           $email = I("post.email");
            $usersHandle = M("users");
            $yanzhengma = I("post.yanzhengma");
            $coy = cookie("name");
            if ($coy=="") {
            	echo "<script>alert('验证码过期');history.go(-1);</script>";
            }else{

            if ($yanzhengma!=$coy) {
            	echo "<script>alert('验证码错误');history.go(-1);</script>";
            }else{

           if (preg_match("/^[a-zA-Z]\w{5,17}$/",$password) && preg_match("/^[A-Za-z0-9]+([-_.][A-Za-z0-9]+)*@([A-Za-z0-9]+[-.])+[A-Za-z0-9]{2,5}$/",$email)) {
           	      if ($password != $confirmpassword) {
           	      	//$this->ajaxReturn(0);
           	      	echo "<script>alert('两次密码不一样');history.go(-1);</script>";
           	      
           	      }else{
           	      	  $users = $usersHandle->where("username='$username'")->find();//查找数据库中是否有
           	      	if (count($users) != 0) {
           	      		# code...
           	      		//$this->ajaxReturn(1);
           	      		echo "<script>alert('此用户名已存在');history.go(-1);</script>";
           	      	}else{
           	      		$userdata['username'] = $username;
           	      	    $userdata['password'] = $password;
           	      	    $userdata['email'] = $email;
           	      	    $usersHandle->add($userdata);
           	      	    $this->display("Login:login");

           	      	}
           	      }
           	     
           	# code...
           }else{
           	echo "<script>alert('格式不正确');history.go(-1);</script>";
           } 

           }//验证码 
          }//验证码过期     
	}
	

	public function logindeal(){
		$username = I("post.username");
           $password = I("post.password");
           $usersHandle = M("users");
           $user = $usersHandle->where("username='$username'")->find();
           if (count($user) != 0) {
           	# code...
           	$pass = $user['password'];

           	if ($password == $pass) {
           		# code...
           		session("username",$user);//保存登录用户的信息
           		//查找景点 并显示
           		// $jingdian = M("jingdian");
    	        // $jingdians = $jingdian->limit(8)->select();
    	        // $this->assign("jingdians",$jingdians);
           		// $this->display("Index:index");
               echo "<script>window.open('/tpg/Home/Message/message','_parent');</script>";//打开新的窗口
           	}else{
           		echo "<script>alert('密码错误');history.go(-1);</script>";
           	}
           }else{
           	 echo "<script>alert('你还未注册');history.go(-1);</script>";
           }
	}

	//留言区处理
	public function messagedeal(){
		$messageHandle = M('message');
		   $messageArray = array();
		   $name = I("post.name");
           $email = I("post.email");
           $message = I("post.message");
           $username = session("username");
           $u = $username["username"];
           if ($email!=''&& $name==$u&&$message!='') {
           	
		      if($username==""){
			  echo "<script>alert('请先登录，才能留言');</script>";
			  $this->display("Login:login");
		       }else{
			        # code...
           	      $messageArray["message_fromname"] = $name;
                  $messageArray["message_fromemail"] = $email;
                  $messageArray["message_content"] = $message;
                  $messageHandle->add($messageArray);//将数据添加到数据库中
                  echo "<script>window.open('/tpg/Home/Message/message','_parent');</script>";//打开新的窗口
		      }
           	
             
           }else{
           	 echo "<script>alert('未注册或未登录');history.go(-1);</script>";

           }

	}
//修改密码
  public function forget(){
    $userdata = array();
           $username = I("post.username");
           $password = I("post.password");
           $confirmpassword = I("post.conpassword");
           $email = I("post.fogetemail");
           $usersHandle = M("users");
           if ($password!=$confirmpassword) {
             # code...
            echo "<script>alert('两次密码不一致');history.go(-1);</script>";
           }else{

           $u = $usersHandle->where("username='$username'")->find();
           $e = $u['email'];
          
           if ($email==$e) {
             // 要修改的数据对象属性赋值
             $userdata['password'] = $password;
             $id = $u['id'];

             $us = $usersHandle->where("id='$id'")->save($userdata); // 根据条件更新记录
             if ($us) {
               # code...
              echo "<script>alert('密码修改成功，请登录！！');window.open('/tpg/home/Login/login','_parent');</script>";
             }else{
              echo "<script>alert('密码修改失败！！');history.go(-1);</script>";
             }
             

           }else{
              echo "<script>alert('用户名与邮箱不一致');history.go(-1);</script>";
           }


           }

         

         

  }
  
}
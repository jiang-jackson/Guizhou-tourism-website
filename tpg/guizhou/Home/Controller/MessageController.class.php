<?php
namespace Home\Controller;
use Think\Controller;

/**
* 
*/
class MessageController extends Controller
{
	
	public function message(){
		$hotelHandle = M('jiudian');
		$hotelps = $hotelHandle->order("jiudian_id desc")->select();
		$this->assign("hotelps",$hotelps);

		// 、、景点
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->order("jingdian_id desc")->limit(3)->select();
		$this->assign("jingdians",$jingdians);

		//留言
		//$messageH = M('message');
		//$messages = $messageH->select();
		//$this->assign("messages",$messages);
		$this->paging();
		$username = session("username");
		if($username==""){
			 echo "<script>alert('请先登录，才能留言');history.go(-1);</script>";
			
		}else{
			$this->assign("username",$username);
			$this->display("Message:message");
		}

	
	}
	public function messageY(){
		$username = session("username");
		$name = $username["username"];
		if ($name=="") {
			# code...
			$this->ajaxReturn(1);
		}else{
			$this->ajaxReturn($name);
		}
	}

	 //分页的私有函数
    private function paging(){
    	$messageH = M('message');// 实例化User对象
        $count      = $messageH->count();// 查询满足要求的总记录数
       $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
     $show       = $Page->show();// 分页显示输出
    
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = $messageH->order("message_id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
       $this->assign('lists',$list);// 赋值数据集
       
       $this->assign('page',$show);// 赋值分页输出
      

    }
}
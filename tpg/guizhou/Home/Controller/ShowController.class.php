<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class ShowController extends Controller
{
	public function showjingdian(){
		// session("username",null);
		$jingdianId = I("get.id",6);
		session("jingdianId",$jingdianId);
		
         $this->showj();
		$this->display("Show:showjingdian");
	}

	public function pinglundeal(){
		$data = array();
		$pinglunHandle = M("pinglun");
		$jingdianId = session("jingdianId");
		$username = session('username')['username'];
          // 如果已经登录了 则可以评论
		if ($username == '') {
			# code...
			$this->showj();
			$this->display("Show:showjingdian");

			

		}else{
			$content = I("post.content");
			$data['jingdian_id'] = $jingdianId;
			$data['username'] = $username;
			$data['pinglun_content'] = $content;
			if ($content != '') {
				$pinglunHandle->add($data);
				$this->showj();
				$this->display("Show:showjingdian");

				# code...
			}else{
				$this->showj();
				$this->display("Show:showjingdian");

			}
			
		}

	}
	public function pinglunajax(){
		$username = session('username')['username'];
          // 如果已经登录了 则可以评论
		if ($username == '') {
			# code...

			$this->ajaxReturn(0);

		}else{
			$this->ajaxReturn(1);
		}
	}
	
	// 私有函数 拿数据中的数据
	private function showj(){
		$jingdianId = session("jingdianId");
		// 、、景点
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->where("jingdian_id='$jingdianId'")->find();
		$this->assign("jingdians",$jingdians);
		// 推荐
		$tuijian = $jingdianHandle->order("jingdian_id desc")->find();
		$this->assign("tuijian",$tuijian);
		// 评论
		$pinglunHandle = M('pinglun');
		$pingluns=$pinglunHandle->where("jingdian_id='$jingdianId'")->select();
		$this->assign("pingluns",$pingluns);
		
	}


	// 线路函数处理数据
	public function showxianlu(){
		$xianluId = I("get.id",1);
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->limit(10)->select();
		$this->assign('jingdians',$jingdians);
		// 线路
		$xianluHandle = M('xianlu');
		$xianlu = $xianluHandle->where("xianlu_id='$xianluId'")->find();
		$this->assign('xianlu',$xianlu);
		// echo $xianluId;
		$this->display("Show:showxianlu");
	}



	// 查看更多
	public function more(){
		$jingdianHandle = M('jingdian');
		$xianluHandle = M('xianlu');
		$arbi = I('get.name');
		// print_r($jingdian);
		if ($arbi == 'jingdian' ) {
			# code...
			$jingdians = $jingdianHandle->select();
		    $this->assign('jingdians',$jingdians);
		}else if($arbi=='xianlu'){
                $xianlus = $xianluHandle->select();
                $this->assign("xianlus",$xianlus);
          }
		
		$this->display("Show:more");
		
	}


	// 酒店详情
	public function showhotel(){

		$hotelId = I("get.id",2);
		// 酒店
		$jiudianHandle = M('jiudian');
		$hotels = $jiudianHandle->where("jiudian_id='$hotelId'")->find();
		$this->assign('hotel',$hotels);

		$hs = $jiudianHandle->order("jiudian_id desc")->limit(0,1)->find();
		$this->assign('hs',$hs);

		// 、、景点
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->order("jingdian_id desc")->limit(3)->select();
		$this->assign("jingdians",$jingdians);

		$this->display('Show:showhotel');
	}

	//美食详情
	public function showcate(){
		$cateId = I("get.id",8);
		$meishiHandle = M("meishi");
		$cate = $meishiHandle->where("id='$cateId'")->find();
		$this->assign("cate",$cate);

		// 、、景点
		$jingdianHandle = M('jingdian');
		$jingdians = $jingdianHandle->order("jingdian_id desc")->limit(3)->select();
		$this->assign("jingdians",$jingdians);
		//线路函数处理数据

		$xianluHandle = M('xianlu');
		$xianlu = $xianluHandle->limit(5)->select();
		$this->assign('xianlus',$xianlu);

		// 酒店
		$jiudianHandle = M('jiudian');
		$hotels = $jiudianHandle->limit(3)->select();
		$this->assign('hotels',$hotels);



		$this->display("Show:showcate");
	}
	
}
<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
// use Home\IndexController;
/**
* 
*/
class AdminformController extends Controller
{

	// 管理员注册处理
	public function adminzhucedeal(){
		$data = array();
		$adminusers = M("adminuers");
        $adminemail = I("post.adminemail");
        $adminpassword = I("post.adminpassword");
        $confirepassword = I("post.confirepassword");
        //session("conpas",$confirepassword);
        //session("admpas",$adminpassword);
        if (preg_match("/^[A-Za-z0-9]+([-_.][A-Za-z0-9]+)*@([A-Za-z0-9]+[-.])+[A-Za-z0-9]{2,5}$/", $adminemail)) {
        	# code...
        	$data["adminemail"] = $adminemail;
        	$data["adminpassword"] = $adminpassword;
        	if($data != ''){
        		$adminusers->add($data);

        	}
        	$this->display("Index:index");
        }else{
             $this->display("Index:adminzhuce");
        }
	}
	//验证两次输入的密码是否相同
	
	// 管理员登录处理
	public function indexdeal(){
        $adminusers = M("adminuers");
        $adminemail = I("post.adminemail");
        $adminpassword = I("post.adminpassword");
        $ad = $adminusers->where("adminemail='$adminemail'")->find();
        $ads = $adminusers->select();
        //如果有
        if(count($ad) != 0){
        	$adminpass = $ad['adminpassword'];
        	if($adminpass != $adminpassword){
        		echo "<script>alert('密码错误');history.go(-1);</script>";
        	}else{
        		session("adminuser",$ad);
        		$this->assign("adminuser",$ad);
        		$this->assign("adminusers",$ads);
        		$this->display("Index:adminindex");
        	}

        }else{
        	echo "<script>alert('你还不是管理员');history.go(-1);</script>";
        }
	}
	// 删除用户
	public function deleteuser(){
		$userHandle = M("users");
		$userId = I("get.id");
		$userHandle->where("id='$userId'")->delete();
		$jingdianf = new IndexController();
			$jingdianf->admintables();
	}
	// 风景表单处理 添加
	public function jingdiandeal(){
		$url = $this->isupload();
		$data = array();
		$data['jingdian_name'] = I("post.jingdian_name");
		$data['jingdian_site'] = I("post.jingdian_site");
		$data['jingdian_price'] = I("post.jingdian_price");
		$data['jingdian_trait'] = I("post.jingdian_trait");
		$data['jingdian_image'] = $url;
		$data['jingdian_content'] = I("post.jingdian_content");
		$jingdianf = new IndexController();
		// print_r($data);
		if ($data != '') {
			$jingdian = M("jingdian");
			$jingdian->add($data);
            
            $jingdianf->admintables();
            // $this->display("Index:admintables");
			# code...
		}else{
            $jingdianf->adminform();
		}
		

	}
	// 风景表单处理 删除
	public function jingdianremove(){
		$jingdianId = I("get.id");
		$jingdian = M("jingdian");
		$s = $jingdian->where("jingdian_id='$jingdianId'")->delete();
		// if ($s!='') {
			$jingdianf = new IndexController();
			$jingdianf->admintables();
			# code...
		// }
	}
	// 删除评论内容
	public function deletepinglun(){
		$pinglunHandle = M("pinglun");
		$pinglunId = I("get.id");
		$pinglunHandle->where("pinglun_id='$pinglunId'")->delete();
		$jingdianf = new IndexController();
			$jingdianf->admintables();
	}

	// 删除留言内容
	public function deletemessage(){
		$messageHandle = M("message");
		$messageId = I("get.id");
		$messageHandle->where("message_id='$messageId'")->delete();
		$jingdianf = new IndexController();
			$jingdianf->admintables();
	}

	// 美食处理表单 添加
	public function meishideal(){
		$url = $this->isupload();
		$data = array();
		$name = I("post.meishi_name");
		$price = I("post.meishi_price");
		$site = I("post.meishi_site");
		$image = $url;
		$content = I("post.meishi_content");
		$data['meishi_name'] = $name;
		$data['meishi_price'] = $price;
		$data['meishi_site'] = $site;
		$data['meishi_image'] = $image;
		$data['meishi_content'] = $content;
		$jingdianf = new IndexController();
		// print_r($data);
		if ($data != '') {
			$meishi = M('meishi');
			$meishi->add($data);

			$jingdianf->admintables();
			# code...
		}else{
			$jingdianf->adminform();
		}
	}

	// 美食处理表单 删除
	public function meishiremove(){
		$meishiId = I("get.id");
		$meishis = M("meishi");
		$m = $meishis->where("id='$meishiId'")->delete();
		// if ($s!='') {
			$jingdianf = new IndexController();
			$jingdianf->admintables();
			# code...
		// }
	}
    //线路处理函数 添加
	public function xianludeal(){
		$url = $this->isupload();
		$data = array();
		$name = I("post.xianlu_name");
		$content = I("post.xianlu_content");
		$price = I("post.xianlu_price");
		$reason = I("post.xianlu_reason");
		$image = $url;
		
		$data['xianlu_name'] = $name;
		$data['xianlu_price'] = $price;
		$data['xianlu_reason'] = $reason;
		$data['xianlu_image'] = $image;
		$data['xianlu_content'] = $content;
		$jingdianf = new IndexController();
		
		if ($data != '') {
			$meishi = M('xianlu');
			$meishi->add($data);

			$jingdianf->admintables();
			# code...
		}else{
			$jingdianf->adminform();
		}
	}
	//线路处理函数 删除
	public function xianluremove(){
		$xianluId = I("get.id");
		$xianlus = M("xianlu");
		$m = $xianlus->where("xianlu_id='$xianluId'")->delete();
		// if ($s!='') {
			$jingdianf = new IndexController();
			$jingdianf->admintables();
			# code...
		// }
	}


	//酒店处理函数 添加
	public function jiudiandeal(){
		$url = $this->isupload();
		$data = array();
		$name = I("post.jiudian_name");
		$content = I("post.jiudian_content");
		$price = I("post.jiudian_price");
		$tel = I("post.jiudian_tel");
		$star = I("post.jiudian_star");
		$site = I("post.jiudian_site");
		$image = $url;
		
		$data['jiudian_name'] = $name;
		$data['jiudian_price'] = $price;
		$data['jiudian_tel'] = $tel;
		$data['jiudian_image'] = $image;
		$data['jiudian_content'] = $content;
		$data['jiudian_star'] = $star;
		$data['jiudian_site'] = $site;
		$jingdianf = new IndexController();
		//print_r($data);
		if ($data != '') {
			$jiudian = M('jiudian');
			$jiudian->add($data);

			$jingdianf->admintables();
			# code...
		}else{
			$jingdianf->adminform();
		}
	}
	//酒店处理函数 删除
	public function jiudianremove(){
		$jiudianId = I("get.id");
		$jiudians = M("jiudian");
		$m = $jiudians->where("jiudian_id='$jiudianId'")->delete();
		// if ($s!='') {
			$jingdianf = new IndexController();
			$jingdianf->admintables();
			# code...
		// }
	}
	// 文件上传的私有函数
	private function isupload(){
		 $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './'; // 设置附件上传根目录
        $upload->savePath  =     '/upload/'; // 设置附件上传（子）目录
    // 上传文件 
       $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        //$this->error($upload->getError());
    }else{// 上传成功
         foreach($info as $file){
        $imageurl = "/tpg".$file['savepath'].$file['savename'];
      }
    }
     return $imageurl;
	}

//管理员退出处理函数
	public function adminout(){
		session("adminuser",null);
		echo "<script>window.open('/tpg/admin.php','_parent');</script>";//打开新的窗口
	}



	//美食修改控制器
	public function meishiupdate(){
		$meishiId = I('get.id');
		$meishiHandle = M('meishi');
		$meishis = $meishiHandle->where("id='$meishiId'")->find();
		session('meishis',$meishis);
		$jingdianf = new IndexController();
	    $jingdianf->adminupdate();	

	}
	//美食修改执行控制器
	public function meishiupdate1(){
		$meishiId = I('get.id');
		$meishiHandle = M('meishi');
		//美食修改
	    $url = $this->isupload();
		$data = array();
		$name = I("post.meishi_name");
		$price = I("post.meishi_price");
		$site = I("post.meishi_site");
		if ($url=='') {
			# code...
			
		}else{
		   $image = $url;
		   $data['meishi_image'] = $image;
		}
		$content = I("post.meishi_content");
		$data['meishi_name'] = $name;
		$data['meishi_price'] = $price;
		$data['meishi_site'] = $site;
		
		$data['meishi_content'] = $content;
		$jingdianf = new IndexController();
		// print_r($data);
		if ($data != '') {
			
			$meishiHandle->where("id='$meishiId'")->save($data);
		

			$jingdianf->admintables();
			# code...
		}else{
			$jingdianf->adminupdate();
		}
	}



	//景点修改控制器
	public function jingdianupdate(){
		$jingdianId = I('get.id');
		$jingdianHandle = M('jingdian');
		$jingdian = $jingdianHandle->where("jingdian_id='$jingdianId'")->find();

		session('jingdian',$jingdian);
		$jingdianf = new IndexController();
	    $jingdianf->jingupdate();	

	}
	//景点修改执行控制器
	public function jingdianupdate1(){
		$jingdianId = I('get.id');
		$jingdianHandle = M('jingdian');
		//美食修改
	   $url = $this->isupload();
		$data = array();
		$data['jingdian_name'] = I("post.jingdian_name");
		$data['jingdian_site'] = I("post.jingdian_site");
		$data['jingdian_price'] = I("post.jingdian_price");
		$data['jingdian_trait'] = I("post.jingdian_trait");
		if ($url=='') {
			# code...
		}else{
			$data['jingdian_image'] = $url;
		}
		$data['jingdian_content'] = I("post.jingdian_content");
		$jingdianf = new IndexController();
		// print_r($data);
		if ($data != '') {
			
			$jingdianHandle->where("jingdian_id='$jingdianId'")->save($data);
            
            $jingdianf->admintables();
            // $this->display("Index:admintables");
			# code...
		}else{
            $jingdianf->jingupdate();
		}
	}
		
		
	
}
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 网站后台登录
    public function index(){
        $this->display("Index:index");
    }
    // 网站后台管理首页
    public function adminindex(){
        $this->showadmin();
        $adminHandle = M('adminuers');
        $adminuers = $adminHandle->select();
        $this->assign("adminusers",$adminuers);
    	$this->display("Index:adminindex");
    }
    //网站后台管理表格
    public function admintables(){
        //景点
    	$jingdian = M("jingdian");
    	$jingdians = $jingdian->select();
    	$this->assign("jingdians",$jingdians);
        //用户
        $usersHandle = M("users");
        $users = $usersHandle->select();
        $this->assign("users",$users);
        // 美食
        $meishiHandle = M('meishi');
        $meishis = $meishiHandle->select();
        $this->assign("meishis",$meishis);
        //线路展现
        $xianluHandle = M('xianlu');
        $xianlus = $xianluHandle->select();
        $this->assign("xianlus",$xianlus);
        //酒店
        $jiudianHandle = M('jiudian');
        $jiudians = $jiudianHandle->select();
        $this->assign("jiudians",$jiudians);

         //评论
        $pinglunHandle = M('pinglun');
        $pinglun = $pinglunHandle->select();
        $pingluns = $this->addcom($pinglun);
        $this->assign("pingluns",$pingluns);

         //留言
        $messageHandle = M('message');
        $messages = $messageHandle->select();
        $this->assign("messages",$messages);
        $this->showadmin();
    	$this->display("Index:admintables");
    }

  
	private function addcom($pinglun){
		$big = array();
		foreach ($pinglun as $key => $value) {
			# code...
			$small = array();
			$small['pinglun_id'] = $value['pinglun_id'];
			$small['username'] = $value['username'];
			$small['pinglun_content'] = $value['pinglun_content'];
			$small['pinglun_birth'] = $value['pinglun_birth'];
			$jingdianId = $value['jingdian_id'];
			$jingdianhandle = M("jingdian");
			$users = $jingdianhandle->where("jingdian_id='$jingdianId'")->find();
			$small['jingdian_name'] = $users['jingdian_name'];
			$small['jingdian_image'] = $users['jingdian_image'];
			$big[count($big)] = $small;
		}
		return $big;
	}


    //网站后台管理表单
    public function adminform(){
        $this->showadmin();

    	$this->display("Index:adminform");
    }
    //网站后台管理日志
    public function admincalendar(){
        $this->showadmin();
    	$this->display("Index:admincalendar");
    }
    //angular请求的数据
      public function pageimg(){
    	$User = M('jingdian');
    	$jingdians = $User->select();
    	$this->ajaxReturn($jingdians,'JSON');//转换成JSON数据,并返回出去
    }
    //网站后台管理文字列表
    public function admintablelist(){



   $this->paging();





        $this->showadmin();
    	$this->display("Index:admintablelist");
    }
    //网站后台管理图文列表
    public function admintableimg(){
    	$this->paging();
        $this->showadmin();
    	$this->display("Index:admintableimg");
    }
    //分页的私有函数
    private function paging(){
    	 $User = M('jingdian'); // 实例化User对象
        $count      = $User->count();// 查询满足要求的总记录数
       $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(10)
     $show       = $Page->show();// 分页显示输出
    
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
      $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
       $this->assign('list',$list);// 赋值数据集
       $this->assign('page',$show);// 赋值分页输出
      

    }

    //网站后管理注册
    public function adminzhuce(){
        $this->showadmin();
    	$this->display("Index:adminzhuce");
    }
    // 错误页面
    public function adminerror(){
        $this->showadmin();
    	$this->display("Index:adminerror");
    }
    private function showadmin(){
        $ad = session("adminuser");
        $this->assign("adminuser",$ad);
    }

     // 修改页面
    //美食修改
    public function adminupdate(){
        $this->showadmin();
        $meishis=session('meishis');
        $this->assign('meishis',$meishis);
    	$this->display("Index:adminupdate");
    }
     //景点修改
    public function jingupdate(){
        $this->showadmin();
        $jingdian=session('jingdian');
        $this->assign('jingdian',$jingdian);
    	$this->display("Index:jingupdate");
    }

}
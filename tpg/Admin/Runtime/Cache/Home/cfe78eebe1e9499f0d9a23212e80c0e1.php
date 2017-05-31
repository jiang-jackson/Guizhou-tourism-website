<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>贵州旅游网站后台</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/tpg/Public/admin/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/tpg/Public/admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/tpg/Public/admin/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/tpg/Public/admin/css/app.css">
    <script src="/tpg/Public/admin/js/jquery.min.js"></script>

</head>

<body data-type="index">
    <script src="/tpg/Public/admin/js/theme.js"></script>
    <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="/tpg/"><img src="/tpg/Public/admin/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span><?php echo ($adminuser["adminemail"]); ?></span> </a>
                        </li>

                      
                        

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="/tpg/admin.php/home/Adminform/adminout">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/tpg/Public/admin/img/logo.jpg" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              张江设计制作
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>
                <li class="sidebar-nav-link">
                    <a href="/tpg/admin.php/home/index/adminindex" class="active">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="/tpg/admin.php/home/index/admintables">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 表格
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="/tpg/admin.php/home/index/admincalendar">
                        <i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="/tpg/admin.php/home/index/adminform">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

                    </a>
                </li>
                
                <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> 数据列表
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/tpg/admin.php/home/index/admintablelist">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文字列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/tpg/admin.php/home/index/admintableimg">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 图文列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="/tpg/admin.php/home/index/adminzhuce">
                        <i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
                        <span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
                    </a>
                </li>
                
                

            </ul>
        </div>


 <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 表单 <small>贵州旅游</small></div>
                        <p class="page-header-description"></p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">景点添加表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/tpg/admin.php/home/Adminform/jingdiandeal" method="post" enctype="multipart/form-data">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">景点名称 <span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="jingdian_name" required="required">
                                            <small>请填写标题文字1-20字左右。</small>
                                        </div>
                                    </div>

                                    
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">所在地区 <span class="tpl-form-line-small-title">Area</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入城市" name="jingdian_site" required="required">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">门票价格 <span class="tpl-form-line-small-title">Price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="价格" name="jingdian_price" required="required">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">景点特色 <span class="tpl-form-line-small-title">Trait</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入文字" name="jingdian_trait" required="required">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加景点封面图片</button>
                                                <input id="doc-form-file" type="file" multiple="" name="jingdin_image" required="required">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">添加分类 <span class="tpl-form-line-small-title">Type</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="请添加分类用点号隔开" required="required">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">景点介绍</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容" name="jingdian_content" required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 


                 <!-- 美食添加表单 -->
                  <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">美食添加表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/tpg/admin.php/home/Adminform/meishideal" method="post" enctype="multipart/form-data">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">美食名称 <span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入美食名称" name="meishi_name" required/>
                                            <small>请填写标题文字1-20字左右。</small>
                                        </div>
                                    </div>



                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">美食价格 <span class="tpl-form-line-small-title">Price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入数字+元" name="meishi_price">
                                        </div>
                                    </div>


                                    
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">所在地区 <span class="tpl-form-line-small-title">Area</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入城市" name="meishi_site" required/>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加美食封面图片</button>
                                                <input id="doc-form-file" type="file" multiple="" name="meishi_image" required/>
                                            </div>

                                        </div>
                                    </div>

                                    

                                    

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">美食介绍</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入内容" name="meishi_content" required/></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">美食提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                  

                  <!-- 线路的添加表单 -->
                   <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">线路添加表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/tpg/admin.php/home/Adminform/xianludeal" method="post" enctype="multipart/form-data">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">线路名称 <span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入线路名称" name="xianlu_name" required>
                                            <small>请填写标题文字1-20字左右。</small>
                                        </div>
                                    </div>

                                    
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">线路展现 <span class="tpl-form-line-small-title">Content</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" placeholder="请输入线路" name="xianlu_content" required>
                                        </div>
                                    </div>

                                     <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">价格 <span class="tpl-form-line-small-title">Price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="" name="xianlu_price" required>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加封面图片</button>
                                                <input id="doc-form-file" type="file" multiple="" name="xianlu_image" required>
                                            </div>

                                        </div>
                                    </div>

                    
                                    

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">推荐理由</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入推荐的理由" name="xianlu_reason" required></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">线路提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 
                 <!-- 酒店表单 -->
                 <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">酒店添加表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-line-form" action="/tpg/admin.php/home/Adminform/jiudiandeal" method="post" enctype="multipart/form-data">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">酒店名称 <span class="tpl-form-line-small-title">Name</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="请输入标题文字" name="jiudian_name" required>
                                            <small>请填写标题文字1-20字左右。</small>
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">酒店价格 <span class="tpl-form-line-small-title">Price</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入酒店价格" name="jiudian_price" required>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">酒店链接 <span class="tpl-form-line-small-title">Tel</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入酒店链接" name="jiudian_tel" required>
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">所在地区 <span class="tpl-form-line-small-title">Area</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" placeholder="输入城市" name="jiudian_site">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    <i class="am-icon-cloud-upload"></i> 添加酒店封面图片</button>
                                                <input id="doc-form-file" type="file" multiple="" name="jiudian_image">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">酒店星级 <span class="tpl-form-line-small-title">Star</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="酒店星级" name="jiudian_star">
                                            <div>

                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">酒店简介</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" id="user-intro" placeholder="请输入内容" name="jiudian_content"></textarea>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">酒店信息提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


               
                

            </div>
        </div>
    </div>
    </div>
    <script src="/tpg/Public/admin/js/amazeui.min.js"></script>
    <script src="/tpg/Public/admin/js/amazeui.datatables.min.js"></script>
    <script src="/tpg/Public/admin/dataTables.responsive.min.js"></script>
    <script src="/tpg/Public/admin/js/app.js"></script>

</body>

</html>
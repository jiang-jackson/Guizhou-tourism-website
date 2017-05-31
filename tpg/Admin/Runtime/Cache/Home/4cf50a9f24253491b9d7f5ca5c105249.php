<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 表格 <small>贵州旅游网站</small></div>
                        <p class="page-header-description"></p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">


                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">景点列表</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">
                                <div class="am-scrollable-horizontal ">
                                    <table width="600" class="am-table am-table-compact am-text-nowrap tpl-table-black " id="example-r" border="1">
                                        <thead>
                                            <tr>
                                                <th>编号</th>
                                                <th>景点名称</th>
                                                <th>门票</th>
                                                <th>景点特色</th>
                                                <th>景点图片</th>
                                                <th>景点介绍</th>
                                                <th>添加时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($jingdians)): $i = 0; $__LIST__ = $jingdians;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jingdian): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                                <td><?php echo ($i); ?></td>
                                                <td><?php echo ($jingdian["jingdian_name"]); ?></td>
                                                <td><?php echo ($jingdian["jingdian_price"]); ?></td>
                                                <td><?php echo ($jingdian["jingdian_trait"]); ?></td>
                                                <td><img src="<?php echo ($jingdian["jingdian_image"]); ?>" alt="" class="am-img-responsive"></td>
                                                <td><p><?php echo ($jingdian["jingdian_content"]); ?></p></td>
                                                <td><?php echo ($jingdian["jingdian_birth"]); ?></td>
                                                <td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="/tpg/admin.php/home/Adminform/jingdianupdate?id=<?php echo ($jingdian["jingdian_id"]); ?>">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="/tpg/admin.php/home/Adminform/jingdianremove?id=<?php echo ($jingdian["jingdian_id"]); ?>" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                            
                                           
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>




                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户表格</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>用户名</th>
                                            <th>密码</th>
                                            <th>邮箱</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($user["username"]); ?></td>
                                            <td><?php echo ($user["password"]); ?></td>
                                            <td><?php echo ($user["email"]); ?></td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="/tpg/admin.php/home/Adminform/deleteuser?id=<?php echo ($user["id"]); ?>" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                       
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                       <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">评论列表</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>评论者</th>
                                            <th>景点名</th>
                                            <th>景点缩略图</th>
                                            <th>评论内容</th>
                                             <th>评论时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($pingluns)): $i = 0; $__LIST__ = $pingluns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pinglun): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($pinglun["username"]); ?></td>
                                            <td><?php echo ($pinglun["jingdian_name"]); ?></td>
                                            <td><img src="<?php echo ($pinglun["jingdian_image"]); ?>" alt="" class="am-img-responsive"></td>
                                             <td><?php echo ($pinglun["pinglun_content"]); ?></td>
                                             <td><?php echo ($pinglun["pinglun_birth"]); ?></td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="/tpg/admin.php/home/Adminform/deletepinglun?id=<?php echo ($pinglun["pinglun_id"]); ?>" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                       
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                       <div class="am-u-sm-12 am-u-md-12 am-u-lg-6">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">留言统计</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>留言者</th>
                                            <th>留言者邮箱</th>
                                            <th>留言内容</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($messages)): $i = 0; $__LIST__ = $messages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($message["message_fromname"]); ?></td>
                                            <td><?php echo ($message["message_fromemail"]); ?></td>
                                            <td><?php echo ($message["message_content"]); ?></td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="/tpg/admin.php/home/Adminform/deletemessage?id=<?php echo ($message["message_id"]); ?>" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                       
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">美食列表</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-bordered tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>美食名称</th>
                                            <th>图片</th>
                                            <th>价格</th>
                                            <th>所在地区</th>
                                            <th>介绍</th>
                                            
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($meishis)): $i = 0; $__LIST__ = $meishis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$meishi): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($meishi["meishi_name"]); ?></td>
                                            <td><img src="<?php echo ($meishi["meishi_image"]); ?>" alt="" class="am-img-responsive"></td>
                                            <td><?php echo ($meishi["meishi_price"]); ?></td>
                                            <td><?php echo ($meishi["meishi_site"]); ?></td>
                                             <td><?php echo ($meishi["meishi_content"]); ?></td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="/tpg/admin.php/home/Adminform/meishiupdate?id=<?php echo ($meishi["id"]); ?>">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="/tpg/admin.php/home/Adminform/meishiremove?id=<?php echo ($meishi["id"]); ?>" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                        
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">旅游线路；列表</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-bordered am-table-radius am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>线路名称</th>
                                            <th>线路行程</th>
                                            <th>价格</th>
                                            <th>线路封面</th>
                                            <th>推荐理由</th>
                                            <th>添加时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($xianlus)): $i = 0; $__LIST__ = $xianlus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xianlu): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($xianlu["xianlu_name"]); ?></td>
                                            <td><?php echo ($xianlu["xianlu_content"]); ?></td>
                                            <td><?php echo ($xianlu["xianlu_price"]); ?></td>

                                            <td><img src="<?php echo ($xianlu["xianlu_image"]); ?>" alt="" class="am-img-responsive"></td>
                                            <td><?php echo ($xianlu["xianlu_reason"]); ?></td>
                                            <td><?php echo ($xianlu["xianlu_birth"]); ?></td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="/tpg/admin.php/home/Adminform/xianluremove?id=<?php echo ($xianlu["xianlu_id"]); ?>" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                        <!-- more data -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">酒店列表</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">

                                <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>酒店名字</th>
                                            <th>价格</th>
                                            <th>链接</th>
                                            <th>所在地区</th>
                                            <th>封面</th>
                                            <th>星级</th>
                                            <th>简介</th>
                                            
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($jiudians)): $i = 0; $__LIST__ = $jiudians;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jiudian): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><?php echo ($i); ?></td>
                                            <td><?php echo ($jiudian["jiudian_name"]); ?></td>
                                            <td><?php echo ($jiudian["jiudian_price"]); ?></td>
                                            <td><a href="<?php echo ($jiudian["jiudian_tel"]); ?>" title="">酒店链接</a></td>
                                            <td><?php echo ($jiudian["jiudian_site"]); ?></td>
                                            <td><img src="<?php echo ($jiudian["jiudian_image"]); ?>" alt="" class="am-img-responsive"></td>
                                            <td><?php echo ($jiudian["jiudian_star"]); ?></td>
                                            <td><?php echo ($jiudian["jiudian_content"]); ?></td>

                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="javascript:;">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="/tpg/admin.php/home/Adminform/jiudianremove?id=<?php echo ($jiudian["jiudian_id"]); ?>" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        
                                        <!-- more data -->
                                    </tbody>
                                </table>

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
    <script src="/tpg/Public/admin/js/dataTables.responsive.min.js"></script>
    <script src="/tpg/Public/admin/js/app.js"></script>

</body>

</html>
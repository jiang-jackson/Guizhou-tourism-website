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


<link rel="stylesheet" href="/tpg/Public/admin/css/fullcalendar.min.css" />
<link rel="stylesheet" href="/tpg/Public/admin/css/fullcalendar.print.css" media='print' />
<div data-type="widgets">
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">



            <div class="row-content am-cf">
                <div class="tpl-calendar-box">
                    <div id="calendar"></div>
                </div>






            </div>
        </div>
    </div>
    </div>


    <!-- 弹出层 -->

    <div class="am-modal am-modal-no-btn" id="calendar-edit-box">
        <div class="am-modal-dialog tpl-model-dialog">
            <div class="am-modal-hd">
                <a href="javascript: void(0)" class="am-close edit-box-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd tpl-am-model-bd am-cf">

                <form class="am-form tpl-form-border-form">
                    <div class="am-form-group am-u-sm-12">
                        <label for="user-name" class="am-u-sm-12 am-form-label am-text-left">标题 <span class="tpl-form-line-small-title">Title</span></label>
                        <div class="am-u-sm-12">
                            <input type="text" class="tpl-form-input am-margin-top-xs calendar-edit-box-title" id="user-name" placeholder="" disabled>
                        </div>
                    </div>







                </form>

            </div>
        </div>
    </div>

    <script src="/tpg/Public/admin/js/jquery.min.js"></script>
    <script src="/tpg/Public/admin/js/moment.js"></script>
    <script src="/tpg/Public/admin/js/amazeui.min.js"></script>
    <script src="/tpg/Public/admin/js/fullcalendar.min.js"></script>
    <script src="/tpg/Public/admin/js/app.js"></script>
    <script>
        $(document).ready(function() {
            var editBox = $('#calendar-edit-box');

            $('.edit-box-close').on('click', function() {
                $('#calendar').fullCalendar('unselect');
            })
            $('#calendar').fullCalendar({

                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },

                monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                monthNamesShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                dayNames: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
                dayNamesShort: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"],
                today: ["今天"],
                firstDay: 1,
                buttonText: {
                    today: '本月',
                    month: '月',
                    week: '周',
                    day: '日',
                    prev: '上一月',
                    next: '下一月'
                },
                defaultDate: '2017-05-09',
                lang: 'zh-cn',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    var title = prompt('填写你的记录的:');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: end
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                    }
                    $('#calendar').fullCalendar('unselect');



                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                eventClick: function(event, jsEvent, view) {

                    // event.source.events[0].title = '222223333'
                    // 修改数据
                    // 标题
                    $('.calendar-edit-box-title').val(event.title)



                    //  弹出框
                    editBox.modal();





                },
                events: [{
                    id: 1,
                     title: '链接数据库',
                    start: '2017-04-20',
                    end: '2017-04-20'
                }, {
                    id: 2,
                     title: '向数据库添加景点',
                    start: '2017-04-21',
                    end: '2017-04-21'
                }, {
                    id: 3,
                  title: '向数据库添加美食',
                    start: '2017-04-22',
                    end: '2017-04-22'
                }, {
                    id: 4,
                   title: '向数据库添加酒店',
                    start: '2017-04-23',
                    end: '2017-04-23'
                }, {
                    id: 5,
                     title: '向数据库添加线路',
                    start: '2017-04-24',
                    end: '2017-04-24'
                }, {
                    id: 6,
                      title: '用户对景点评论的处理',
                    start: '2017-04-26',
                    end: '2017-04-26'
                }, {
                    id: 7,
                      title: '用户留言处理',
                    start: '2017-04-29',
                    end: '2017-04-29'
                }, {
                    id: 8,
                     title: '删除错误数据',
                    start: '2017-05-01',
                    end: '2017-05-01'
                }, {
                    id: 9,
                     title: '图片列表的检索实现',
                    start: '2017-05-03',
                    end: '2017-05-03'
                }, {
                    id: 10,
                    title: '改进网站系统，提高用户体验',
                    start: '2017-05-05',
                    end: '2017-05-05'
                }, {
                    id: 11,
                    title: '兼容不同的浏览器',
                    start: '2017-05-06',
                    end: '2017-05-06'
                }, {
                    id: 12,
                    title: '网站整体调试',
                    start: '2017-05-09',
                    end: '2017-05-09'
                }]
            });

        });
    </script>
    </div>
</body>

</html>
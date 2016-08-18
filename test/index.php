<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Sidebar | Amaze UI Example</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <style>
        @media only screen and (min-width: 641px) {
            .am-offcanvas {
                display: block;
                position: static;
                background: none;
            }

            .am-offcanvas-bar {
                position: static;
                width: auto;
                background: none;
                -webkit-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .am-offcanvas-bar:after {
                content: none;
            }

        }

        @media only screen and (max-width: 640px) {
            .am-offcanvas-bar .am-nav>li>a {
                color:#ccc;
                border-radius: 0;
                border-top: 1px solid rgba(0,0,0,.3);
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
            }

            .am-offcanvas-bar .am-nav>li>a:hover {
                background: #404040;
                color: #fff
            }

            .am-offcanvas-bar .am-nav>li.am-nav-header {
                color: #777;
                background: #404040;
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
                text-shadow: 0 1px 0 rgba(0,0,0,.5);
                border-top: 1px solid rgba(0,0,0,.3);
                font-weight: 400;
                font-size: 75%
            }

            .am-offcanvas-bar .am-nav>li.am-active>a {
                background: #1a1a1a;
                color: #fff;
                box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
            }

            .am-offcanvas-bar .am-nav>li+li {
                margin-top: 0;
            }
        }

        .my-head {
            margin-top: 40px;
            text-align: center;
        }

        .my-button {
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 0;
        }
        .my-sidebar {
            padding-right: 0;
            border-right: 1px solid #eeeeee;
        }

        .my-footer {
            border-top: 1px solid #eeeeee;
            padding: 10px 0;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="am-topbar am-topbar-inverse  am-header-fixed">
    <h1 class="am-topbar-brand">
        <a href="#">money</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
            class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <div style="width: 1200px;margin: auto">
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li class="am-active"><a href="#">首页</a></li>
                <li><a href="#">项目</a></li>
                <li class="am-dropdown" data-am-dropdown>
                    <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                        菜单 <span class="am-icon-caret-down"></span>
                    </a>
                    <ul class="am-dropdown-content">
                        <li class="am-dropdown-header">标题</li>
                        <li><a href="#">关于我们</a></li>
                        <li><a href="#">关于字体</a></li>
                        <li><a href="#">TIPS</a></li>
                    </ul>
                </li>
            </ul>
<!--            <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search">-->
<!--                <div class="am-form-group">-->
<!--                    <input type="text" class="am-form-field am-input-sm" placeholder="搜索文章">-->
<!--                </div>-->
<!--                <button type="submit" class="am-btn am-btn-default am-btn-sm">搜索</button>-->
<!--            </form>-->
        </div>

    </div>
</header>
<div class="am-g am-g-fixed blog-g-fixed" style="margin-top: 68px;">
    <!--    <div class="am-u-md-12">-->
    <!--        <ol class="am-breadcrumb">-->
    <!--            <li><a href="#" class="am-icon-home">首页</a></li>-->
    <!--            <li><a href="#">账目</a></li>-->
    <!--            <li class="am-active">记账</li>-->
    <!--        </ol>-->
    <!--    </div>-->
</div>

<hr class="am-article-divider"/>
<div class="am-g am-g-fixed">
    <div class="am-u-md-9 am-u-md-push-3">
        <div class="am-g">
            <div class="am-u-sm-11 am-u-sm-centered">
                <div class="am-cf am-article">
                    <form action="" class="am-form" data-am-validator>
                        <p>
                            <input type="text" class="am-form-field" placeholder="记账日期" data-am-datepicker readonly required />
                        </p>
                        <p><button class="am-btn am-btn-primary">提交</button></p>
                        <div class="am-form-group" style="width: 100px;">
                            <label for="doc-select-1">下拉多选框</label>
                            <select id="doc-select-1">
                                <option value="option1">选项一</option>
                                <option value="option2">选项二</option>
                                <option value="option3">选项三</option>
                            </select>
                            <span class="am-form-caret"></span>
                        </div>
                    </form>

                </div>
                <hr/>

            </div>
        </div>
    </div>
    <div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
        <div class="am-offcanvas" id="sidebar">
            <div class="am-offcanvas-bar">
                <ul class="am-nav">
                    <li><a href="#">登陆名称 您好</a></li>
                    <li class="am-nav-header">目录</li>
                    <li><a href="#">账目</a></li>
                    <li><a href="#">账分析</a></li>
                    <li><a href="#">文章赏析</a></li>
                    <li><a href="#">读者评论</a></li>
                </ul>
            </div>
        </div>
    </div>
    <a href="#sidebar" class="am-btn am-btn-sm am-btn-success am-icon-bars am-show-sm-only my-button" data-am-offcanvas><span class="am-sr-only">侧栏导航</span></a>
</div>

<footer class="my-footer">
    <p>sidebar template<br><small>© Copyright XXX. by the AmazeUI Team.</small></p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>

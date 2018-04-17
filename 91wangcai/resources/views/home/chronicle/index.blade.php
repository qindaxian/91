
@extends('home.common.base')
@section('content')


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>91旺财旺财记事-记录旺财的点滴</title>
    <meta name="keywords" content="91旺财，旺财，旺财记事，旺财成长">
    <meta name="description" content="91旺财成长日记，旺财一点一滴的成长都是记录我们发展，每月定期举办财主见面会，已在北京、上海等地连续举办100期。">
    <!-- 导入旺财日记样式开始 -->
    <link rel="stylesheet" type="text/css" href="http://www.91.com/v1.1.0/css/daily/daily_style.css?t=2">
    <!-- 导入旺财日记样式结束 -->
    <div class="none">
        <!-- www.91wangcai.com的统计代码 -->
        <script>
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                hm.src = "https://hm.baidu.com/hm.js?a5e066626801308aabc261e863bc5ff2";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <!-- www.91wangcai.com的统计代码 -->
    </div>
</head>
<body>








<div class="none">
    <!-- www.91wangcai.com的统计代码 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?a5e066626801308aabc261e863bc5ff2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- www.91wangcai.com的统计代码 -->
    <!-- www.91wangcai.com的最新https的统计代码 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a5e066626801308aabc261e863bc5ff2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!-- www.91wangcai.com的最新https的统计代码 -->
    <!-- wangcai.91jinrong.com的统计代码结束 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?382d46152bf65f80c0f430f478b4500b";
            hm.src = "https://hm.baidu.com/hm.js?a5e066626801308aabc261e863bc5ff2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</div>
<div class="sideShade"></div>

<div class="tools">
    <div class="slideWrap">
        <div class="sideNav">联系我们</div>
        <div class="slideContact">
            <div class="info">
                <h5><strong>7×24小时专业顾问</strong></h5>
                <p class="vt"><img src="http://www.91.com/v1.1.0/img/common/ico_tel.png"/><span>400-000-0091</span></p>
                <h5><strong>QQ在线</strong></h5>
                <p class="vt"><img src="http://www.91.com/v1.1.0/img/common/ico_QQ.png"/><a href="http://www.91wangcai.com/help/qq" target="_blank">点击咨询</a></p>
                <h5><strong>自助查询</strong></h5>
                <p class="vt"><img src="http://www.91.com/v1.1.0/img/common/ico_help.png"/><a href="http://www.91wangcai.com/help/index" target="_blank">帮助中心</a></p>
                <h5><strong>官方微信</strong></h5>
                <img src="http://www.91.com/v1.1.0/img/common/weixin1.png"/>
            </div>
        </div>
    </div>
    <div id="backTop">顶部</div>
</div>
<!-- 浏览器版本过低提示开始 -->
<div class="web_browserTip hide" id="web_browserTip">
    亲，您的浏览器版本太低，快快<a href="/common/upgrade">升级</a>吧
</div>
<!-- 浏览器版本过低提示结束 -->
<div id="header" class="header">
    <!--旺财client_id-->
    <input type="hidden" value="91wangcai" id="wc_pc_clientid"/>
    <!--oauth 地址-->
    <input type="hidden" value="https://www.91wangcai.com" id="oauth_base_url"/>
    <!--clientsecret值-->
    <input type="hidden" value="78fijfdsaDjKAL09fdDCV" id="wc_pc_clientsecret"/>
    <input type="hidden" value="www.91wangcai.com" id="wangcai_domain"/>
    <input type="hidden" value="http://www.91.com/v1.1.0" id="ctx"/>
    <!-- 顶部公告开始 -->
    <!-- 顶部公告结束 -->
    <div class="wrap navWrap clearfix">
        <h2 class="logo">
            <a href="/">
                <img src="http://www.91.com/v1.1.0/img/common/logo.png" alt="91旺财">
            </a>
        </h2>
        <div class="nav">
            <ul class="headerNav">
                <li class="">
                    <a href="/">首页</a>
                </li>
                <li class="">
                    <a href="/list">项目列表</a>
                </li>
                <li id="diaryNav" class=" active">
                    <a href="/daily/index" class="yunyingReportWc">旺财记事</a>
                    <div class="hideSlideMain hide">
                        <div class="topArrowBgWrap" >
                            <!-- <i class="top-arrow1"></i> -->
                            <i class="top-arrow2"></i>
                        </div>
                        <ul class="diary">
                            <li>
                                <a href="/daily/caizhu">财主见面会</a>
                            </li>
                            <li>
                                <a href="/daily/index">旺财日记</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li id="reportNav" class="">
                    <a href="/?reportData" class="yunyingReport">运营报告</a>
                    <!-- <div class="hideSlideMain hide">
                        <div class="topArrowBgWrap" >
                            <i class="top-arrow1"></i>
                            <i class="top-arrow2"></i>
                        </div>
                        <ul class="report">
                            <li>
                                <a href="/?operateReportQ1">2017年Q1季度报告</a>
                            </li>
                            <li>
                                <a href="/?operateReport4">2016年Q4季度报告</a>
                            </li>
                            <li>
                                <a href="/?operateReport3">2016年Q3季度报告</a>
                            </li>
                            <li>
                                <a href="/?operateReport2">2016年Q2季度报告</a>
                            </li>
                        </ul>
                    </div> -->
                </li>
                <li class=""><a href="/help/index">帮助中心</a></li>
                <li class=""><a href="/about/index">信息披露</a></li>
            </ul>
        </div>
        <div class="userNav">
            <ul class="loginWrapRight clearfix">



                <li id="nav_login_link" class="loginUrlLink">
                    <a href="/user/to_login" class="js_userTabLink" target="_blank">登录</a>
                </li>
                <li class="centerLine"><span>|</span></li>
                <li>
                    <a href="/user/to_register" class="js_userTabLink" target="_blank">注册</a>
                </li>


            </ul>
        </div>
    </div>
</div>




<!--header开始-->
<div class="daily_top">
    <div class="wrap">
        <ul class="daily_title clearfix">
            <li><a class="active" href="/daily/index">旺财日记</a></li>
            <li class="middle"></li>
            <li><a href="/daily/caizhu">财主见面会</a></li>
        </ul>
        <ul id="dates" class="daily_time clearfix">
        </ul>
    </div>
</div>
<!--header结束-->

<!-- loading开始 -->
<div class="loadWrap">
    <span class="loadlogo"></span>
    <div class="loadBox"></div>
    <span class="loadText">正在加载...</span>
</div>
<!-- loading结束 -->
<!--main开始-->
<div class="main hidden">
    <div class="timeline">
        <ul id="issues" class="clearfix">
        </ul>
    </div>
</div>
<!--main结束-->

@endsection('content')

<div class="footer">
    <div class="wrap clearfix footerWrap">
        <dl class="footer_item addressWrap">
            <dt class="tipTitle">联系我们</dt>
            <dd>
                <div class="address">
                    <p>北京地址：</p>
                    <p>北京市西城区黄寺大街23号167幢 九一金融大厦</p>
                    <p>咨询、投诉、举报电话：400-000-0091</p>
                    <p>咨询、投诉、举报邮箱：<a href="mailto:kefu@91jinrong.com">kefu@91jinrong.com</a></p>
                </div>
                <!--  <div class="address">
                     <p>上海地址：</p>
                     <p>上海市浦东新区浦三路21弄55、56号银亿滨江中心1808室</p>
                     <p>电话：021-68821696</p>
                 </div> -->
                <!-- <div class="address">
                    <p>后台运营及数据处理中心：</p>
                    <p>北京市石景山区石景山路31号盛景国际A座8层</p>
                </div> -->
                <div class="address">
                    <p>友情链接：<a href="//www.91jinrong.com" target="_blank">91金融&nbsp;</a> <a href="https://zhongchuang.91jinrong.com/" target="_blank">91众创空间</a></p>
                    <p>温馨提示：<span>市场有风险，借贷需谨慎</span></p>
                </div>
            </dd>
        </dl>
        <dl class="footer_item codeWrap">
            <dt class="tipTitle">关注</dt>
            <dd class="clearfix">
                <div class="codeItem wxCode">
                    <img src="http://www.91.com/v1.1.0/img/common/wxcode1.jpg" alt="91旺财服务平台微信公众号">
                    扫描二维码关注微信
                </div>
                <!--     <div class="codeItem">
                        <img src="http://www.91.com/v1.1.0/img/common/wxcode2.jpg" alt="91旺财服务平台微信公众号2">
                        扫描二维码关注微信
                    </div> -->
            </dd>
        </dl>
        <dl class="footer_item">
            <dt class="tipTitle">扫码下载客户端</dt>
            <dd class="footer_app">
                <img src="http://www.91.com/v1.1.0/img/common/appcode.png" alt="91旺财app下载二维码">
            </dd>
        </dl>
    </div>

    <div class="codyright">
        <div class="wrap">
            <div class="codyrightItem">
                <div class="xinyong">
                    <a href="/?itrust1" target="_blank" class="itrust itrust1"></a>
                    <a href="/?itrust2" target="_blank" class="itrust itrust2"></a>
                    <a href="/?itrust3" target="_blank" class="itrust itrust3"></a>
                    <a href="/?itrust4" target="_blank" class="itrust itrust4"></a>
                    <a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1082842294" target="_blank" class="itrust itrust5"></a>
                    <a href="http://www.itrust.org.cn/home/index/satification_certificate/wm/MY2017090601" target="_blank" class="itrust itrust6"></a>
                </div>
                <div class="copyrightText">
                    <!-- <a href="/about/management">管理团队</a> <a href="/about/qualification">证照资质</a> <a href="/about/regulation">法律法规</a> <a href="/about/index">关于我们</a> <a href="/about/index#adder">联系我们</a> <a href="/about/job">招聘信息</a> <a href="/about/website_reports">最新动态</a> <a href="/about/media_reports">媒体报道</a><br/> -->
                    <span>Copyright © 2014 91wangcai.com Inc. All Rights Reserved.</span>
                    <span class="mid">先智创科（北京）科技有限公司&nbsp;&nbsp;京ICP备16002181号-1</span>
                    <span><a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010202007186"><img src='http://www.91.com/v1.1.0/img/common/gongan.png'>京公网安备 11010202007186号</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none;">
    <script>
        //google统计
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-53638773-1', 'auto');
        ga('send', 'pageview');
    </script>
</div>
<!-- 导入对应js开始 -->
<script src="http://www.91.com/v1.1.0/js/daily/index_main.js"></script>
</body>
</html>


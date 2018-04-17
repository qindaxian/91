

@extends('home.common.base')
@section('content')


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>91旺财官网_网络借贷信息中介平台</title>
    <meta name="keywords" content="91旺财、互联网金融、借款、理财">
    <meta name="description" content="">
    <!-- 导入投资详情页样式开始 -->
    <link rel="stylesheet" type="text/css" href="http://www.91.com/v1.1.0/css/financing/detail_style.css?t=02">
    <!-- 导入投资详情页样式结束 -->
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
        <!-- www.91wangcai.com的https统计代码 -->
    </div>
</head>
<body>
<!-- 导入头部开始 -->








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
                <li class=" active">
                    <a href="/">首页</a>
                </li>
                <li class="">
                    <a href="/list">项目列表</a>
                </li>
                <li id="diaryNav" class="">
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




<!-- 导入头部结束 -->

<!-- 标的信息 -->
<div class="view_box">
    <div class="wrap">
        <!-- 基本信息开始 -->
        <div class="view_hd clearfix">
            <div class="lbox">
                <div class="shd"><span>BJ-DY-0508972</span><span class="imp_notice">* 市场有风险 借贷需谨慎</span></div>
                <div class="sbd">
                    <div class="item">
                        <div>
                            <p class="notice">

                                <!-- <span>还款方式：一次性还本付息</span> -->





                                <!-- <span id="descDetail">，如借款人提前还款，利息相应减少</span> -->



                            </p>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="c1"><span id="apr">6.85</span><span>%<span></div>
                                <p>预期年化利率</p>
                            </li>
                            <li class="con">
                                <div class="c2"><font id="period">40</font><span>天</span></div>
                                <p>借款期限</p>
                            </li>
                            <li class="end">
                                <div class="c2">3295.62<span>元</span></div>
                                <p>可出借金额</p>
                            </li>
                            <input type="hidden" id="year_day_lang" value="365"/>
                            <!-- <input type="hidden" id="year_day_lang" value="365"/> -->
                        </ul>
                        <div class="per">
                            <p class="fl">
                                <span class="per_left">借款金额</span><span>970000.00</span><span>元</span>
                            </p>
                            <p class="fr">
                                <input value="1000000" id="maxTender" type="hidden" />
                                <input value="3295.62" id="accountWait" type="hidden" />
                                <!-- <span class="per_left">出借上限</span> -->



                                <span class="per_left">项目撮合进度</span>
                                <span>99.61</span><span>%</span>
                            </p>
                            <!-- 出借上限 -->
                            <input type="hidden" class="tallMoney" value="1000000">
                        </div>
                    </div>
                </div>
            </div>
            <div class="rbox">
                <form name="totender" action='/view/totender/220180400467?surplus=3295.62' method='POST'>
                    <p class="rbox_title">出借金额</p>
                    <div class="sbd">
                        <!-- <input type="text" class="money" placeholder="起投金额100"> -->


                        <div  class="money moneyNologin"><input id="moneyID" name="money" autocomplete="off" type="text" placeholder="起投金额100" onclick='location.href=("/user/to_login")' ><span class="fr">元</span></div>




                        <table class="tableC">
                            <tr>
                                <th>账户余额</th>


                                <td class="t1">登录后查看</td>




                            </tr>
                            <tr>
                                <th>到期本息</th>


                                <td class="t1">登录后查看</td>




                            </tr>
                            <tr>
                                <td colspan="2">




                                    <input type="button" id="innerLoginBtn" class="obtn" value="登录">





                                </td>
                            </tr>
                        </table>

                    </div>
                    <input name="borrowName" type="hidden" value="BJ-DY-0508972">
                    <input name="csrf" type="hidden"/>
                </form>
                <p class="deal"><a class="textA" href="/about/buy_protocol" target="_blank">《91旺财借款协议》范本</a></span></p>
            </div>
        </div>
        <!-- 基本信息结束 -->
        <!-- 主要信息开始 -->
        <div class="tab_main">
            <div class="tabHd clearfix">
                <ul class="fl">
                    <!-- 是否合规标的 1 是新项目  0 不是 -->
                    <!-- 老项目 -->



                    <!-- 新项目 -->
                    <!-- <li class="active">项目简介</li> -->
                    <!-- <li>借款人信息</li> -->
                    <!-- <li>风控措施</li> -->



                    <li class="active">借款项目信息</li>







                    <li>借款人信息</li>






                    <li>出借记录</li>





                </ul>
                <div class="fr"><a href="/about/book_protocol" target="_blank" class="textA">出借人须知</a></div>
            </div>
            <div class="tabMain">



                <!-- 新项目-项目简介 -->
                <div>
                    <iframe name="iframeId" src="/view/product_info/220180400467" frameborder="0" width="100%" height="1500" id="iframeId"></iframe>
                </div>
                <!-- 借款人信息 -->
                <div class="none">
                    <iframe name="frameContent" src="/view/user/new_info/220180400467" frameborder="0" width="100%" height="1500" id="frameContent"></iframe>
                </div>
                <!-- 风控措施 -->
                <!-- <div class="none">
                    <iframe width="920px" height="1400px" id="iframeIdCs" frameborder="0" framespacing="0" allowtransparency="true" style="overflow:hidden;" src="/view/risk_measures/info/220180400467"></iframe>
                </div> -->
                <!-- 出借记录 -->
                <div class="none">
                    <iframe width="920px" height="700px" frameborder="0" framespacing="0" allowtransparency="true" style="overflow:hidden;"
                            src="/view/tender/list/220180400467?wait=3295.62&account=970000.00"></iframe>
                </div>


            </div>
            <div class="tabFt">* 市场有风险 借贷需谨慎</div>
        </div>
        <!-- 主要信息结束 -->
    </div>
</div>



@endsection('content')



<!-- 导入底部开始 -->
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
<!-- 导入底部结束 -->
<!-- <script type="text/javascript" src="http://www.91.com/v1.1.0/js/lib/jquery/1.11.0/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://www.91.com/v1.1.0/js/financing/detail.js?t=2"></script>
<script type="text/javascript" src="http://www.91.com/v1.1.0/js/financing/tenThousand.js?t=2"></script> -->
<script src="http://www.91.com/v1.1.0/js/financing/detail_main.js"></script>
</body>

</html>

</html>


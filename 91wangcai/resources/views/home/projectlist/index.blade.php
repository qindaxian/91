
@extends('home.common.base')
@section('content')

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>91旺财项目列表-网络借贷信息中介平台</title>
    <meta name="keywords" content="91旺财，项目列表,网络借贷，借贷平台">
    <meta name="description" content="91旺财提供门槛低、期限灵活的出借项目,用户通过平台进行资金出借获得安全收益">
    <!-- 导入理财列表页样式开始 -->
    <link rel="stylesheet" type="text/css" href="http://www.91.com/v1.1.0/css/financing/list_style.css">
    <!-- 导入理财列表页样式结束 -->
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
                <li class=" active">
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





<div class="mainList">
    <div class="list_banner"><a href="../../help/safety"></a></div>
    <div class="pro_nav">
        <ul class="clearfix">
            <li class="active"><a href="/list">项目列表</a></li>
            <!-- <li><a href="/list/firstnew">优先出借</a></li> -->

            <li><a href="/list/credit_assignment">债权转让</a><sub></sub></li>

        </ul>
    </div>
    <div class="wrap wrapList">




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400460">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0109015</h3>
                        <div class="rightTip">




                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400460">BJ-DY-0109015</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="7.00"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="60">60</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>483.69<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>200000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>200000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400460" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>483.69</em>元</p>
                        <div class="per_load"><i style="width:99.76%"></i></div><b class="max">99.76%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400460" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523925192</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400467">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0508972</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400467">BJ-DY-0508972</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.85"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="40">40</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>3743.06<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>970000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400467" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>3743.06</em>元</p>
                        <div class="per_load"><i style="width:99.61%"></i></div><b class="max">99.61%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400467" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523873432</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400465">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0308972</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400465">BJ-DY-0308972</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.85"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="40">40</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>59888.57<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>1000000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400465" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>59888.57</em>元</p>
                        <div class="per_load"><i style="width:94.01%"></i></div><b class="max">94.01%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400465" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523873433</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400464">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0208972</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400464">BJ-DY-0208972</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.85"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="40">40</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>95574.63<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>1000000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400464" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>95574.63</em>元</p>
                        <div class="per_load"><i style="width:90.44%"></i></div><b class="max">90.44%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400464" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523924424</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400556">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0609037</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400556">BJ-DY-0609037</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.80"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="30">30</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>363208.84<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>1000000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400556" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>363208.84</em>元</p>
                        <div class="per_load"><i style="width:63.64%"></i></div><b class="max">63.64%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400556" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523932762</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400480">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0709018</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400480">BJ-DY-0709018</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.90"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="50">50</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>196783.45<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>400000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>500000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400480" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>196783.45</em>元</p>
                        <div class="per_load"><i style="width:50.80%"></i></div><b class="max">50.80%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400480" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523929839</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400478">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0509018</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400478">BJ-DY-0509018</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.90"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="50">50</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>900000.00<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>1000000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400478" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>900000.00</em>元</p>
                        <div class="per_load"><i style="width:10.00%"></i></div><b class="max">10.00%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400478" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523934031</em></p>


                </div> -->
            </a>
        </div>




        <div class="product clearfix pro_c0">


            <div class="projectList">
                <a href="/view/borrow/220180400479">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0609018</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400479">BJ-DY-0609018</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="6.90"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="50">50</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>976600.00<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>1000000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>



                    <div class="articleBtnWrap articleBtnWrapFour">
                        <!-- <a href="/view/borrow/220180400479" class="articleBtn"> -->
                        <span class="articleBtn">
                                        我要</br>赚钱
                                    </span>
                    </div>


                    <!-- <div class="per">
                        <p>可出借金额<em>976600.00</em>元</p>
                        <div class="per_load"><i style="width:2.34%"></i></div><b class="max">2.34%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">



                                <div><a href="/view/borrow/220180400479" class="btn">我要赚钱</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="endtime" id="endtime">1523933447</em></p>


                </div> -->
            </a>
        </div>



        <div class="product clearfix pro_c6">



            <div class="projectList">
                <a href="/view/borrow/220180400568">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0509039</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400568">BJ-DY-0509039</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="8.00"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="180">180</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>0.00<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>1000000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>


                    <div class="articleBtnWrap articleBtnEnd">
                        <!-- <a href="/view/borrow/220180400568" class="articleBtn"> -->
                        <span class="articleBtn noShade">
                                        已售罄
                                    </span>
                    </div>



                    <!-- <div class="per">
                        <p>可出借金额<em>0.00</em>元</p>
                        <div class="per_load"><i style="width:100.00%"></i></div><b class="max">100.00%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">


                                <div><a href="/view/borrow/220180400568" class="btn btn_end">已售罄</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="" id="">0天0时0分</em></p>



                </div> -->
            </a>
        </div>



        <div class="product clearfix pro_c6">



            <div class="projectList">
                <a href="/view/borrow/220180400569">
                    <div class="productListWrap">
                        <h3><span></span>BJ-DY-0609039</h3>
                        <div class="rightTip">











                        </div>
                    </div>

                    <!-- <h3><span></span><a href="/view/borrow/220180400569">BJ-DY-0609039</a></h3> -->
                    <ul class="clearfix projectDetail">
                        <li class="con first firstList">

                            <em class="c1"><b class="scrollNum" data-numTarget="8.00"></b>%</em>
                            <p>预期年化利率</p>
                        </li>
                        <li class="con two">
                            <em class="c1"><b class="scrollNum" data-numTarget="180">180</b>天</em>
                            <p>借款期限</p>
                        </li>
                        <li class="con three">
                            <em>0.00<small>元</small></em>
                            <p>可出借金额</p>
                        </li>
                        <li class="con three last">
                            <em>100.00<small>元</small></em>
                            <p>起投金额</p>
                        </li>
                        <!-- <li class="con three">
                            <em>600000.00<small>元</small></em>
                            <p>借款金额</p>
                        </li>
                        <li class="con three last">
                            <em>1000000<small>元</small></em>
                            <p>出借限额</p>
                        </li> -->
                    </ul>


                    <div class="articleBtnWrap articleBtnEnd">
                        <!-- <a href="/view/borrow/220180400569" class="articleBtn"> -->
                        <span class="articleBtn noShade">
                                        已售罄
                                    </span>
                    </div>



                    <!-- <div class="per">
                        <p>可出借金额<em>0.00</em>元</p>
                        <div class="per_load"><i style="width:100.00%"></i></div><b class="max">100.00%</b>
                    </div> -->
            </div>
            <!--  <div class="fd">


                                <div><a href="/view/borrow/220180400569" class="btn btn_end">已售罄</a></div>
                                <p><i class="ico ico_time"></i>还剩<em name="" id="">0天0时0分</em></p>



                </div> -->
            </a>
        </div>

    </div>
    <div class="pageBox">
        <table ><tr><td>总共<em>30</em>条</td><td><span>首页</span></td><td><span>上一页</span></td><td><span>1</span></td><td><a href='/list?page=2'>2</a></td><td><a href='/list?page=3'>3</a></td><td><a href='/list?page=2'>下一页</a></td><td><a href='/list?page=3'>尾页</a></td><td>共分<em>3</em>页显示</td></tr></table>
    </div>
    <div class="listBottomTu">
        <a href="/?activitynew" target="_blank"><img src="http://www.91.com/v1.1.0/img/list/listbottm1.png"/></a>
        <a href="/?commission=" target="_blank"><img src="http://www.91.com/v1.1.0/img/list/listbottm2.png"/></a>
        <a href="/about/borrowKnowledge" target="_blank" class="lastImg"><img src="http://www.91.com/v1.1.0/img/list/listbottm3.png"/></a>
    </div>
</div>

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
<script type="text/javascript" src="http://www.91.com/v1.1.0/js/financing/list_main.js"></script>
</body>
</html>


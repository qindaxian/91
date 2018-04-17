@extends('home.common.base')
@section('content')
<!-- loading开始 -->
<div class="loadWrap">
    <span class="loadlogo"></span>
    <div class="loadBox"></div>
    <span class="loadText">正在加载...</span>
</div>
<!-- loading结束 -->
<div class="wrapper hidden" id="wrapper">
    <!-- <div class="slideBar" id="slideBar">
        <ul>
            <li class="one"><a href="#platformData">平台数据</a></li>
            <li class="two"><a href="#jiduDataPc">季度数据</a></li>
            <li class="three"><a href="#caizhuDetail">财主详情</a></li>
            <li class="four"><a href="#jiduCaiZui">季度财主之最</a></li>
            <li class="five"><a href="#tieXinService">贴心服务</a></li>
            <li class="six"><a href="#caizhuZero">财主零距离</a></li>
            <li class="seven"><a href="#chanpinUp">产品升级</a></li>
            <li class="eight"><a href="#wudaHold">五大坚持</a></li>
            <li class="nine"><a href="#Qthing">Q1大事件</a></li>
        </ul>
    </div> -->
    <!-- banner开始 -->
    <div class="banner_wrap">
        <img src="http://www.91.com/v1.1.0/img/operateReport/index/banner.png" id="banner_pc">
    </div>

    <!-- 平台数据总览开始 -->
    <div class="platformData section" id="platformData">
        <script id="platformDataWrap" type="text/html">
            <div class="platform_data">
                <div class="headTop">
                    <p class="platformNum">平台数据总览</p>
                    <div class="safeYy">
                        <img src="http://www.91.com/v1.1.0/img/operateReport/index/left.png" class="left">
                        <p><l>稳健运营：</l><span class="comdify"></span>天</p>
                        <img src="http://www.91.com/v1.1.0/img/operateReport/index/right.png" class="right">
                    </div>
                    <p class="dateStop">数据截止至：<span></span></p>
                    <div class="dataAll">
                        <div class="first">
                            <p class="money"><l class="comdify"></l></p>
                            <p class="desc">累计借贷金额（元）</p>
                            <!-- <img src="http://www.91.com/v1.1.0/img/operateReport/index/jiao.png" class="jiao"> -->
                        </div>
                        <div class="first second">
                            <p class="money"><l class="comdify"></l></p>
                            <p class="desc">累计借贷笔数（笔）</p>
                            <!-- <img src="http://www.91.com/v1.1.0/img/operateReport/index/jiao.png" class="jiao"> -->
                        </div>
                        <div class="first third">
                            <p class="money"><l class="comdify"></l></p>
                            <p class="desc">累计为用户赚取（元）</p>
                            <!-- <img src="http://www.91.com/v1.1.0/img/operateReport/index/jiao.png" class="jiao"> -->
                        </div>
                    </div>
                    <div class="dataAll">
                        <div class="first last fouth">
                            <p class="money"><l class="comdify"></l></p>
                            <p class="desc">借贷余额（元）</p>
                            <!-- <img src="http://www.91.com/v1.1.0/img/operateReport/index/jiao.png" class="jiao"> -->
                        </div>
                        <div class="first fouth">
                            <p class="money"><l class="comdify"></l></p>
                            <p class="desc">借贷余额笔数（笔）</p>
                            <!-- <img src="http://www.91.com/v1.1.0/img/operateReport/index/jiao.png" class="jiao"> -->
                        </div>
                        <div class="first fouth">
                            <p class="money"><l class="comdify"></l></p>
                            <p class="desc">利息余额（元）</p>
                            <!-- <img src="http://www.91.com/v1.1.0/img/operateReport/index/jiao.png" class="jiao"> -->
                        </div>
                    </div>
                </div>
            </div>
        </script>
    </div>
    <!-- 平台数据总览结束 -->

    <!-- banner结束 -->
    <div class="wrapOut" id="wrapper">
        <!-- 月度交易数据开始 -->
        <div class="monthDataWrap">
            <div class="monthData">
                <h2>月度交易数据</h2>
                <div id="chartMonth" style="width:1060px;height:363px;"></div>
                <div class="monthBottom" id="monthData">
                    <script id="monthDataWrap" type="text/html">
                        <!-- <p>累计注册人数：<span class="comdify"></span>人</p> -->
                        <!-- <p>出借人总数：<span class="comdify"></span>人</p> -->
                    </script>
                </div>
            </div>
        </div>
        <!-- 月度交易数据结束 -->
        <!-- 借款数据开始 -->
        <div class="bgloanDataWrap">
            <div class="loanData">
                <h2>借贷用户数据</h2>
                <div class="loanContent" id="loanContent">
                    <script id="loanContentWrap" type="text/html">
                        <div class="dataOneWrap">
                            <div class="dataOne">
                                <p class="loanNum loanNumBg"><span class="dataOneNum comdify"></span></p>
                                <p>累计借款人数量（人）</p>
                            </div>
                            <div class="dataOne">
                                <p class="loanNum loanNumBg"><span class="dataOneNum comdify"></span></p>
                                <p>当前借款人数量（人）</p>
                            </div>
                            <div class="dataOne">
                                <p class="loanNum loanNumBg"><span class="dataOneNum comdify"></span></p>
                                <p>当前出借人数量（人）</p>
                            </div>
                            <div class="dataOne">
                                <p class="loanNum loanNumBg"><span class="dataOneNum comdify"></span></p>
                                <p>累计出借人数量（人）</p>
                            </div>
                        </div>
                    </script>
                </div>

                <div>
                    <div class="userProjectChart">
                        <!-- <div id="chartUser" style="width:400px;height:525px;"></div> -->
                        <ul class="echarts">
                            <li><div id="chartYearTwo" style="width:1100px;height:525px;"></div></li>
                            <li><div id="chartYear" style="width:1100px;height:525px;"></div></li>
                        </ul>
                        <ul class="changeBtn">
                            <p class="loanNumBg">出借人年龄/性别分布</p>
                            <li class="activeBtn">出借人数</li>
                            <li>注册人数</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 借款数据结束 -->
        <!-- 用户及项目数据开始 -->


        <!-- 用户及项目数据结束 -->
        <!-- 借款金额数据开始 -->
        <div class="loanDataWrap loanDataMoneyWrap">
            <div class="loanData">
                <h2>借贷金额数据</h2>
                <div class="loanContent">
                    <div class="dataOneWrapTwo" id="loanContentTwo">
                        <script id="loanContentTwoWrap" type="text/html">
                            <div class="dataTwo">
                                <p class="loanNum"><span class="dataOneNum comdify"></span>%</p>
                                <p>前十大借款人待还金额占比</p>
                            </div>
                            <div class="dataTwo">
                                <p class="loanNum"><span class="dataOneNum comdify"></span>%</p>
                                <p>最大单一借款人待还金额占比</p>
                            </div>
                        </script>
                    </div>
                    <div class="dataOneWrapFix">
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">0</span>元</p>
                            <p>逾期金额</p>
                        </div>
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">0</span>笔</p>
                            <p>逾期笔数</p>
                        </div>
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">0</span>元</p>
                            <p>逾期 90 天（不含）以上金额</p>
                        </div>
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">0</span>笔</p>
                            <p>逾期 90 天（不含）以上笔数</p>
                        </div>
                    </div>
                    <div class="dataOneWrapFix">
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">0</span>元</p>
                            <p>关联关系借款余额</p>
                        </div>
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">0</span>笔</p>
                            <p>关联关系借款余额笔数</p>
                        </div>
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">10</span>笔</p>
                            <p>累计代偿笔数</p>
                        </div>
                        <div class="dataOne loanNumLong">
                            <p class="loanNum"><span class="dataOneNum comdify">5,500,000.00</span>元</p>
                            <p>累计代偿金额</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 借款金额数据结束 -->
        <!-- 地域分布数据开始 -->
        <div class="areaDataWrap">
            <div class="areaData">
                <h2>地域分布数据</h2>
                <div class="areaDataMain">
                    <div class="areaLeft">
                        <h3>TOP 10</h3>
                        <div class="listMain" id="areaData">
                            <script id="areaDataWrap" type="text/html">
                                <p><l></l><span><l class="comdify"></l>元</span></p>
                            </script>
                        </div>
                    </div>
                    <div class="areaRight" id="areaRight" style="width:700px;height:542px;margin-top:50px;"></div>
                </div>
            </div>
        </div>
        <!-- 地域分布数据结束 -->
        <!-- 月度财主之最开始 -->
        <div class="monthRichWrap">
            <h2>月度财主之最</h2>
            <div class="monthRich" id="monthRich">
                <script id="monthRichWrap" type="text/html">
                    <div class="dataRich">
                        <h3>最<span>勤奋</span>财主</h3>
                        <img src="http://www.91.com/v1.1.0/img/operateReport/index/rich1.png">
                        <p></p>
                        <p>月累计出借笔数<span class="comdify"></span>笔</p>
                    </div>
                    <div class="dataRich dataCent">
                        <h3>最<span>土豪</span>财主</h3>
                        <img src="http://www.91.com/v1.1.0/img/operateReport/index/rich2.png">
                        <p>  •  岁  •  </p>
                        <p>月累计出借金额<span class="comdify"></span>元</p>
                    </div>
                    <div class="dataRich">
                        <h3>最<span>聪明</span>财主</h3>
                        <img src="http://www.91.com/v1.1.0/img/operateReport/index/rich3.png">
                        <p>岁</p>
                        <p>月累计赚取收益<span class="comdify"></span>元</p>
                    </div>
                </script>
            </div>
        </div>
        <!-- 月度财主之最结束 -->
        <div id="manageData">
            <script id="manageDataWrap" type="text/html">
                <!-- 财主零距离开始 -->
                <div class="CaizhuDistanceWrap">
                    <h2>财主零距离</h2>
                    <div class="CaizhuDistance">
                        <div class="CaizhuText">
                            <p>截止月份累计举办财主见面会<span class="comdify"></span>期</p>
                            <p class="CaizhuCent">累计送出<span class="comdify"></span>套旺财大礼包</p>
                            <p>收到上百条来自财主们的建议</p>
                        </div>
                        <div class="imgAll imgAllHover">
                            <img src=''>
                        </div>
                    </div>
                    <div class="lineBottom"></div>
                </div>
                <!-- 财主零距离结束 -->
                <!-- 贴心服务开始 -->
                <div class="heartServiceWrap">
                    <h2>贴心服务</h2>
                    <div id="heartService">
                        <div class="heartServiceTitle">月解决用户实际问题<span></span>条</div>
                        <div class="heartService">
                            <div class="weixin">
                                <img src="http://www.91.com/v1.1.0/img/operateReport/index/weixin.png">
                                <p>通过微信接待<span class="comdify"></span>位用户</p>
                            </div>
                            <img src="http://www.91.com/v1.1.0/img/operateReport/index/line.jpg" class="line">
                            <div class="weixin weixin2">
                                <img src="http://www.91.com/v1.1.0/img/operateReport/index/qq.png">
                                <p>通过QQ接待<span class="comdify"></span>位用户</p>
                            </div>
                            <img src="http://www.91.com/v1.1.0/img/operateReport/index/line.jpg" class="line2">
                            <div class="weixin">
                                <img src="http://www.91.com/v1.1.0/img/operateReport/index/phone.png">
                                <p>接听<span class="comdify"></span>次用户咨询电话</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 贴心服务结束 -->
                <!-- 产品迭代开始 -->
                <div class="proIterationWrap">
                    <h2>产品迭代</h2>
                    <div class="proIteration">
                        <div class="upLeft">
                            <p><b>UP</b><img src="http://www.91.com/v1.1.0/img/operateReport/index/up.png"></p>
                            <P>APP升级迭代<span></span>次</br>让我们的产品更完美</P>
                        </div>
                        <div class="upRight">
                            <p class="version_ios"></p>
                            <img src='' class="ios_img">
                            <div class="androidWrap">
                                <p class="version_android"></p>
                                <img src='' class="android_img">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 产品迭代结束 -->
                <!-- 大事记开始 -->
                <div class="memorabiliaWrap">
                    <div class="topArrow"><h2>大事记</h2></div>
                    <div class="memorabiliaMain">
                        <div class="memorabilia wrap">
                            <div class="topMsg">
                                <div class="message1">
                                    <h3></h3>
                                    <p></p>
                                    <a href="/about/report_detail?media_id=" target="_blank"><div class="clickArea"></div></a>
                                </div>
                                <div class="message1 message2">
                                    <h3></h3>
                                    <p></p>
                                    <a href="/about/report_detail?media_id=" target="_blank"><div class="clickArea clickArea2"></div></a>
                                </div>
                                <div class="message1 message3">
                                    <h3></h3>
                                    <p></p>
                                    <a href="/about/report_detail?media_id=" target="_blank"><div class="clickArea clickArea3"></div></a>
                                </div>
                            </div>
                            <div class="topMsg">
                                <div class="message1 message4">
                                    <p></p>
                                    <h3></h3>
                                    <a href="/about/report_detail?media_id=" target="_blank"><div class="clickArea clickArea4"></div></a>
                                </div>
                                <div class="message1 message5">
                                    <p></p>
                                    <h3></h3>
                                    <a href="/about/report_detail?media_id=" target="_blank"><div class="clickArea clickArea5"></div></a>
                                </div>
                                <div class="message1 message6">
                                    <p></p>
                                    <h3></h3>
                                    <a href="/about/report_detail?media_id=" target="_blank"><div class="clickArea clickArea6"></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 大事记结束 -->
            </script>
        </div>

        <!-- 2016季度、2017月度报告开始 -->
        <div class="reportOldWrap">
            <div class="tabYear">
                <ul>
                    <li class="active">2018年数据<span></span></li>
                    <li>2017年数据</li>
                    <li>2016年数据</li>
                </ul>
            </div>

            <div class="reportOld">
                <div class="imgAll hidden">
                    <a href="/?operateReport1"><img src="http://www.91.com/v1.1.0/img/operateReport/index/report4.png"></a>
                    <a href="/?operateReport2"><img src="http://www.91.com/v1.1.0/img/operateReport/index/report1.png"></a>
                    <a href="/?operateReport3"><img src="http://www.91.com/v1.1.0/img/operateReport/index/report2.png"></a>
                    <a href="/?operateReport4"><img src="http://www.91.com/v1.1.0/img/operateReport/index/report3.png"></a>
                </div>
                <div class="imgAllNew imgAllNew1 hidden" id="imgAllNewWrap1">
                    <script id="imgAllNew1" type="text/html">
                        <a target="_blank" href=""><img src=""></a>
                    </script>
                </div>
                <div class="imgAllNew imgAllNew2" id="imgAllNewWrap2">
                    <script id="imgAllNew2" type="text/html">
                        <a target="_blank" href=""><img src=""></a>
                    </script>
                </div>
            </div>
        </div>
        <!--2016季度、2017月度报告结束 -->
    </div>
</div>
<!-- <script src="http://www.91.com/v1.1.0/js/lib/highcharts.js"></script>
<script src="http://www.91.com/v1.1.0/js/lib/echarts.min.js"></script>
<script src="http://www.91.com/v1.1.0/js/lib/china.js"></script>
<script src="http://www.91.com/v1.1.0/js/lib/bootstrap.min.js"></script>
<script src="http://www.91.com/v1.1.0/js/lib/artTemplate/template.js"></script>
<script src="http://www.91.com/v1.1.0/js/report/index.js?t=3"></script>
 -->
<script src="http://www.91.com/v1.1.0/js/report/index_main.js"></script>
@endsection('content')
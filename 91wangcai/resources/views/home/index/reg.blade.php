@extends('home.common.base')
@section('content')
<!-- banner轮换图开始 -->
<link rel="stylesheet" type="text/css" href="http://www.91.com/css/style.css">
<script type="text/javascript" src="http://www.91.com/js/scripts/jquery.min.js"></script>
<!-- <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
<script type="text/javascript" src="http://www.91.com/js/scripts/carousel.js"></script>
<div class="sliderWrap">
    <div class="slider-wrap">
        <div class="carousel-content">
            <ul class="carousel">
                <li><img src="http://www.91.com/images/lbt/1.jpg"></li>
                <li><img src="http://www.91.com/images/lbt/2.jpg"></li>
                <li><img src="http://www.91.com/images/lbt/3.jpg"></li>
                <li><img src="http://www.91.com/images/lbt/4.jpg"></li>
                <li><img src="http://www.91.com/images/lbt/5.jpg"></li>
            </ul>
            <ul class="img-index"></ul>
            <div class="carousel-prev"><img src="http://www.91.com/images/lbt/left_btn1.png"></div>
            <div class="carousel-next"><img src="http://www.91.com/images/lbt/right_btn1.png"></div>
        </div>
        <!--<script type="text/javascript" src="./scripts/carousel.js"></script> -->
        <script type="text/javascript">
            $(function(){
                $(".carousel-content").carousel({
                    carousel : ".carousel",//轮播图容器
                    indexContainer : ".img-index",//下标容器
                    prev : ".carousel-prev",//左按钮
                    next : ".carousel-next",//右按钮
                    timing : 3000,//自动播放间隔
                    animateTime : 800,//动画时间
                    auto : true,//是否自动播放
                });
                $(".carousel-prev").hover(function(){
                    $(this).find("img").attr("src","http://www.91.com/images/lbt/left_btn2.png");
                },function(){
                    $(this).find("img").attr("src","http://www.91.com/images/lbt/left_btn1.png");
                });
                $(".carousel-next").hover(function(){
                    $(this).find("img").attr("src","http://www.91.com/images/lbt/right_btn2.png");
                },function(){
                    $(this).find("img").attr("src","http://www.91.com/images/lbt/right_btn1.png");
                });
            });
        </script>
    </div>
    <div class="wrap userWrap">



        <div class="loginRegisterWrap">
            <!-- 注册开始 -->
            <div class="registerWrap js_item">
                <!-- <span class="registerArrow"></span> -->
                <form action="/doreg" method="POST" name="reg">
                    {{csrf_field()}}
                    <ul>
                        <li>
                            <div class="register_error_tip hide">
                                <span id="register_error_detail_message"></span>
                            </div>
                            <label for="userPhone">
                                <span class="userNameIcon"></span>
                                <input type="text" class="input userName" id="phone" placeholder="请输入手机号" name="user_phone"  maxlength="11">
                            </label>
                        </li>
                        <li>
                            <label for="msgCode">
                                <span class="codeIcon"></span>
                                <input type="text" class="input userName" id="exaReg" placeholder="请输入短信验证码" style="background-color: rgb(250, 255, 189) !important; box-shadow: none; color: rgb(0, 0, 0);" name="sms">
                                <input id="btnSendCode" class="getCodeLink" type="button" value="发送验证码" onclick="sendMessage()" />
                            </label>
                            <div class="error_box">
                                <div class="errorTip" id="send_call_verify" style="display: none;"></div>
                            </div>
                        </li>
                        <li>
                            <label for="userPwd">
                                <span class="pwdIcon"></span>
                                <input type="password" class="input userName" id="pwdCode" placeholder="请输入6-16位数字或字母组合" style="background-color: rgb(250, 255, 189) !important; box-shadow: none; color: rgb(0, 0, 0);" name="user_password">
                            </label>
                        </li>
                        <li>
                            <input type="submit" value="注册" class="loginBtn" id="registerBtn" name="registerBtn">
                        </li>
                        <li class="checkProtocol">
                            <input type="checkbox" id="tiaokuan" class="hidden" checked=""><span class="checked_box" id="register_check"></span> 我同意<a href="/about/reg_protocol" target="_blank">《91旺财用户注册协议》</a>
                        </li>
                    </ul>
                </form>
            </div>
            <!-- 注册结束 -->
        </div>


    </div>
</div>
<!-- banner轮换图结束 -->
<!-- 首页内容部分开始 -->
<div class="wrap">
    <!-- 平台公告开始 -->
    <div class="noticeWrap">
        <div class="noticeTop">
            <p><span><a href="/about/website_reports">更多公告 ></a></span>平台公告：<a href="/about/report_detail?media_id=4092" target="_blank">关于佣金发放规则优化的公告</a></p>
        </div>
        <div class="pinpai">
            <a href="/about/depository" target="_blank">
                <dl>
                    <dt><img src="http://www.91.com/v1.1.0/img/homepage/pic1.png"></dt>
                    <dd>
                        <h2>银行存管</h2>
                        <p>厦门银行资金存管</p>
                        <p>厦门银行互联网金融核心客户</p>
                    </dd>
                </dl>
            </a>

            <a href="/about/qualification" target="_blank">
                <dl>
                    <dt><img src="http://www.91.com/v1.1.0/img/homepage/pic2.png"></dt>
                    <dd>
                        <h2>合规自律</h2>
                        <p>中国互联网金融协会理事单位</p>
                        <p>北京互联网金融行业协会副会长单位</p>
                    </dd>
                </dl>
            </a>

            <a href="/about/investor" target="_blank">
                <dl>
                    <dt><img src="http://www.91.com/v1.1.0/img/homepage/pic3.png"></dt>
                    <dd>
                        <h2>战略投资人</h2>
                        <p>完成三轮融资</p>
                        <p>经纬中国、宽带资本、海通证券等</p>
                    </dd>
                </dl>
            </a>
        </div>
    </div>
    <!-- 平台公告结束 -->
    <!-- 新手专区开始 -->

    <!-- 新手专区结束 -->
    <!-- 优先出借开始 -->

    <!-- 优先出借结束 -->

    <!-- 理财项目开始 -->
    <dl class="moduleItem">
        <dt>
            <h2 class="moduleTitle">
                项目列表
                <span class="desc">门槛低，期限灵活</span>
                <a href="/list" class="moreLink">更多 ></a>
            </h2>
        </dt>
        <dd class="prizeList clearfix">

            <a href="loan.html" class="itemList">
                <div class="mediaShade">
                    <div class="prizeItem">
                        <div class="productListWrap">
                            <h3 class="prizeName productList">
                                BJ-DY-0108976
                            </h3>
                            <div class="rightTip">











                            </div>
                        </div>
                        <div class="infoWrap clearfix">
                            <span class="split"></span>
                            <div class="infoItem rateWrap">



                                <em class="rate">
                                    7.00<span class="perCent">%</span>
                                </em>


                                <span class="rateText">预期年化利率</span>
                            </div>
                            <div class="infoItem datelineWrap">
                                <em class="dateLine"><span class="homePrizeList">借款期限</span>60天</em>
                                <em class="residue"><span>可出借金额</span>2163.65元</em>
                            </div>
                            <div class="infoItem btnWrap">



                                <div class="btn buyBtn">
                                    <span class="btnText">我要<br/>赚钱</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/view/borrow/220180400462" class="itemList">
                <div class="mediaShade">
                    <div class="prizeItem">
                        <div class="productListWrap">
                            <h3 class="prizeName productList">
                                BJ-DY-0309015
                            </h3>
                            <div class="rightTip">











                            </div>
                        </div>
                        <div class="infoWrap clearfix">
                            <span class="split"></span>
                            <div class="infoItem rateWrap">



                                <em class="rate">
                                    7.00<span class="perCent">%</span>
                                </em>


                                <span class="rateText">预期年化利率</span>
                            </div>
                            <div class="infoItem datelineWrap">
                                <em class="dateLine"><span class="homePrizeList">借款期限</span>60天</em>
                                <em class="residue"><span>可出借金额</span>61664.48元</em>
                            </div>
                            <div class="infoItem btnWrap">



                                <div class="btn buyBtn">
                                    <span class="btnText">我要<br/>赚钱</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/view/borrow/220180400467" class="itemList">
                <div class="mediaShade">
                    <div class="prizeItem">
                        <div class="productListWrap">
                            <h3 class="prizeName productList">
                                BJ-DY-0508972
                            </h3>
                            <div class="rightTip">











                            </div>
                        </div>
                        <div class="infoWrap clearfix">
                            <span class="split"></span>
                            <div class="infoItem rateWrap">



                                <em class="rate">
                                    6.85<span class="perCent">%</span>
                                </em>


                                <span class="rateText">预期年化利率</span>
                            </div>
                            <div class="infoItem datelineWrap">
                                <em class="dateLine"><span class="homePrizeList">借款期限</span>40天</em>
                                <em class="residue"><span>可出借金额</span>592710.66元</em>
                            </div>
                            <div class="infoItem btnWrap">



                                <div class="btn buyBtn">
                                    <span class="btnText">我要<br/>赚钱</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/view/borrow/220180400465" class="itemList">
                <div class="mediaShade">
                    <div class="prizeItem">
                        <div class="productListWrap">
                            <h3 class="prizeName productList">
                                BJ-DY-0308972
                            </h3>
                            <div class="rightTip">











                            </div>
                        </div>
                        <div class="infoWrap clearfix">
                            <span class="split"></span>
                            <div class="infoItem rateWrap">



                                <em class="rate">
                                    6.85<span class="perCent">%</span>
                                </em>


                                <span class="rateText">预期年化利率</span>
                            </div>
                            <div class="infoItem datelineWrap">
                                <em class="dateLine"><span class="homePrizeList">借款期限</span>40天</em>
                                <em class="residue"><span>可出借金额</span>725823.53元</em>
                            </div>
                            <div class="infoItem btnWrap">



                                <div class="btn buyBtn">
                                    <span class="btnText">我要<br/>赚钱</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/view/borrow/220180400461" class="itemList">
                <div class="mediaShade">
                    <div class="prizeItem">
                        <div class="productListWrap">
                            <h3 class="prizeName productList">
                                BJ-DY-0209015
                            </h3>
                            <div class="rightTip">











                            </div>
                        </div>
                        <div class="infoWrap clearfix">
                            <span class="split"></span>
                            <div class="infoItem rateWrap">



                                <em class="rate">
                                    7.00<span class="perCent">%</span>
                                </em>


                                <span class="rateText">预期年化利率</span>
                            </div>
                            <div class="infoItem datelineWrap">
                                <em class="dateLine"><span class="homePrizeList">借款期限</span>60天</em>
                                <em class="residue"><span>可出借金额</span>856276.63元</em>
                            </div>
                            <div class="infoItem btnWrap">



                                <div class="btn buyBtn">
                                    <span class="btnText">我要<br/>赚钱</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/view/borrow/220180400460" class="itemList">
                <div class="mediaShade">
                    <div class="prizeItem">
                        <div class="productListWrap">
                            <h3 class="prizeName productList">
                                BJ-DY-0109015
                            </h3>
                            <div class="rightTip">











                            </div>
                        </div>
                        <div class="infoWrap clearfix">
                            <span class="split"></span>
                            <div class="infoItem rateWrap">



                                <em class="rate">
                                    7.00<span class="perCent">%</span>
                                </em>


                                <span class="rateText">预期年化利率</span>
                            </div>
                            <div class="infoItem datelineWrap">
                                <em class="dateLine"><span class="homePrizeList">借款期限</span>60天</em>
                                <em class="residue"><span>可出借金额</span>171726.37元</em>
                            </div>
                            <div class="infoItem btnWrap">



                                <div class="btn buyBtn">
                                    <span class="btnText">我要<br/>赚钱</span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </a>

        </dd>
    </dl>
    <!-- 理财项目结束 -->
    <a href="help/safety"><img src="http://www.91.com/v1.1.0/img/homepage/banner1.jpg" alt="厦门银行存管，安全有保障"/></a>
    <!-- 媒体报道开始 -->
    <dl class="moduleItem">
        <dt>
            <h2 class="moduleTitle">
                媒体报道
                <a href="/about/media_reports" class="moreLink">更多 ></a>
            </h2>
        </dt>
        <dd class="mediaList clearfix">


            <div class="mediaItem">
                <div class="imgWrap">
                    <a target="_blank" href="/about/report_detail?media_id=4094">
                        <img src="https://cdn-img01.91jinrong.com/data/upfiles/images/2018-4/13/ce077017-36fc-4074-a70f-9b32807d5723.jpg" alt="《北京日报》报道91科技集团许泽玮对互联网资管新政策观点：明确界定网贷平台定位 防止互联网资管业务违规"/>
                    </a>
                </div>
                <h3 class="mediaTitle">
                    <a target="_blank" href="/about/report_detail?media_id=4094">
                        《北京日报》报道91科技集团许泽玮对互联网资管新政策观点：明确界定网贷平台定位 防止互联网资管业务违规
                    </a>
                </h3>
            </div>



            <div class="mediaItem">
                <div class="imgWrap">
                    <a target="_blank" href="/about/report_detail?media_id=4090">
                        <img src="https://cdn-img01.91jinrong.com/data/upfiles/images/2018-4/3/4ad4867b-c026-4763-a1a1-c2067052c926.jpg" alt="《经济日报》、人民网、中国青年网等媒体报道91科技集团旗下极扬文化：从新媒体到“文化+” 内容流量和IP价值的全面升级"/>
                    </a>
                </div>
                <h3 class="mediaTitle">
                    <a target="_blank" href="/about/report_detail?media_id=4090">
                        《经济日报》、人民网、中国青年网等媒体报道91科技集团旗下极扬文化：从新媒体到“文化+” 内容流量和IP价值的全面升级
                    </a>
                </h3>
            </div>



            <div class="mediaItem">
                <div class="imgWrap">
                    <a target="_blank" href="/about/report_detail?media_id=4088">
                        <img src="https://cdn-img01.91jinrong.com/data/upfiles/images/2018-4/3/c835ddd9-3489-45a5-a52d-913ad6dd911b.jpg" alt="央视“爱心驿站”少儿频道主持人与儿童舒缓治疗活动中心走进91众创空间 让爱在春天里盛开"/>
                    </a>
                </div>
                <h3 class="mediaTitle">
                    <a target="_blank" href="/about/report_detail?media_id=4088">
                        央视“爱心驿站”少儿频道主持人与儿童舒缓治疗活动中心走进91众创空间 让爱在春天里盛开
                    </a>
                </h3>
            </div>


        </dd>
    </dl>
    <!-- 媒体报道结束 -->

    <!-- 运营数据开始 -->
    <dl class="moduleItem">
        <dt>
            <h3 class="moduleTitle">
                运营数据
                <a href="/?reportData" class="moreLink">更多数据 ></a>
            </h3>
        </dt>
        <a href="/?reportData" target="_blank">
            <dd class="operateList clearfix">
                <div class="operateItem">
                    <h2 class="moneyOne">26205916788.71</h2>
                    <p>累计借贷金额（元）</p>
                </div>
                <span class="imgbd"></span>
                <div class="operateItem">
                    <h2 class="moneyTwo">293213194.75</h2>
                    <p>累计为用户赚取（元）</p>
                </div>
                <span class="imgbd"></span>
                <div class="operateItem">
                    <h2>1487</h2>
                    <p>稳健运营（天）</p>
                </div>
            </dd>
        </a>
    </dl>
    <!-- 运营数据结束 -->
</div>
<!-- 首页内容部分结束 -->
@endsection
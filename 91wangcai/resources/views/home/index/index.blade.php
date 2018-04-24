@extends('home.common.base')
@section('content')
<!-- banner轮换图开始 -->
<script src="http://www.91.com/js/lbt/script/jquery.min.js"></script>
<script type="text/javascript" src="http://www.91.com/js/lbt/script/carousel.js"></script>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>91旺财官网-网络借贷信息中介平台</title>
    <meta name="keywords" content="91旺财，91旺财官网，91金融，网络借贷,互联网金融，借贷平台">
    <meta name="description" content="91旺财是九一金融旗下互联网网络借贷信息中介平台，北京市互联网金融行业协会副会长单位,中国互联网金融协会会员理事单位,公司法人许泽玮先生现任北京市互联网金融协会党委书记，厦门银行资金存管，符合行业监管，严格自律，多重保障为用户资金保驾护航">
    <meta name="baidu-site-verification" content="91旺财是九一金融旗下互联网网络借贷信息中介平台，北京市互联网金融行业协会副会长单位,中国互联网金融协会会员理事单位,公司法人许泽玮先生现任北京市互联网金融协会党委书记，厦门银行资金存管，符合行业监管，严格自律，多重保障为用户资金保驾护航" />
    <!-- 导入首页样式开始 -->
    <link href="http://www.91.com/v1.1.0/css/homepage/homepage_style.css" rel="stylesheet" type="text/css">
    <!-- 导入首页样式结束 -->
    <!-- 导入轮播图样式开始 -->
    <!-- 导入轮播图样式结束 -->
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
        <!-- www.91wangcai.com的https统计代码 -->
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
            hm.src = "https://hm.baidu.com/hm.js?a5e066626801308aabc261e863bc5ff2";
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
            hm.src = "https://hm.baidu.com/hm.js?382d46152bf65f80c0f430f478b4500b";
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
<!-- 导入头部结束 -->
<!-- banner轮换图开始 -->
<link rel="stylesheet" type="text/css" href="http://www.91.com/css/style.css">
<script type="text/javascript" src="http://www.91.com/js/scripts/jquery.min.js"></script>
<!-- <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
<script type="text/javascript" src="http://www.91.com/js/scripts/carousel.js"></script>
<!-- banner轮换图开始 -->
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
    <div class="wrap userWrap" id="user_box">
                <div class="loginRegisterWrap">
                    <!-- 登录开始 -->
                    <div class="loginWrap js_item" id="logins">
                        <!-- <span class="loginArrow"></span> -->
                    <ul>
                        <li>
                            <span style="color:red;" id="span_login"></span>
                            <label for="username" class="form_group_focus">
                                <input type="text" class="input userName" id="username" placeholder="请输入手机号" name="user_phone" required>
                            </label>
                        </li>
                        <li>
                            <label for="pwd">
                                <span class="pwdIcon"></span>
                                <input type="password" class="input pwd" id="pwd" placeholder="请输入密码" autocomplete="off" name="user_password" required>
                            </label>
                        </li>
                        <li>
                            <label for="code" class="form_group_focus">
                                <span class="codeIcon"></span>
                                <input type="text" class="input code" placeholder="请输入验证码" name="code" required>
                                <span class="codeImgWrap">
			  								<img src="{{ URL('home/captcha') }}" id="valicodeImg" alt="点击刷新" onclick="this.src='{{ URL('home/captcha') }}?t='+ Math.random()">
			  							</span>
                                <span class="error"></span>
                            </label>
                        </li>
                        <li class="forgotWrap">
                            <a href="/user/forgot_password" class="forgotPwdLink">忘记密码</a>
                        </li>
                        <li>
                            <input type="button" value="登录" class="loginBtn" id="login_btn">
                        </li>
                        <li class="checkProtocol">
                            <input id="tiaokuanLogin" class="hidden" name="" type="checkbox" value="" checked=""><span class="checked_box" id="login_check"></span> 我同意<a href="/about/reg_protocol" target="_blank"><span class="loginSpring">《91旺财用户注册协议》</span></a>
                        </li>
                    </ul>
                    </div>
                    <!-- 登录结束 -->

                    <!-- 注册开始 -->
                    <div class="registerWrap js_item" style="display:none" id="regs">
                        <!-- <span class="registerArrow"></span> -->
                            <ul>
                                <li>
                                    <div class="register_error_tip hide">
                                        <span id="register_error_detail_message"></span>
                                    </div>
                                    <span style="color:red;" id="span_reg"></span>
                                    <label for="userPhone">
                                        <span class="userNameIcon"></span>
                                        <input type="text" class="input userName" id="phone" placeholder="请输入手机号" name="phone"  maxlength="11">
                                    </label>
                                </li>
                                <li>
                                    <label for="code" class="form_group_focus">
                                        <span class="codeIcon"></span>
                                        <input type="text" class="input code" id="exa" placeholder="请输入验证码" name="code_reg">
                                        <span class="codeImgWrap">
			  								<img src="{{ URL('home/captcha') }}" id="valicodeImg" alt="点击刷新" onclick="this.src='{{ URL('home/captcha') }}?t='+ Math.random()">
			  							</span>
                                        <span class="error"></span>
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
                                        <input type="password" class="input userName" id="pwdCode" placeholder="请输入6-16位数字或字母组合" style="background-color: rgb(250, 255, 189) !important; box-shadow: none; color: rgb(0, 0, 0);" name="password">
                                    </label>
                                </li>
                                <li>
                                    <input type="button" value="注册" class="loginBtn" id="register_btn" name="registerBtn">
                                </li>
                                <li class="checkProtocol">
                                    <input type="checkbox" id="tiaokuan" class="hidden" checked=""><span class="checked_box" id="register_check"></span> 我同意<a href="/about/reg_protocol" target="_blank">《91旺财用户注册协议》</a>
                                </li>
                            </ul>
                    </div>
                    <!-- 注册结束 -->
                </div>
    </div>
</div>

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
 <!-- 合作伙伴开始 -->
    <dl class="moduleItem">
        <dt>
            <h3 class="moduleTitle">合作机构</h3>
        </dt>
        <dd class="partnerList clearfix">
            <div class="list">
                <a href="/about/cooperation/#haitong">
                    <img src="http://www.91.com/v1.1.0/img/homepage/partner1.png" alt="海通证券">
                </a>
            </div>
            <div class="list">
                <a href="/about/cooperation/#kuandai">
                    <img src="http://www.91.com/v1.1.0/img/homepage/partner3.png" alt="宽带资本" >
                </a>
            </div>
            <div class="list">
                <a href="/about/cooperation/#jingwei">
                    <img src="http://www.91.com/v1.1.0/img/homepage/partner2.png" alt="经纬中国" >
                </a>
            </div>
            <div class="list lastList">
                <a href="/about/cooperation/#xiamen">
                    <img src="http://www.91.com/v1.1.0/img/homepage/partner4.png" alt="厦门银行" >
                </a>
            </div>
        </dd>
    </dl>
    <!-- 合作伙伴结束 -->



</div>
<!-- 首页内容部分结束 -->
@endsection('content')

<!-- <script src="http://www.91.com/v1.1.0/js/homepage/homepage_main.js"></script> -->
</div>
</body>
</html>
<script src="http://www.91.com/js/jquery-3.2.1.min.js"></script>
<script>
    /**
     * 选项卡
     */
    $(document).on('click','#register', function() {
        $("#logins").hide();
        $("#regs").show();
    });
    $(document).on('click','#login', function() {
        $("#logins").show();
        $("#regs").hide();
    });

    /**
     * 登陆
     */
    $(document).on('click','#login_btn', function() {
        var user_phone = $("input[name = 'user_phone']").val();
        var user_password = $("input[name = 'user_password']").val();
        var code = $("input[name = 'code']").val();
        var error = $("#span_login");
        if(user_phone == "") {
            error.html("手机号不能为空!");
        } else if(user_password == ""){
            error.html("密码不能为空!");
        }else{
            $.ajax({
                url:'/login',
                data:{user_phone:user_phone,user_password:user_password,code:code},
                type:'post',
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                dateType:'json',
                success:function (check) {
                    if(check == 0) {
                        error.html("验证码错误!");
                    } else{
                        if(check == 1) {
                            error.html("手机号不存在!");
                        } else if(check.state == 2) {
                            error.html("密码错误,还有"+check.text+"机会!");
                        } else if(check.state == 3) {
                            error.html(check.text);
                        } else if(check == 4) {
                            location.href = '/user';
                        }
                    }
                }
            });
        }
    });

    /**
     * 注册
     */
    $(document).on('click','#register_btn', function() {
        var user_phone = $("input[name = 'phone']").val();
        var code = $("input[name = 'code_reg']").val();
        var sms = $("input[name = 'sms']").val();
        var user_password = $("input[name = 'password']").val();
        var reg = /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,16}$/;
        var error = $("#span_reg");
        if(user_phone == "") {
            error.html("手机号不能为空！");
        } else if(!reg.test(user_password)) {
            error.html("密码格式不正确！");
        } else {
            $.ajax({
                url:'/register',
                data:{user_phone:user_phone,code:code,sms:sms,user_password:user_password},
                type:'post',
                headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                dateType:'json',
                success:function (check) {
                    if(check == 0) {
                        error.html("验证码错误!");
                    }
                    if(check == 1) {
                        error.html("短信验证码错误!");
                    }
                    if(check == 2) {
                        error.html("手机号已被注册!");
                    }
                    if(check == 3) {
                        location.href = "/user";
                    }
                }
            });
        }
    });

    /**
     * 短信验证码发送
     */
    /**
     * 验证码60秒
     */
    var InterValObj; //timer变量，控制时间
    var count = 60; //间隔函数，1秒执行
    var curCount;//当前剩余秒数
    function sendMessage() {
        curCount = count;
        //设置button效果，开始计时
        $("#btnSendCode").attr("disabled", "true");
        $("#btnSendCode").val(curCount + "秒后可重新发送");
        var user_phone = $("input[name = 'phone']").val();
        var url = "http://www.91.com/index.php/home/registers";
        var error = $("#span_reg");
        $.ajax({
            url:url,
            data:{user_phone:user_phone},
            type:"GET",
            success:function(check){

            }

        });
        InterValObj = window.setInterval(SetRemainTime, 1000); //启动计时器，1秒执行一次
        //请求后台发送验证码 TODO
    }

    /**
     * timer处理函数
     */
    function SetRemainTime() {
        if (curCount == 0) {
            window.clearInterval(InterValObj);//停止计时器
            $("#btnSendCode").removeAttr("disabled");//启用按钮
            $("#btnSendCode").val("重新发送验证码");
        }
        else {
            curCount--;
            $("#btnSendCode").val(curCount + "秒后可重新发送");
        }
    }
</script>
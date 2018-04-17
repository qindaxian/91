
@extends('home.common.base')
@section('content')

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>91旺财帮助中心-网络借贷信息中介平台</title>
    <meta name="keywords" content="91旺财，帮助中心，网络借贷，借贷平台">
    <meta name="description" content="91旺财是九一金融旗下互联网网络借贷信息中介平台，为金融消费者提供专业、透明、高效、公平的互联网直接借贷服务。">
    <!-- 导入帮助中心样式开始 -->
    <link rel="stylesheet" type="text/css" href="http://www.91.com/v1.1.0/css/help/help_style.css?t=01">
    <!-- 导入帮助中心样式结束 -->
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
                <li class=" active"><a href="/help/index">帮助中心</a></li>
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





<!-- 债权转让公告弹框开始 -->
<!-- <div class="zhezhao hidden"></div>
<div class="bgBox hidden"></div>
<div class="conBox hidden">
    <div id="closeBtn"></div>
    <h1 class="conTitle">91旺财关于债权转让升级改造服务的公告</h1>
    <span>尊敬的财主们：</span>
    <p class="notice">为优化业务流程、改善客户体验，自2015年8月18日起，我平台将对债权转让业务进行升级改造，8月18日后出借的项目届时将不可再进行债权转让。8月18日前已出借的项目，可继续进行债权的转让。</p>
    <p class="notice">特此公告。感谢您对91旺财的关注和支持！</p>
    <p class="luokuan">
        91旺财团队<br>
        2015.08.10
    </p>
</div> -->
<!-- 债权转让公告弹框结束 -->
<div class="main">
    <div class="wrap_tab clearfix">
        <!-- <h1>帮助中心</h1> -->
        <div class="tab">
            <!-- 新手必读 -->
            <div class="item bo white item1 active">
                <h3>新手必读</h3>
            </div>
            <div class="item item1">
                <h3>注册/认证/信息修改</h3>
            </div>
            <div class="item item1">
                <h3>出借赎回</h3>
            </div>
            <div class="item item1">
                <h3>充值/提现</h3>
            </div>
            <div class="item item1">
                <h3>账户及密码管理</h3>
            </div>
            <div class="item item1">
                <h3>自动出借</h3>
            </div>
        </div>

        <!-- 内容区域 -->
        <div class="item_right">
            <div class="item_list clearfix show_text">
                <div class="subitem">
                    <div class="help_title">
                        <p>新手必读</p>
                    </div>
                    <div class="text">
                        <h2 class='first'><span></span>91旺财是什么？</h2>
                        <div class="content one">
                            <p>91旺财(<a href="http://www.91wangcai.com">http://www.91wangcai.com</a>)是九一科技旗下互联网网络借贷信息中介平台，为用户提供互联网直接借贷服务。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财的注册门槛是什么？</h2>
                        <div class="content">
                            <p>年满18周岁——70周岁以内并具备相应民事行为能力，资金来源合法的大陆公民可注册，且最低出借额为100元。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财是否对接了存管？</h2>
                        <div class="content">
                            <p>91旺财在2016年6月23日已经与厦门银行对接了资金存管。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>通过什么方式可以获得红包/加息券？红包/加息券的使用规则及方法？</h2>
                        <div class="content">
                            <p>（1）通过什么方式可以获得红包/加息券？</p>
                            <p>a.新注册用户开通厦门银行存管账户后可获得注册红包/加息券；</p>
                            <p>b.其他红包/加息券通过91旺财举办的营销活动获得，红包/加息券的使用规则以每次参加活动的规则为准。</p>
                            <p>（2）红包/加息券使用方法：</p>
                            <p>a.PC端登陆91旺财官网（<a href="http://www.91wangcai.com">www.91wangcai.com</a>）；</p>
                            <p>b.在“项目列表”的可购买项目中，点击“我要赚钱”；</p>
                            <p>c.在购买界面输入出借金额，点击马上抢购；</p>
                            <p>d.在确认页面选择符合条件的红包/加息券进行勾选后点击“确认支付”；</p>
                            <p>e.在跳转存管通页面输入支付密码确定即可。</p>
                            <p>（3）红包/加息券使用规则？</p>
                            <p>a.当开启自动出借时，自动出借的金额无法使用加息券/红包；</p>
                            <p>b.红包/加息券在出借时，一次可使用一张。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财的利息是怎么计算的？</h2>
                        <div class="content">
                            <p>利息计算公式：出借金额×预期年化利率÷365×天数</p>
                            <p>例：10万元出借180天项目</p>
                            <p>100000×8%÷365×180=3945.21元</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>网站收费规则？</h2>
                        <div class="content">
                            <p>平台交易费用：</p>
                            <p>（1）充值免费</p>
                            <p>（2）管理费免费</p>
                            <p>（3）充值未出借提现：收取每笔提现额的0.5%作为手续费，1000元以下收取每笔2元小额手续费；</p>
                            <p>（4）充值已出借提现：1000元以下收取每笔2元小额手续费；1000元（包括）以上免费 。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财是否有官方QQ群/微信群？</h2>
                        <div class="content">
                            <p>91旺财暂时没有官方QQ群/微信群，请您关注微信公众号：wangcailicai了解更多详情。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item_list clearfix hidden">
                <div class="subitem">
                    <div class="help_title help_title_long help_title_long2">
                        <p>注册/认证/信息修改</p>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财操作流程是什么？</h2>
                        <div class="content">
                            <p>注册>>开通资金存管账户（姓名、身份证号、银行卡号、银行预留手机号）>>账户充值>>选择项目出借>>到期回款>>申请提现>>资金返回银行卡。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>实名认证成功后能修改吗？可以申请注册几个实名认证的账号？</h2>
                        <div class="content">
                            <p>实名认证成功后无法修改/注销。同一身份证仅可以实名认证一个账户；为确保更好的管理自己的账户资产，建议谨慎填写认证信息。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>如何变更注册手机号？</h2>
                        <div class="content">
                            <p>91旺财暂不支持自主更改注册手机号；</p>
                            <p>如遇到手机号停机/暂停服务/空号等情况，请提供手持身份证正反面全脸照片、注册手机号、新手机号至客服邮箱：<a href="mailto:kefu@91jinrong.com">kefu@91jinrong.com</a>，我们将在一个工作日内处理完成并回电；如有更多需求，请致电24小时客服热线：400-000-0091。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>如何更换绑定银行卡？</h2>
                        <div class="content contentWrap">
                            <p>（1）账户资金为0：请致电24小时客服热线：400-000-0091解绑银行卡。</p>
                            <p>（2）账户资金＞0元，银行卡注销/挂失/卡片升级，变更所需材料：</p>
                            <p>a.注册手机号、姓名；</p>
                            <p>b.网银/手机银行/银行流水单记录2~3笔截图（流水需与91旺财账户中的充值时间对应）；</p>
                            <p>c.挂失/注销/变更证明，证明中有银行盖章且显示原卡号；</p>
                            <p>d.手持身份证正反面全脸照片</p>
                            <div class="imgAll">
                                <img src="http://www.91.com/v1.1.0/img/help/file1.jpg">
                                <img src="http://www.91.com/v1.1.0/img/help/file2.jpg" class="img2">
                            </div>
                            <p>解绑材料请发送至客服邮箱:<a href="mailto:kefu@91jinrong.com">kefu@91jinrong.com</a>，我们会在一个工作日内处理完成并回电；如有更多需求，请致电24小时客服热线：400-000-0091。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>注册账户后可以注销吗？</h2>
                        <div class="content">
                            <p>账户注册后不能申请注销。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>开通厦门银行存管账户时提示认证信息不一致/认证失败/预留手机号不一致？</h2>
                        <div class="content">
                            <p>（1）军人身份证、身份证姓名有生僻字、身份证户籍变更，以上情况暂不支持认证，请更换其他身份证尝试；</p>
                            <p>（2）银行预留手机号是否正确，如有变更，请及时到银行修改；</p>
                            <p>（3）如无以上问题，请致电24小时客服热线：400-000-0091。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item_list clearfix hidden">
                <div class="subitem">
                    <div class="help_title">
                        <p>出借赎回</p>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财的出借门槛是什么？</h2>
                        <div class="content">
                            <p>年满18周岁~70周岁内并具备相应民事行为能力，资金来源合法的大陆公民，即可以成为91旺财的出借人；出借金额为100元起。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>出借后是否可以取消？</h2>
                        <div class="content">
                            <p>项目购买成功后无法取消，建议根据需求选择合适期限的项目。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财项目的发布时间？</h2>
                        <div class="content">
                            <p>不定时发布项目，请关注项目列表。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>账户资金冻结的原因？</h2>
                        <div class="content">
                            <p>冻结金额指用户账户内不能自由支配的资金部分，包含出借冻结、提现冻结等类型；</p>
                            <p>出借冻结是指用户出借成功但该项目还未计息的情况；</p>
                            <p>提现冻结则是指用户申请提现至提现成功期间的状态。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>购买项目后的计息时间？</h2>
                        <div class="content">
                            <p>项目售罄，审核通过之后开始计息，当天23:00前售罄，当天审核，当天计息；23:00后售罄，次日审核，次日计息。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>是否可以提前赎回？</h2>
                        <div class="content">
                            <p>91旺财暂不支持提前赎回。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>项目到期回款时间？</h2>
                        <div class="content">
                            <p>回款时间：到期还款日23：59之前返还到您的账户余额。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item_list clearfix hidden">
                <div class="subitem">
                    <div class="help_title">
                        <p>充值/提现</p>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财有哪些充值方式？</h2>
                        <div class="content">
                            <p>（1）快捷支付，可使用APP/PC端进行充值；</p>
                            <p>（2）网银支付，可使用PC端进行充值。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>91旺财是否可以使用信用卡充值？</h2>
                        <div class="content">
                            <p>91旺财暂不支持信用卡充值。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>充值/提现是否有限额？</h2>
                        <div class="content">
                            <p>充值时每日次数和单笔/单日限额取决于充值银行和第三方支付公司；提现无额度/次数限制。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>申请提现到账时间？</h2>
                        <div class="content">
                            <p>提现申请后，厦门银行在收到申请的当日受理，下个工作日到账；遇双休日、国家法定节假日，到账日期顺延至第一个工作日。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>充值时，充值使用的银行卡已扣款，91旺财账户余额没有增加的原因？</h2>
                        <div class="content">
                            <p>（1）充值后，由于银行系统原因，资金没有同步到第三方支付平台导致，银行会在2个小时内进行同步；</p>
                            <p>（2）2个小时后还未到账，请联系24小时客服热线：400-000-0091协助解决。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>为什么申请提现失败了？</h2>
                        <div class="content">
                            <p>（1）绑定银行卡为二类卡，二类卡限额为1万/天，请联系24小时客服热线：400-000-0091协助解决；</p>
                            <p>（2）银行账户冻结或正在办理挂失，请联系24小时客服热线：400-000-0091协助解决。</p>
                        </div>
                    </div>
                    <div class="text text_table">
                        <h2><span></span>支持的银行及限额</h2>
                        <div class="content">
                            <p>快捷支付支持的银行及限额：</p>
                            <table class="table_blank table-ct" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr><th class="ct">支持银行</th><th>单笔限额</th><th>单日限额</th><th class="last">单月限额</th></tr>
                                <!-- 工商银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank1.png"></td><td>5万</td><td>5万</td><td class="last">60万</td></tr>
                                <!-- 工商银行开始 -->
                                <!-- 农业银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank2.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 农业银行结束 -->
                                <!-- 中国银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank3.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 中国银行结束 -->
                                <!-- 建设银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank4.png"></td><td>10万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 建设银行结束 -->
                                <!-- 广发银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank11.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 广发银行结束 -->
                                <!-- 民生银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank12.png"></td><td>5万</b></td><td>40万</b></td><td class="last">60万</td></tr>
                                <!-- 民生银行结束 -->
                                <!--光大银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank5.png"></td><td>10万</b></td><td>40万</b></td><td class="last">60万</td></tr>
                                <!-- 光大银行结束 -->
                                <!-- 招商银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank8.png"></td><td>5万</td><td>5万</td><td class="last">60万</td></tr>
                                <!-- 招商银行结束 -->
                                <!-- 兴业银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank10.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 兴业银行结束 -->
                                <!-- 平安银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank6.png"></td><td>5万</b></td><td>40万</b></td><td class="last">60万</td></tr>
                                <!-- 平安银行结束 -->
                                <!-- 中信银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank14.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 中信银行结束 -->
                                <!-- 交通银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank13.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 交通银行结束 -->
                                <!-- 浦发银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank9.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr>
                                <!-- 浦发银行结束 -->
                                <!-- 华夏银行开始 -->
                                <!-- <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank7.png"></td><td>5万</b></td><td>40万</b></td><td class="last">60万</td></tr> -->
                                <!-- 华夏银行结束 -->
                                <!-- 邮政银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank15.png"></td><td>5000</td><td>5000</td><td class="last">15万</td></tr>
                                <!-- 邮政银行结束 -->
                                <!-- 北京银行开始 -->
                                <!-- <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank17.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr> -->
                                <!-- 北京银行结束 -->
                                <!-- 上海银行开始 -->
                                <!-- <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank16.png"></td><td>5万</td><td>40万</td><td class="last">60万</td></tr> -->
                                <!-- 上海银行结束 -->
                                <!-- 厦门银行开始 -->
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank18.png"></td><td>500万</td><td>500万</td><td class="last">500万</td></tr>
                                <!-- 厦门银行结束 -->
                            </table>
                            <p class="tips"><em>*</em>工商银行  农业银行  建设银行  民生银行  光大银行  中信银行 平安银行
                                需单笔充值最低金额在1.5元以上<br/>
                                <em>*</em>邮储银行需开通银联在线支付<br/>
                                <em>*</em> 以上快捷充值支持银行充值次数限制：单日20次，单月200次。</p>
                            <table class="table_blank table_bt">
                                <tr><th>银行名称</th><th>用户类型</th><th>单卡单笔消费上限（元）</th><th>单卡每日消费上限（元）</th><th>总限额累计上限（元）</th></tr>
                                <tr><td class="lt" rowspan="3"><img src="http://www.91.com/v1.1.0/img/help/bank/bank17.png"></td><td class="tl">普通</td><td>300</td><td>300</td><td>300</td></tr>
                                <tr><td class="tl">动态密码</td><td>1000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">证书</td><td>100万</td><td>100万</td><td>无限额</td></tr>
                                <tr><td class="lt" rowspan="3"><img src="http://www.91.com/v1.1.0/img/help/bank/bank11.png"></td><td class="tl">USBkey</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">动态口令</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">key令</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="lt" rowspan="2"><img src="http://www.91.com/v1.1.0/img/help/bank/bank6.png"></td><td class="tl">USBkey</td><td>5万</td><td>5万</td><td>无限额</td></tr>
                                <tr><td class="tl">动态口令</td><td>5万</td><td>5万</td><td>无限额</td></tr>
                                <tr><td class="lt" rowspan="2" ><img src="http://www.91.com/v1.1.0/img/help/bank/bank8.png"></td><td class="tl">USBkey</td><td>无限额</td><td>无限额</td><td>无限额</td></tr>
                                <tr><td class="tl">大众版</td><td>5000</td><td>无限额</td><td>无限额</td></tr>
                                <tr><td class="lt" rowspan="8"><img src="http://www.91.com/v1.1.0/img/help/bank/bank1.png"></td><td class="tl">柜面注册存量静态密码客户</td><td>300</td><td>300</td><td>300</td></tr>
                                <tr><td class="tl">电子银行口令卡客户（未开通短信认证）</td><td>500</td><td>1000</td><td>无限额</td></tr>
                                <tr><td class="tl">电子银行口令卡客户（开通短信认证）</td><td>2000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">电子密码器</td><td>20万</td><td>100万</td><td>无限额</td></tr>
                                <tr><td class="tl">一代U盾客户（未开通短信认证）</td><td>50万</td><td>100万</td><td>无限额</td></tr>
                                <tr><td class="tl">一代U盾客户（开通短信认证）</td><td>100万</td><td>100万</td><td>无限额</td></tr>
                                <tr><td class="tl">二代U盾客户</td><td>100万</td><td>100万</td><td>无限额</td></tr>
                                <tr><td class="tl">网银互联签约客户</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td  class="lt" rowspan="3"><img src="http://www.91.com/v1.1.0/img/help/bank/bank5.png"></td><td class="tl">动态密码</td><td>1万</td><td>1万</td><td>无限额</td></tr>
                                <tr><td class="tl">阳光令牌</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">PUSH支付</td><td>1万</td><td>1万</td><td>无限额</td></tr>
                                <tr><td  class="lt" rowspan="13"><img src="http://www.91.com/v1.1.0/img/help/bank/bank4.png"></td><td class="tl">全部（签约）</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">动态口令卡（刮刮卡）</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">短信动态口令</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">文件证书</td><td>0</td><td>0</td><td>无限额</td></tr>
                                <tr><td class="tl">二代网银盾</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">文件证书+刮刮卡</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">USB Key+动态口令卡</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">网银高端版</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">USB Key+短信动态口令</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">刮刮卡+短信动态口令</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">USB Key+短信确认</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="tl">USB Key</td><td>5万</td><td>10万</td><td>无限额</td></tr>
                                <tr><td class="tl">音频盾</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <!-- <tr><td class="lt"  rowspan="4"><img src="http://www.91.com/v1.1.0/img/help/bank/bank12.png"></td><td>大众版（短信验证码）</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td>大众版（浏览器证书）</td><td>5000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td>贵宾版（U宝）</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td>贵宾版（OTP）</td><td>50万</td><td>50万</td><td>无限额</td></tr>
                                <tr><td class="lt"><img src="http://www.91.com/v1.1.0/img/help/bank/bank3.png"></td><td>中国银行动态口令</td><td>5万</td><td>1000万</td><td>无限额</td></tr> -->
                                <tr><td class="lt" rowspan="3"><img src="http://www.91.com/v1.1.0/img/help/bank/bank15.png"></td><td class="tl">XXUSBkey</td><td>200万</td><td>200万</td><td>无限额</td></tr>
                                <tr><td class="tl">XX动态口令</td><td>1万</td><td>1万</td><td>无限额</td></tr>
                                <tr><td class="tl">电子令牌</td><td>20万</td><td>20万</td><td>无限额</td></tr>
                                <tr><td class="lt" rowspan="2"><img src="http://www.91.com/v1.1.0/img/help/bank/bank14.png"></td><td class="tl">动态口令</td><td>1000</td><td>5000</td><td>无限额</td></tr>
                                <tr><td class="tl">USBKey</td><td>100万</td><td>100万</td><td>无限额</td></tr>
                                <!-- <tr><td class="lt" rowspan="4"><img src="http://www.91.com/v1.1.0/img/help/bank/bank2.png"></td><td>一代K宝</td><td>50万</td><td>100万</td><td>无限额</td></tr>
                                <tr><td>二代K宝</td><td>100万</td><td>500万</td><td>无限额</td></tr>
                                <tr><td>动态口令卡</td><td>1000</td><td>1000</td><td>无限额</td></tr>
                                <tr><td>K码支付</td><td>1000</td><td>3000</td><td>无限额</td></tr> -->
                                <tr><td class="lt" rowspan="3"><img src="http://www.91.com/v1.1.0/img/help/bank/bank7.png"></td><td class="tl">非签约客户（密码验证）</td><td>300</td><td>1000</td><td>无限额</td></tr>
                                <tr><td class="tl">手机动态验证</td><td>500</td><td>2000</td><td>无限额</td></tr>
                                <tr><td class="tl">证书/U-key</td><td>5000</td><td>2万</td><td>无限额</td></tr>
                                <tr><td class="lt" rowspan="2"><img src="http://www.91.com/v1.1.0/img/help/bank/bank10.png"></td><td class="tl">开通网上支付手机交易短信保护</td><td>1000元和5000元可以自己在网上选择</td><td>1000元和5000元可以自己在网上选择</td><td>1000元和5000元可以自己在网上选择</td></tr>
                                <tr><td class="tl">证书（普通证书，U盾）</td><td>自行设置限额</td><td>自行设置限额</td><td>自行设置限额</td></tr>
                                <!-- 交通银行 -->
                                <tr><td class="lt" rowspan="2"><img src="http://www.91.com/v1.1.0/img/help/bank/bank13.png"></td><td class="tl">USBkey（证书认证版）</td><td>1000000</td><td>1000000</td><td>无限额</td></tr>
                                <tr><td class="tl">短信密码版</td><td>50000</td><td>50000</td><td>无限额</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item_list clearfix hidden">
                <div class="subitem">
                    <div class="help_title help_title_long">
                        <p>账户及密码管理</p>
                    </div>
                    <div class="text">
                        <h2><span></span>登录密码是什么？</h2>
                        <div class="content">
                            <p>登录密码是出借人注册91旺财账户时设置的账户登录密码。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>交易密码是什么？</h2>
                        <div class="content">
                            <p>交易密码是出借人在平台发生资金交易时，在银行资金存管页面设置的密码，只有用户本人知悉。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>忘记登录密码如何操作？</h2>
                        <div class="content">
                            <p>在登录页面选择“忘记密码”进行重置，用户需输入注册手机号及手机验证码进行认证修改。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>忘记交易密码如何操作？</h2>
                        <div class="content">
                            <p>PC端登陆账户，在“我的账户”>>“账户设置”>>“交易密码”中点击“修改/忘记”根据提示进行修改。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>手机收不到验证码怎么办？</h2>
                        <div class="content">
                            <p>（1）收不到注册/修改登陆密码验证码，建议关机重启尝试，如未解决，请联系24小时客服热线：400-000-0091协助解决；</p>
                            <p>（2）收不到修改交易密码的验证码，建议检查是否安装拦截软件/开机重启尝试，如未解决，请联系24小时客服热线：400-000-0091协助解决。</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item_list clearfix hidden">
                <div class="subitem">
                    <div class="help_title">
                        <p>自动出借</p>
                    </div>
                    <div class="text">
                        <h2><span></span>什么是自动出借？</h2>
                        <div class="content">
                            <p>自动出借是购买项目时的工具，开启自动出借后，系统会根据设置情况匹配符合条件的项目。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>自动出借在哪里？?</h2>
                        <div class="content">
                            <p>登录PC端，进入“我的账户”>>“借贷管理”>>“自动出借”。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>怎么设定自动出借?</h2>
                        <div class="content">
                            <p>在自动出借设置页面点击“开启”，填写出借金额，出借周期，预期年化利率和保留额度后点击保存设置即可。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>什么是保留额度？</h2>
                        <div class="content">
                            <p>保留额度指账户余额中不想用于出借的资金，一般保留额度填0即可。</p>
                        </div>
                    </div>
                    <div class="text">
                        <h2><span></span>开启自动出借后未出借成功的原因？</h2>
                        <div class="content">
                            <p>自动出借是根据设置时间先后顺序排队处理的，出借成功后依次排到队尾，由于设置自动出借的用户较多，可能会造成暂时出借不成功的情况；建议您自动加手动的方式进行出借。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://www.91.com/v1.1.0/js/help/help_main.js"></script>

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
</body>
</html>


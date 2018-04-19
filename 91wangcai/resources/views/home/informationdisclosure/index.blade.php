

@extends('home.common.base')
@section('content')


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>91旺财信息披露-网络借贷信息中介平台</title>
    <meta name="keywords" content="91旺财,信息披露,安全合规,合规平台,安全平台">
    <meta name="description" content="91旺财安全有保障的互联网出借平台,为出借者提供安全、透明的优质出借产品,期限灵活，100元起投,厦门银行存管,为您的资金保驾护航">
    <!-- 导入关于我们的css开始... -->
    <link href="http://www.91.com/v1.1.0/css/about/about_style.css" rel="stylesheet" type="text/css">
    <!-- 导入关于我们的css结束... -->
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
                <li class=""><a href="/help/index">帮助中心</a></li>
                <li class=" active"><a href="/about/index">信息披露</a></li>
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





<div class="main">
    <div class="wrap clearfix">
        <div class="sidebar">
            <ul class="sidebarList">
                <li class="title">关于我们</li>
                <li class="active"><a href="/about/index">公司介绍</a></li>
                <li><a href="/about/statement">信披声明</a></li>
                <li><a href="/about/baseInfo">基本信息</a></li>
                <li><a href="/about/management">管理团队</a></li>
                <li><a href="/about/organization">分支机构</a></li>
                <li><a href="/about/investor">投资方</a></li>
                <li><a href="/about/qualification">资质证书</a></li>
                <li><a href="/about/depository">银行存管</a></li>
                <li class="title">对外公告</li>
                <li><a href="/about/audit">审计报告</a></li>
                <li><a href="/about/majorMatters">重大事项</a></li>
                <li><a href="/about/record">备案信息</a></li>
                <li><a href="/about/riskManage">风险管理</a></li>
                <li><a href="/about/fees">收费标准</a></li>
                <li class="title">运营数据</li>
                <li><a href="/?reportData" target="_blank">运营报告</a></li>
                <li class="title">风险教育</li>
                <li><a href="/about/borrowKnowledge">借贷知识</a></li>
                <li><a href="/about/riskEducation">风险教育</a></li>
                <li><a href="/about/regulation">法律法规</a></li>
                <li class="title">企业文化</li>
                <li><a href="/about/website_reports">最新动态</a></li>
                <li><a href="/about/media_reports">媒体报道</a></li>
                <li><a href="/about/companyHonor">公司荣誉</a></li>
                <li><a href="/about/cooperation">合作机构</a></li>
            </ul>
        </div>
        <div class="innerMain">
            <div class="innerTab">
                <div class="tit">公司介绍</div>
                <div class="content company">
                    <!-- <h2><img src="http://www.91.com/v1.1.0/img/about/aboutLogo.jpg"></h2> -->
                    <div class="inner">
                        <p>91科技成立于2011年9月1日，经过6年多的发展，已从最初的金融信息及交易撮合业务领域进入到众创、文化创意、传媒娱乐、创业投资等领域，构建起“创新金融服务+创业投资”双轮驱动的泛金融生态系统，打造出专注于服务“个人+企业+金融机构+政府”的全业务生态生活圈，为企业和消费者提供高效的金融生活服务解决方案。</p>
                        <p>金融及金融服务板块意在运用互联网信息技术及数据分析等手段，提高贷款、保险等交易效率，降低交易成本，切实推行普惠金融。凭借着创新的业务模式和服务理念，91科技成为比尔•盖茨到访的中国科技金融企业；荣登福布斯中文榜“中国互联网金融50强”；与海通证券、厦门银行、北京银行等300多家传统金融机构达成战略合作；并被《新闻联播》、《焦点访谈》等央视品牌栏目连续报道10余次；曾荣获工信部颁发的“2015CITE‘创新产品与应用奖’”、“中关村国家自主创新示范区‘金种子工程’企业”等多项行业大奖。</p>
                        <p>91科技旗下投资及创业服务板块——91创投，为创业者提供全生命周期、一站式创业服务。其中，91众创空间名列科技部众创空间名单，被纳入到国家级科技企业孵化器，已完成在北京西城区、石景山区、延庆区和上海浦东新区、嘉定区的筹建，未来将在全国范围内建设150余家众创空间，并联合金八传媒打造新媒体产业基地，提供容纳100多家新媒体创业企业的数千个工位。同时，91投资将积极布局资本市场，通过并购、入股等方式，投资更多优质企业及项目，形成以创业创新为核心的业务生态链。</p>
                        <p>91文化是91科技的传媒及文化创意业务板块，通过强大的人才智力优势、全案营销能力、技术创新能力以及完善的品牌传播体系等，打造一站式文化服务平台。91文化目前已汇聚了一批文化领域的领军企业，包括中国金融整合营销传播服务平台——金八传媒，旗下金融八卦女是国内知名财经金融自媒体；国际一流水平、开放式的研究平台和新型高端智库——91智库；北京市体验式党建教育基地——红色大庄科；专注金融圈高端交友平台——华尔街单身会。未来，91文化将借助资本市场，通过并购进入到体育、娱乐、旅游等领域，发展多形式文化业务，实现版图不断扩大。</p>
                        <p>成立至今，91科技累计服务用户超300万人，创造交易量超过2000亿元，累计为2万余家中小微企业、创新创业企业以及上万名青年创业者解决了资金掣肘业务发展问题，在北京、上海、厦门、深圳、天津等地均设有分支机构，业务遍布全国，品牌影响力覆盖上亿人。</p>
                        <p>截至目前，91科技在职员工300余人，技术研发专业人员56%，拥有银行、证券、保险等金融机构从业经历人员近40%，具备各类金融从业资格资质人员占20%，并与北航、外经贸、北外等多所高校达成战略合作关系，未来将进一步推进产学研深度融合。</p>
                        <p>2014年9月30日，91科技党支部正式成立。2015年5月，91科技团总支委员会成立，目前公司党员总人数42名，团员136名，在非公党建、团建方面进行了诸多的尝试与实践，并以党建、团建、工会建设三位一体结合企业文化，开展各种青年思想文化建设活动，积极参与社会公益事业，将一大批青年员工聚集在党支部和团支部的旗帜下开展工作，增强企业凝聚力和战斗力，促进企业不断发展壮大。91科技党支部曾荣获 “北京市社会领域优秀党建活动品牌”、“西城区先进基层党组织”等荣誉称号，并和91科技团总支一道获得了市区两级领导的认可。2017年2月，《人民日报》发表文章《91金融党建力量与企业活力一起迸发为互联网企业装上“红色引擎”》，专题报道91科技党建工作，随后该文章被各大媒体纷纷转载。</p>
                        <p>作为一家具有强烈社会责任感的企业，91科技不仅在北京延庆大庄科乡、贵州省威宁县石门乡、贵州六盘水市开展精准帮扶，还连续三年参加共青团北京市委、北京市青联等单位发起的“温暖衣冬”等大型公益活动。未来91科技将继续参与扶贫并丰富精准扶贫的内涵，同时运用“互联网+”等多种创新形式，积极探索慈善救助新模式，通过多渠道、多形式帮扶行动，实现“造血”式精准扶贫。</p>
                        <p>91科技在2016年、2017年连续两年举办“贵州青少年英才北京行”活动，积极推进贵州威宁县石门乡与北京延庆区大庄科乡“红色文化+绿色产业精准帮扶结对子”、并与共青团中央、北京航空航天大学对贵州石门青少年英才开展赠书交流活动，积极投身精准扶贫事业中。目前，91科技联合贵州六盘水成功完成“金弥”红心猕猴桃酒众筹，与贵州省各地政府共同推动“乡村工坊”建设，助力精准扶贫。通过91科技注入资源和资金到贵州“乡村工坊”和特色产业众筹，形成“线上有平台、线下有生产基地”的经营模式，为贵州脱贫攻坚助力。</p>
                        <p>此外，91科技与北京市延庆区井庄镇合作打造了91科技冰雪欢乐园，不仅为周边农户提供100多个就业岗位，也吸引5万多游客参与冰雪项目；同时，91科技与北京市延庆区大庄科乡合作开发红色旅游项目，依托当地的红色资源，发展“红色大庄科”北京市体验式党建教育基地，帮助当地居民实现持续增收，打造京津冀“红色文化+绿色产业”促进精准扶贫的示范基地，以实际行动支持世园会、冬奥会建设。</p>
                        <p>从始至终，91科技以提升消费者金融生活服务为己任，积极践行普惠金融理念，服务实体经济，并通过营造创业创新服务生态系统，助力青年成长，帮助更多中小微企业成长壮大，为“双创”贡献力量，同时以文化创意之力，坚定文化自信，持之以恒地践行社会责任，让祖国更加富强，实现我们的中国梦。</p>
                        <strong>业务板块金融、文化、众创空间、投资</strong>
                        <h3>金融服务板块</h3>
                        <p>致力于为金融消费者提供专业、透明、高效、公平的网络借贷信息中介服务，通过互联网撮合合格的出借人和借款人在平台上完成借贷，专注于中小企业周转型借贷，项目期限灵活，于2016年6月23日上线银行资金存管系统。</p>
                        <strong>91金融超市</strong>
                        <p>91金融超市定位为金融消费者提供金融产品导购服务，坚持做信息中介服务平台，提升传统金融机构的服务效率，并在此过程中致力于建立起有价值的金融消费者数据库和丰富的金融产品数据库，为金融消费者提供7*24小时、免费、定制化的顾问式服务。</p>
                        <strong>91旺财</strong>
                        <p>致力于为金融消费者提供专业、透明、高效、公平的网络借贷信息中介服务，通过互联网撮合合格的出借人和借款人在平台上完成借贷，专注于中小企业周转型借贷，项目期限灵活，于2016年6月23日上线银行资金存管系统。</p>
                        <!--  <strong>91资管</strong>
                        <p>91资管于2014年获得私募投资基金管理人牌照，多重把控、审慎管理，为个人及企业提供专业优质的金融服务，包括私募基金、资产管理以及参与上市公司投融资服务等。此外，91资管针对新三板企业提供专业化金融服务，提出“构筑新三板金融服务体系”理念，为企业股东定增融资、企业员工持股计划等提供融资方案支持。</p> -->
                        <strong>91贷款</strong>
                        <p>91金融超市贷款主要面向普通个人金融消费以及中小微企业级用户，对接银行信贷、小贷公司以及网贷平台等机构，提供贷款及融资信息服务。通过91贷款平台，用户可以快速提交贷款需求。客服团队在接到用户需求之后，根据具体情况，运用大数据分析精准匹配到与之贷款要求相符合的金融机构或平台，撮合借贷双方低成本高效率的完成交易。</p>
                        <h3>文化服务板块</h3>
                        <p>91科技的文化服务板块，将通过强大的人才智力优势、全案营销能力、技术创新能力以及完善的品牌传播体系等，打造一站式文化服务平台。91文化目前已汇聚了一批文化领域的领军企业，包括中国领先的金融整合营销传播服务平台——金八传媒，旗下金融八卦女是国内财经金融自媒体；国际一流水平、开放式的研究平台和新型高端智库——91智库；北京市体验式党建教育基地——红色大庄科；专注金融圈高端交友平台——华尔街单身会。未来，91文化将借助资本市场，通过并购进入到体育、娱乐、旅游等领域，发展多形式文化业务，实现版图不断扩大。</p>
                        <strong>金八传媒</strong>
                        <p>金八传媒，中国领先的金融整合营销传播服务平台。创建于2011年，以百万粉丝影响力自媒体大号“金融八卦女”为核心，建立金融领域全媒体矩阵。致力于服务金融机构及企业、金融行业从业者以及有金融消费需求的泛金融人群，并为这群人提供优质价值信息阅读、金融社交、金融交易等服务；同时为商业客户提供品牌推广及整合营销服务。</p>
                        <strong>九一智库</strong>
                        <p>九一智库将聚焦内地、港澳台，放眼全世界，致力于金融法治、青年成长与发展、国际关系、京津冀一体化、非公党建、精准扶贫、创业创新、企业战略、内地与港台关系等领域的研究，秉承“比研究机构更有传播性；比传媒机构更有理论性” 的宗旨，建立了一个连接学术研究和普通大众的高端平台，以此来扩大科研成果的影响力和传播性，以期用独特的视野和独到的眼光，为国家发展建言献策，从而打造具有世界影响力的新型智库。</p>
                        <p>九一智库的设立宗旨是建设成为国际一流水平的、开放式的研究平台和新型高端智库，通过建立与国际接轨的学术研究和人才培养体系，为国家发展提供优秀的科研成果和专业人才。</p>
                        <strong>红色大庄科</strong>
                        <p>红色大庄科是北京市体验式党建教育基地，在北京延庆大庄科乡革命圣地传承红色文化，依托红色资源打造完善的红色旅游景区品牌，发展成为京津冀乃至全国“红色文化+绿色产业”促进精准扶贫的示范基地。</p>
                        <p>红色大庄科的项目和服务主要围绕“红色教育和培训”，提供拓展培训、景观游览、体验旅游等双向互动教育，旨在加强党员教育、党性锻炼。红色主题活动包括有穿军装、走革命路、参观遗址遗迹、听红色故事、吃行军餐、看随军表演等丰富多彩的内容。</p>
                        <strong>华尔街单身会</strong>
                        <p>以服务金融业或泛金融业从业者为主，以单身交友及社交于一体的平台，平台以线上发布高质量的相亲交友信息为主要手段，以线下高频次的交友活动为辅助手段，累计帮助百位未婚男女青年找到心仪对象。</p>
                        <h3>众创空间服务板块</h3>
                        <p>91众创空间是一个拎包入驻的共享办公空间，为初创企业及个人提供全面优质企业服务及商机无限的社交人脉分享平台。</p>
                        <p>91众创空间成立于2015年9月1日，2016年10月获评国家级众创空间认证，已完成在北京西城区、石景山区、延庆区和上海浦东新区、嘉定区的建设，依托积累的实际经验和社会资源，为初创期企业提供创业孵化服务。</p>
                        <h3>投资服务板块</h3>
                        <p>九一资本依托91科技开放平台长期积累的数据资源，运用大数据和云计算等技术，为每一位创业者描绘画像，实现精准投资，植根近五年的创业经验，对互联网金融、文化传媒、娱乐、医疗、教育等初创企业做价值挖掘，并进行早期投资。</p>
                        <p>我们投资于新互联网、新科技、新金融，在大众创业万众创新的时代寻找有潜力、有激情、有梦想的创业者，将互联网的创新成果深度融合于传统产业，一起引领金融、文化创意、消费、娱乐等领域的创新，重构更美好的世界。</p>
                    </div>
                    <a class="innerMore" href="javascript:void(0);">展开全文</a>
                    <h3 id="adder">用户服务</h3>
                    <div class="contact clearfix">
                        <div class="info">
                            <p><b>咨询电话</b>：400-000-0091(7*24小时)</p>
                            <p><b>QQ在线客服</b>：400-991-9591</p>
                            <p><b>微信服务号</b>：91旺财服务平台</p>
                            <p><b>投诉、举报电话</b>：400-000-0091转0</p>
                            <p><b>咨询、投诉、举报邮箱</b>：kefu@91jinrong.com</p>
                            <p><b>通讯地址</b>：北京市西城区黄寺大街23号167幢 91金融大厦</p>
                            <p><b>邮政编码</b>：100011</p>
                            <p>先智创科（北京）科技有限公司</p>
                        </div>
                        <div class="wcPic">
                            <p><b>91旺财APP</b>：91旺财</p>
                            <img src="http://www.91.com/v1.1.0/img/common/appcode.png">
                        </div>
                    </div>
                    <div class="text">
                        <p>91旺财成立了专业的客户服务团队，通过电话、在线QQ、社交网络等多元的人性化服务渠道，实现了7*24小时的贴心用户服务，及时解答用户问题，提供借贷建议。</p>
                    </div>
                    <h3>办公环境</h3>
                    <div class="picList">
                        <img src="http://www.91.com/v1.1.0/img/about/pic1.jpg">
                        <img class="r" src="http://www.91.com/v1.1.0/img/about/pic2.jpg">
                        <img src="http://www.91.com/v1.1.0/img/about/pic3.jpg">
                        <img class="r" src="http://www.91.com/v1.1.0/img/about/pic4.jpg">
                        <img src="http://www.91.com/v1.1.0/img/about/pic5.jpg">
                        <img class="r" src="http://www.91.com/v1.1.0/img/about/pic6.jpg">
                        <img src="http://www.91.com/v1.1.0/img/about/pic7.jpg">
                        <img class="r" src="http://www.91.com/v1.1.0/img/about/pic8.jpg">
                    </div>
                    <!-- <h3>联系我们</h3>
                    <p>先智创科（北京）科技有限公司</p>
                    <p>总部地址：北京市西城区黄寺大街23号167幢 91金融大厦</p>
                    <p>上海地址：上海市浦东新区浦三路21弄55、56号银亿滨江中心1808室</p>
                    <p>邮政编码：100011</p>
                    <p>公司电话：400-000-0091</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--放大图片开始-->
<div class="shade"></div>
<div class="dialogWrap">
    <div class="dialogBox">
        <div class="hd"><i class="close">×</i></div>
        <div class="bd"><img src="http://www.91.com/v1.1.0/img/about/picBig1.jpg"></div>
    </div>
</div>
</div>
<!--放大图片结束-->


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
<script src="http://www.91.com/v1.1.0/js/about/about_main.js"></script>
</body>
</html>


<!doctype html>
<html>
{{-- 包含页头 --}}
@include('home.common.header')

{{-- 继承后插入的内容 --}}
@yield('content')


<!-- 底部 -->
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
<!-- 导入底部开始 -->

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
<script src="http://www.91.com/v1.1.0/js/homepage/homepage_main.js"></script>
</body>
</html>
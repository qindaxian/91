@extends('home.layouts.base')

@section('css')

<html>
<head>
    <meta charset="utf-8">
    <title>用户中心首页</title>
     <!-- 导入用户中心样式开始 -->
    <link href="/static/v1.1.0/css/user/user_setup_style.css" rel="stylesheet" type="text/css">
   <!-- 导入用户中心样式结束 -->
</head>
<body>

@endsection


@section('content')  

<div class="main">
    <div class="wrap clearfix">
<!-- 我的账户左侧导航开始 -->
<div class="minBox lbox">
    <div class="userImg"><img src="/static/v1.1.0/img/user/bg.png"></div>
    <ul class="uNav">
        <!-- 账户概况开始 -->
        <li>
            <p>
                <span class="icon icon1"></span>
                <a href="/user/account/get?code=0.05933390779914527" class=>账户概况</a>
            </p>            
        </li>
        <!-- 账户概况结束 -->
        <!-- 充值提现开始 -->
        <li>
            <p class="uNav_title"><span class="icon icon2"></span>充值提现</p>
            <ul class="dropdown-menu">
                <li><a href="/user/recharge/to?code=0.05933390779914527" class="checkStatusBtn">充值</a></li>
                <li><a href="/user/cash/new?code=0.05933390779914527" class="checkStatusBtn_payPwd">提现</a></li>
            </ul>
        </li>
        <!-- 充值提现结束 -->
        <!-- 借贷管理开始 -->
        <li>
            <p class="uNav_title"><span class="icon icon3"></span>借贷管理</p>
            <ul class="dropdown-menu">
                <li>
                <a href="/user/financial/chart?code=0.05933390779914527" class=>借贷记录</a></li>
                <li><a href="/user/financial/detail?code=0.05933390779914527" class=>交易明细</a></li>
                <li><a id="autotender" href="/user/financial/autotender?code=0.05933390779914527" class=>自动出借</a></li>
            </ul>
        </li>
        <!--借贷管理结束 -->
        <!--我的佣金开始 -->
        <li>
            <p><a href="/user/commission?code=0.05933390779914527" class=><span class="icon icon8"></span>我的佣金</a>
            </p>
        </li>
        <!-- 我的佣金结束 -->
        <!-- 红包奖励开始 -->
        <li>               
           <p><a href="/user/redbonus?code=0.05933390779914527" class=><span class="icon icon4"></span>红包礼券</a></p>
        </li>
        <!-- 红包奖励结束 -->
        <!-- 账户设置开始 -->
        <li>
            <p>
                <span class="icon icon5"></span>
                <a href="/user/setup?code=0.05933390779914527" class= active>账户设置</a>
            </p>
        </li>
        <!-- 账户设置结束 -->
        <!-- 风险测评开始 -->
        <li>
            <p><span class="icon icon6"></span><a href="/user/riskTest?code=0.05933390779914527" class=>风险测评</a></p>
        </li>
        <!-- 风险测评结束 -->
    </ul>
</div>
<!-- 用户中心左侧导航结束 -->
<!-- 设置一账通支付密码提示弹框开始 -->
<div class="shade"></div>
<div class="dialogBox hidden">
    <div class="dialogClose">×</div>
    <div class="dialogTitle">设置一账通支付密码</div>
    <div class="dialogCon">
        <p id="tipMsg"></p>
        <div class="row">
            <div class="inpBox">
                <input name="" type="button" class="obtn forget_pay_pwd" id="sub_oBtn" value="立即设置">
            </div>
        </div>
    </div>
</div> 
<!-- 设置一账通支付密码提示弹框结束 -->
        <div class="rbox">
            <div class="minBox">
                <div class="setupBox">
                    <div class="hd">账户安全等级：
                        <span class="low"><em></em></span> 低
                    </div>
                    <div class="bd">
                        <div class="redBox">
                            <h3>温馨提示：</h3>
                            <p>
                                为了您的账户资金安全，您在充值、出借前需要实名认证、绑定银行卡、修改支付密码。
                                <br/>
                                绑定银行卡方法：认证银行卡信息并开通快捷支付
                            </p>
                        </div>
                        <table>
                            <tr>
                                <td>1.绑定手机</td>
                                    <td width="300px"><div>您的手机号码：176****3120</div></td>
                                    <td><div class="tc"><i class="ico ico_over"></i>已认证</div></td>
                                    <td><!-- <div class="tc"><a href="javascript:void(0);" id="edit_phone">修改</a></div> --></td>
                            </tr>
                            <tr>
                                <td>2.登录密码</td>
                                <td>建议定期更换密码，且数字、字母至少包含两种的，长度为6-16个字符的密码。</td>
                                <td><div class="tc"><i class="ico ico_over"></i>已设置</div></td>
                                <td><div class="tc"><a href="javascript:void(0);" id="login_edit">修改</a></div></td>
                            </tr>
                            <tr>
                                <td>3.交易密码</td>
                                <td>进行出借支付时使用的密码</td>
                                <td><div class="tc" id="pwdStatus"><i class="ico ico_over"></i>已设置</div></td>
                                <td><div class="tc" id="paypwdBtn"><a href="javascript:void(0);" id="login_edit_pwd">修改/忘记</a></div></td>
                                <!-- <a href="javascript:void(0);" id="login_edit_pwd">修改</a> | <a href="javascript:void(0);" id="cz_pwd">忘记</a> -->
                            </tr>
                            <tr>
                                <td>4.实名认证</td>
                                <td id="identity">保障账户安全，证明身份</td>
                                <td><div class="tc" id="identityStatus"><i class="ico ico_alert"></i>未认证</div></td>
                                <td><div class="tc" id="identityBtn"><a href="javascript:void(0);" id="add_id">实名</a></div></td>
                            </tr>
                            <tr>
                                <td>5.绑定银行卡</td>
                                <td id="bankMsg">用绑定银行卡充值、提现</td>
                                <td><div class="tc" id="bindbankStatus"><i class="ico ico_alert"></i>未认证</div></td>
                                <td><div class="tc" id="bindbankBtn"><a href="javascript:void(0);" id="bank_id">绑卡</a></div></td>
                            </tr>
                            <tr>
                                <td>6.预留手机号</td>
                                <td id="bankTel">办理银行卡时预留的手机号</td>
                                <td><div class="tc" id="bankTelStatus"><i class="ico ico_alert"></i>未设置</div></td>
                                <td><div class="tc" id="bankTelBtn"><a href="javascript:void(0);" id="bankTel_id">设置</a></div></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 设置一账通支付密码提示弹框开始 -->
<div class="hidden" id="setPayPwd_vic">
    <div class="shade"></div>
    <div class="dialogBox ">
        <div class="dialogClose">×</div>
        <div class="dialogTitle">设置一账通支付密码</div>
        <div class="dialogCon">
            <p id="tipMsg1"></p>
            <div class="row">
                <div class="inpBox"><input name="" type="button" class="obtn " id="setPayPwd_vic_sub_oBtn"  value="立即设置"></div>
            </div>
        </div>
    </div>
</div>
<!-- 设置一账通支付密码提示弹框结束 -->
<!-- 更新预留手机号弹框开始 -->
<div class="hidden" id="setBankPhone">
    <div class="shade dialogMatte_new"></div>
    <div class="dialogBox dialogWrap_new">
        <div class="dialogClose_btn dialogClose">×</div>
        <div class="dialogTitle">更新预留手机号</div>
        <div class="dialogCon">
            <div class="row">
                <label>新手机号</label>
                <div class="inpBox">
                    <input name="BankPhone" class="inp" id="BankPhone" size="30" type="text" placeholder="请输入手机号码">
                </div>
                <div class="errorTip">
                </div>
            </div>
            <div class="row">
                <div class="inpBox"><input name="" type="button" class="obtn " id="setBankPhone_sub_oBtn"  value="确定"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

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
<!-- 导入用户中心对应js开始 -->
<script src="/static/v1.1.0/js/user/user_setup_main.js"></script>
<!-- 导入用户中心对应js开始 -->

@endsection

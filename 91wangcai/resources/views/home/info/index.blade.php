@extends('home.layouts.base')

@section('css')

<html>
<head>
<meta charset="utf-8">
<title>用户中心首页</title>
<!-- 导入用户中心样式开始 -->
<link href="/static/v1.1.0/css/user/user_style.css?t=1" rel="stylesheet" type="text/css">
<!-- 导入用户中心样式结束 -->
<!-- 分页样式 -->
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
                <a href="/home/info" class= active>账户概况</a>
            </p>            
        </li>
        <!-- 账户概况结束 -->
        <!-- 充值提现开始 -->
        <li>
            <p class="uNav_title"><span class="icon icon2"></span>充值提现</p>
            <ul class="dropdown-menu">
                <li><a href="/user/recharge/to?code=0.7536430006859203" class="checkStatusBtn">充值</a></li>
                <li><a href="/user/cash/new?code=0.7536430006859203" class="checkStatusBtn_payPwd">提现</a></li>
            </ul>
        </li>
        <!-- 充值提现结束 -->
        <!-- 借贷管理开始 -->
        <li>
            <p class="uNav_title"><span class="icon icon3"></span>借贷管理</p>
            <ul class="dropdown-menu">
                <li>
                <a href="/user/financial/chart?code=0.7536430006859203" class=>借贷记录</a></li>
                <li><a href="/detailAll" class=>交易明细</a></li>
                <li><a id="autotender" href="/user/financial/autotender?code=0.7536430006859203" class=>自动出借</a></li>
            </ul>
        </li>
        <!--借贷管理结束 -->
        <!--我的佣金开始 -->
        <li>
            <p><a href="/user/commission?code=0.7536430006859203" class=><span class="icon icon8"></span>我的佣金</a>
            </p>
        </li>
        <!-- 我的佣金结束 -->
        <!-- 红包奖励开始 -->
        <li>               
           <p><a href="/user/redbonus?code=0.7536430006859203" class=><span class="icon icon4"></span>红包礼券</a></p>
        </li>
        <!-- 红包奖励结束 -->
        <!-- 账户设置开始 -->
        <li>
            <p>
                <span class="icon icon5"></span>
                <a href="{{url('info/setup')}}" class=>账户设置</a>
            </p>
        </li>
        <!-- 账户设置结束 -->
        <!-- 风险测评开始 -->
        <li>
            <p><span class="icon icon6"></span><a href="/user/riskTest?code=0.7536430006859203" class=>风险测评</a></p>
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
            <div class="inpBox"><input name="" type="button" class="obtn forget_pay_pwd" id="sub_oBtn"  value="立即设置"></div>
        </div>
    </div>
</div> 
<!-- 设置一账通支付密码提示弹框结束 -->
        <div class="rbox">
            <div class="myData pb24 clearfix">
                
                <span class="slbox_text">闲钱不闲置，亲爱的财主，及时关注账户赚钱吧~</span>
                <div class="srbox"><a href="/user/recharge/to" class="uBtn checkStatusBtn">立即充值</a><a href="/user/cash/new" class="uBtn whiteBtn checkStatusBtn_payPwd">提现</a></div>
            </div>
            <div class="dataShow_wrap">
                <ul class="slider clearfix" id="slider">
                    <!-- 总资产开始 -->
                    <li class="fb">
                        <p class="data qbwc_total">--.--</p>
                        <div class="aMoney">
                            <p class="aMoney_p">您的总资产（元）</p>
                            <div class="wtMoney">
                                <div class="h_box">
                                    <div class="inside">
                                        <p>账户余额+冻结金额+普通项目待收+优先出借待收</p>
                                         <img src="/static/v1.1.0/img/user/tip.png"> 
                                    </div>
                                </div>
                                <img src="/static/v1.1.0/img/user/wt.png">
                            </div>
                        </div>
                    </li>
                    <li>
                        <P class="data getMoney">--.--</P>
                        <p>您已赚（元）</p>
                    </li>
                </ul>
                <!-- 总资产结束 -->
                <!-- 17期测试开始 -->
                <!-- <table class="slider_li">
                    <div class="re-money">
                        <ul class="clearfix">
                            <li>
                                <h4><i class="icon-vip1"></i>您已赚</h4>
                                
                                    <P>
                                        0.00元
                                    </P>
                                
                                

                            </li>
                            <li>
                                <h4><i class="icon-vip2"></i>累计出借</h4>
                                
                                    <P>
                                        0.00元
                                    </P>
                                
                                
                            </li>
                            <li>
                                <h4><i class="icon-vip3"></i>利息</h4>
                                <P>
                                    0.00元
                                </P>
                            </li>
                        </ul>
                    </div>
                </table> -->
                <!-- 17期测试结束 -->
                <table class="dataShow_table">
                    <tr>
                        <th>账户余额（元）
                            <div class="wt">
                                <div class="h_box">
                                    <div class="inside insideOne">
                                        <p>账户内出借人可自由支配的金额（也可理解为当前可提现的金额）</p>
                                         <img src="/static/v1.1.0/img/user/tip.png"> 
                                    </div>
                                </div>
                                <img src="/static/v1.1.0/img/user/wt.png">
                            </div>
                        </th>
                        <th>冻结金额（元）
                            <div class="wt">
                                <div class="h_box">
                                    <div class="inside">
                                        <p>出借尚未计息的金额+提现正在审核的金额</p>
                                         <img src="/static/v1.1.0/img/user/tip.png"> 
                                    </div>
                                </div>
                                <img src="/static/v1.1.0/img/user/wt.png">
                            </div>
                        </th>
                        <th>普通项目待收（元）
                            <div class="wt wt2">
                                <div class="h_box">
                                    <div class="inside">
                                        <p>回款中的普通项目出借本金+对应的利息</p>
                                         <img src="/static/v1.1.0/img/user/tip.png"> 
                                    </div>
                                </div>
                                 <img src="/static/v1.1.0/img/user/wt.png"> 
                            </div>
                        </th>
                        <th class="last">优先出借待收（元）
                            <div class="wt wt2">
                                <div class="h_box">
                                    <div class="inside">
                                        <p>回款中的优先出借项目加入本金+对应的利息</p>
                                         <img src="/static/v1.1.0/img/user/tip.png"> 
                                    </div>
                                </div>
                                <img src="/static/v1.1.0/img/user/wt.png">
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td class="qbwc_yue">--.--</td>
                        <td class="qbwc_frost">--.--</td>
                        <td class="qbwc_await">--.--</td>
                        <td class="last firstwc_await">--.--</td>
                    </tr>
                </table>
               
            </div>           
            <div class="tab h296">
                <ul class="hd clearfix">
                    <li class="active" id="recoveringIndex"><a href="javascript:void(0)">最近待收</a></li>
                    <li id="tenderedIndex"><a href="javascript:void(0)">最近交易</a></li>
                    <li id="first_plan"><a href="/user/financial/plan">优先出借</a></li>
                </ul>
                <div class="bd">
                    <div id="recovering">
                        <table class="tableA">
                             
                        </table>                       
                    </div>
                    <form id="accountForm" action="detail" method="POST">
                        <div id="tendered">
                            <table class="tableB">

                            </table>
                        </div>
                    </form>
                </div>
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


<!-- 数据展示 -->
<script src="/static/v1.1.0/js/user/jquery.js"></script> 
<script type="text/javascript">
    //最近待收  回款中
    $(function(){
        $.ajax({
            url:'/capital_detail_priority',
            type:'get',
            data:{pagenum:5},  //查询条数
            dataType:'json',
            success:function(json){
                var _data=json.data;
                if(json.status==200){
                    var _item_str="";
                    var _tz_middle=[];
                    var tableA="<thead><tr><th width='120'>项目</th><th width='130'>出借金额（元）</th><th width='130'>持有金额（元）</th><th width='80'>本期利息</th><th width='60'>期数</th><th width='120'>本期回款时间</th><th width='60' class='opera_qb'></th><th width='50'></th></tr></thead>";
                        _tz_middle.push(tableA);
                    if(_data.product.length==0){
                        var noneDate='<tr class="noneData"><td colspan="8">暂无数据</td></tr>';
                        _tz_middle.push(noneDate);
                    }

                for(var i=0;i<_data.product.length;i++) {
                    _tz_middle.push(noneDate);
                    var sj_bl = _data.product[i];
                    var _status = _data.product[i].tender_status;//投资 回款 已回款状态
                    var pro_style = _data.product[i].product_style;//判断类型

                    // 展示产品来源 0 散标；1 债权
                    if (sj_bl.show_product_from == 0) {
                        //回款中——待回款 已回款（出借金额+到期收益）
                        //加息券利息
                        var _all_money = Number(sj_bl.recover_account_interest) + Number(sj_bl.coupon_interest);//审核中-利息  回款中-本期利息  已回款-获得收益
                        var all_money = Number(_all_money).toFixed(2);//保留2位小数
                        switch (_status) {
                            case 2://回款中  end不显示期数
                                switch (pro_style) {
                                    case "end":
                                        //是否允许债转
                                        if (sj_bl.allow_credit == 0 && sj_bl.selling_status != 1) {//允许债权
                                            var _allow_credit = "<td><a href='javascript:void(0);' class='transferId' attrType='0' attrId='" + sj_bl.buy_nid + "'>转让</a></td>";
                                        } else {//不允许债权
                                            var _allow_credit = "<td></td>";
                                        }

                                        //项目 出借金额 到期收益 待回款 到期回款时间 操作
                                        _item_str = "<tr><td class='text'><a href='/view/borrow/" + sj_bl.product_nid + "'>" + sj_bl.name + "</a></td><td class='green'>" + sj_bl.origin_account + "</td><td class='green'>" + sj_bl.account + "</td><td>" + all_money + "</td><td>1/1</td><td>" + sj_bl.redeem_account_time + "</td><td><a href='/user/protocol/" + sj_bl.buy_nid + "'>协议书</a></td>" + _allow_credit + "</tr>";
                                        _tz_middle.push(_item_str);

                                        break;

                                    case "tid":
                                        //是否允许债转
                                        if (sj_bl.allow_credit == 0 && sj_bl.selling_status != 1) {//允许债权
                                            var _allow_credit = "<td><a href='javascript:void(0);' class='transferId' attrType='0' attrId='" + sj_bl.buy_nid + "'>转让</a></td>";
                                        } else {//不允许债权
                                            var _allow_credit = "<td></td>";
                                        }

                                        //项目 出借金额 到期收益 待回款 到期回款时间 操作
                                        _item_str = "<tr><td class='text'><a href='/view/borrow/" + sj_bl.product_nid + "'>" + sj_bl.name + "</a></td><td class='green'>" + sj_bl.origin_account + "</td><td class='green'>" + sj_bl.account + "</td><td>" + all_money + "</td><td>" + sj_bl.repay_account_times + "/" + sj_bl.product_period + "</td><td>" + sj_bl.redeem_account_time + "</td><td><a href='/user/protocol/" + sj_bl.buy_nid + "'>协议书</a></td>" + _allow_credit + "</tr>";
                                        _tz_middle.push(_item_str);
                                        break;
                                }
                                break;

                        }
                    } else {
                            //是否允许债转
                            if (sj_bl.allow_credit == 0 && sj_bl.selling_status != 1) {//允许债权
                                var _allow_credit = "<td><a href='javascript:void(0);' class='transferId' attrType='1' attrId='" + sj_bl.buy_nid + "'>转让</a></td>";
                            } else {//不允许债权
                                var _allow_credit = "<td></td>";
                            }

                            _item_str = "<tr><td class='text'><a href='/view/credit_assignment/" + sj_bl.id + "'>" + sj_bl.name + "</a></td><td class='green'>" + sj_bl.origin_account + "</td><td class='green'>" + sj_bl.account + "</td><td>" + sj_bl.recover_account_interest + "</td><td>1/1</td><td>" + sj_bl.redeem_account_time + "</td><td><a href='/user/protocol/credit_assignment/" + sj_bl.buy_nid + "'>协议书</a></td>" + _allow_credit + "</tr>";
                            _tz_middle.push(_item_str);
                        }
                }
                 _tz_middle.push("<tfoot><tr><td colspan='8' class='last'><a href='/user/financial/chart' class='link'>查看更多>></a></td></tr></tfoot>");
                //设置存本取息理财数据
                $(".tableA").html(_tz_middle.join(""));
                }
            }
        })
    })

    //点击最近交易
    $(document).on('click','#tenderedIndex',function(){
        $.ajax({
            url:'/detail',
            type:'get',
            data:{},
            dataType:'json',
            success:function(json){
                var _data=json.data;
                if(json.status==200){
                    var _item_str="";
                    var _tz_middle=[];
                    var tableB="<thead><tr><th width='90'>交易日期</th><th width='100'>交易金额（元）</th><th width='100'>账户余额（元）</th><th width='90'>交易类型</th><th width='120'>所属项目</th></tr></thead>";
                        _tz_middle.push(tableB);
                    if(_data.transaction.length==0){
                        var noneDate='<tr class="noneData"><td colspan="8">暂无数据</td></tr>';
                        _tz_middle.push(noneDate);
                    }
                    for (var i=0; i<_data.transaction.length; i++) {

                        var sj_bl = _data.transaction[i];

                        _item_str = "<tr><td class='text'>"+sj_bl.t_time+"</td><td class='green'>" + sj_bl.t_amount + "</td><td class='green'>" + sj_bl.t_balance + "</td><td>" + sj_bl.t_type + "</td><td>" + sj_bl.p_name + "</td></tr>";
                        _tz_middle.push(_item_str);
                    }
                    _tz_middle.push("<tfoot><tr><td colspan='8' class='last'><a href='/user/financial/chart' class='link'>查看更多>></a></td></tr></tfoot>");

                    $(".tableB").html(_tz_middle.join(""));
                }
            }
        })
    })
</script>
</div>
<!-- 导入用户中心对应js开始 -->
<script src="/static/v1.1.0/js/user/userIndex_main.js?t=5"></script>

<!-- 导入用户中心对应js结束 -->

@endsection


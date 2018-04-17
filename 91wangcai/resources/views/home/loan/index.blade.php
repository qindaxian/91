@extends('home.common.base')
@section('content')
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
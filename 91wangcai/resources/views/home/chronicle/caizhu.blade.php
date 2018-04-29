 @extends('home.common.base')   <!--header开始-->
 @section('content')
    <div class="daily_top">
        <div class="wrap">
            <ul class="daily_title clearfix">
                <li><a href="/chronicle">旺财日记</a></li>
                <li class="middle"></li>
                <li><a class="active" href="/caizhu">财主见面会</a></li>
            </ul>
            <ul id="dates" class="daily_time clearfix">
            </ul>
        </div>
    </div>
    <div class="main">
        <!-- loading开始 -->
        <div class="loadWrap">
            <span class="loadlogo"></span>
            <div class="loadBox"></div>
            <span class="loadText">正在加载...</span>
        </div>
        <!-- loading结束 -->
        <div class="wrapper hidden">
            <ul class="listYear clearfix" id="listYear">
            </ul>
            <!-- 分页信息开始 -->
            <div class="pageBox" id="pager"></div>
            <!-- 分页信息结束 -->
        </div>
        <!-- tab内容结束 -->
    </div>
@endsection

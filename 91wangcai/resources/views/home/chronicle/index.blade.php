@extends('home.common.base')
@section('content')
<div class="sideShade"></div>
<!-- 导入对应js开始 -->
<script src="http://www.91.com/v1.1.0/js/daily/index_main.js"></script>
<!-- 导入对应js开始 -->

{{--内容 旺财日记,财主见面会--}}
    <div class="daily_top">
        <div class="wrap">
            <ul class="daily_title clearfix">
                <li><a class="active" href="/home/notes">旺财日记</a></li>
                <li class="middle"></li>
                <li><a href="/home/caizhu">财主见面会</a></li>
            </ul>
            <ul id="dates" class="daily_time clearfix">
            </ul>
        </div>
    </div>
<!-- loading开始 -->
    <div class="loadWrap">
        <span class="loadlogo"></span>
        <div class="loadBox"></div>
        <span class="loadText">正在加载...</span>
    </div>
<!-- loading结束 -->

{{--内容 旺财日记,财主见面会--}}



<!--main开始-->
<div class="main hidden">
    <div class="timeline">
        <ul id="issues" class="clearfix">
        </ul>
    </div>
</div>

<!--main结束-->





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
@endsection('content')
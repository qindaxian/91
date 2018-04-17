



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户中心首页</title>
    <!-- 导入用户中心样式开始 -->
    <link href="{{ asset('/css/user_style.css') }}" rel="stylesheet" type="text/css">
    <!-- 导入用户中心样式结束 -->
</head>
<body>

{{-- 包含页头 --}}
@include('home.layouts.header')

{{-- 继承后插入的内容 --}}
@yield('content')

{{-- 包含页脚 --}}
@include('home.layouts.footer')


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
<script src="{{asset('/js/userIndex_main.js')}}"></script>
<!-- 导入用户中心对应js结束 -->
</body>
</html>

 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>91旺财旺财记事-记录旺财的点滴</title>
<meta name="keywords" content="91旺财，旺财，旺财记事，旺财成长">
<meta name="description" content="91旺财成长日记，旺财一点一滴的成长都是记录我们发展，每月定期举办财主见面会，已在北京、上海等地连续举办100期。">
<!-- 导入旺财日记样式开始 -->
<link rel="stylesheet" type="text/css" href="/static/v1.1.0/css/daily/daily_style.css?t=2">
<!-- 导入旺财日记样式结束 -->
    <!--header开始-->
 <?php $__env->startSection('content'); ?>
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
 


<script src="/static/v1.1.0/js/daily/caizhu_main.js"></script>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.common.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
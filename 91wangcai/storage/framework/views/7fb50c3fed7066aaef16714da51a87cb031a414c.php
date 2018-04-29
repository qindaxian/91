<!doctype html>
<html>

<?php echo $__env->make('home.common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('home.common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
<!-- <script src="http://www.91.com/v1.1.0/js/homepage/homepage_main.js"></script> -->
</body>
</html>
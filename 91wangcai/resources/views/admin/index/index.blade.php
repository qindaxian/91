@extends('admin.common.base')
@section('content')

<script type="text/javascript" src="http://www.91.com/admin/lib/jquery/jquery-1.8.2.min.js"></script>
    <section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> 
		<span class="c-999 en">&gt;</span>
		<span class="c-666">我的桌面</span> 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎使用91旺财后台控制</p>
			<p>历史登录次数：{{session('last_time')}}</p>
			<p>上次登录IP：{{session('admin')->a_end_ip}}  上次登录时间：{{date('Y-m-d H:i:s',session('admin')->a_end_time)}}</p>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr>
						<th colspan="7" scope="col">信息统计</th>
					</tr>
					<tr class="text-c">
						<th>统计</th>
						<th>资讯库</th>
						<th>产品库</th>
						<th>用户</th>
						<th>管理员</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-c">
						<td>总数</td>
						<td>{{$sum['diary_sum']}}</td>
						<td>{{$sum['project_sum']}}</td>
						<td>{{$sum['user_sum']}}</td>
						<td>{{$sum['admin_sum']}}</td>
					</tr>
					<tr class="text-c">
						<td>今日</td>
						<td>{{$day['diary_day']}}</td>
						<td>{{$day['project_day']}}</td>
						<td>{{$day['user_day']}}</td>
						<td>{{$day['admin_day']}}</td>
					</tr>
					<tr class="text-c">
						<td>昨日</td>
						<td>{{$yesterday['diary_yesterday']}}</td>
						<td>{{$yesterday['project_yesterday']}}</td>
						<td>{{$yesterday['user_yesterday']}}</td>
						<td>{{$yesterday['admin_yesterday']}}</td>
					</tr>
					<tr class="text-c">
						<td>本周</td>
						<td>{{$week['diary_week']}}</td>
						<td>{{$week['project_week']}}</td>
						<td>{{$week['user_week']}}</td>
						<td>{{$week['admin_week']}}</td>
					</tr>
					<tr class="text-c">
						<td>本月</td>
						<td>{{$month['diary_month']}}</td>
						<td>{{$month['project_month']}}</td>
						<td>{{$month['user_month']}}</td>
						<td>{{$month['admin_month']}}</td>
					</tr>
				</tbody>
			</table>
			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th width="30%">服务器计算机名</th>
						<td><span id="lbServerName">{{$_SERVER['APP_URL']}}</span></td>
					</tr>
					<tr>
						<td>服务器IP地址</td>
						<td>{{$_SERVER["SERVER_ADDR"]}}</td>
					</tr>
					<tr>
						<td>服务器域名</td>
						<td>{{$_SERVER['SERVER_NAME']}}</td>
					</tr>
					<tr>
						<td>服务器端口 </td>
						<td>{{$_SERVER['SERVER_PORT']}}</td>
					</tr>
					<tr>
						<td>本文件所在文件夹 </td>
						<td>{{__DIR__}}</td>
					</tr>
					<tr>
						<td>服务器操作系统 </td>
						<td>{{PHP_OS}}</td>
					</tr>
					<tr>
						<td>服务器脚本超时时间 </td>
						<td>{{get_cfg_var("max_execution_time")."秒 "}}</td>
					</tr>
					<tr>
						<td>服务器的语言种类 </td>
						<td>{{$_SERVER['HTTP_ACCEPT_LANGUAGE']}}</td>
					</tr>
					<tr>
						<td>服务器当前时间 </td>
						<td>{{date('Y-m-d H:i:s')}}</td>
					</tr>
					<tr>
						<td>当前程序占用内存 </td>
						<td>{{get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无"}}</td>
					</tr>
				</tbody>
			</table>
		</article>
		<footer class="footer">
			<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br> Copyright &copy;2015 H-ui.admin v3.0 All Rights Reserved.<br> 本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
		</footer>
	</div>
</section>

@endsection
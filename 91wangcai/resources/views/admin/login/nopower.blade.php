@extends('admin.common.base')
@section('content')

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> <span class="c-999 en">&gt;</span><span class="c-666">无权限</span></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<section class="page-404 minWP text-c">
			  <p class="error-title"><i class="Hui-iconfont va-m" style="font-size:80px">&#xe656;</i><span class="va-m">无权限</span></p>
			  <p class="error-description">不好意思，您访问的页面无权限~</p>
			  <p class="error-info">您可以：<a href="{{url()->previous()}}" class="c-primary">返回上一页</a><span class="ml-20">|</span><a href="{{url('admin/index')}}" class="c-primary ml-20">去首页</a></p>
			</section>
		</article>
	</div>
</section>

@endsection
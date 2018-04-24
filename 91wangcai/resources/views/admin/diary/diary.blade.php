@extends('admin.common.base')
@section('content')
<title>旺财日记列表</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		旺财资讯管理
		<span class="c-gray en">&gt;</span>
		旺财记事列表
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="text-c">
				日期范围：
				<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
			</div>
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				<a class="btn btn-primary radius" data-title="添加旺财记事" _href="article-add.html" onclick="article_add('添加旺财记事','{{url('admin/diary_add')}}','500px','500px')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加旺财记事</a>
				</span>
				<span class="r">共有数据：<strong>54</strong> 条</span>
			</div>
			<div class="mt-20">
				<table class="table table-border table-bordered table-bg table-hover table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">ID</th>
							<th>标题</th>
							<th width="80">封面图</th>
							<th width="80">标签</th>
							<th width="120">更新时间</th>
							<th width="75">类型</th>
							<th width="60">发布状态</th>
							<th width="60">浏览次数</th>
							<th width="120">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php for($i=0;$i<count($data);$i++){ ?>
							<tr class="text-c">
								<td><input type="checkbox" value="" name=""></td>
								<td><?= $i+1 ?></td>
								<td class="text-l">
									<u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看"><?= $data[$i]->d_title ?></u>
								</td>
								<td><img src="<?= $data[$i]->d_img ?>" width="150px"></td>
								<td><?= $data[$i]->d_label ?></td>
								<td><?= $data[$i]->d_time ?></td>
								<td><?= $data[$i]->d_type == 1 ? "旺财日记" : "财主见面会"; ?></td>
								<td class="td-status">
									<?= $data[$i]->d_status == 1 ? '<span class="label label-success radius">已发布</span>' : '<span class="label label-defaunt radius">已下架</span>'; ?>

								</td>
								<td><?= $data[$i]->d_num ?></td>
								<td class="f-14 td-manage">
									<?php if($data[$i]->d_status == 1){ ?>
									<a style="text-decoration:none" class="article_stop" id="{{$data[$i]->d_id}}" href="javascript:;" title="下架">
										<i class="Hui-iconfont">&#xe6de;</i>
									</a>
									<?php }else{ ?>
									<a style="text-decoration:none" class="article_start" id="{{$data[$i]->d_id}}" href="javascript:;" title="发布">
										<i class="Hui-iconfont">&#xe603;</i>
									</a>
									<?php } ?>
									<!-- <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','http://www.91.com/admin/diary_update','<?= $data[$i]->d_id ?>')" href="javascript:;" title="编辑">
										<i class="Hui-iconfont">&#xe6df;</i>
									</a> -->
									<a style="text-decoration:none" class="article_del" id='{{$data[$i]->d_id}}' href="javascript:;" title="删除">
										<i class="Hui-iconfont">&#xe6e2;</i>
									</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</article>
	</div>
</section>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="http://www.91.com/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<!-- <script type="text/javascript" src="http://www.91.com/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="http://www.91.com/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="http://www.91.com/admin/lib/jquery/jquery-1.8.2.min.js"></script>
<script>

/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
// function article_edit(title,url,id,w,h){
// 	var index = layer.open({
// 		type: 2,
// 		title: title,
// 		content: url
// 	});
// 	layer.full(index);
// }
/*资讯-删除*/
$('.article_del').click(function(){
	var res = confirm('确认要删除吗？');
	var obj = $(this);
	if(res){
		var id = $(this).attr('id');
		$.ajax({
			url: "{{url('admin/diary_del')}}",
			type: "get",
			data:{
				id:id,
				_token:"{{csrf_token()}}"
			},
			dataType: 'json',
			success:function(data){
				if(data == 1){
					obj.parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}
				else{
					alert('下架失败');
				}
			}
		});
	}
});

/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*资讯-下架*/
$('.article_stop').click(function(){
	var res = confirm('确认要下架吗？');
	var obj = $(this);
	if(res){
		var id = $(this).attr('id');
		$.ajax({
			url: "{{url('admin/diary_stop')}}",
			type: "get",
			data:{
				id:id,
				_token:"{{csrf_token()}}"
			},
			dataType: 'json',
			success:function(data){
				if(data == 1){
					obj.parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="article_start" id="'+id+'" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
					obj.parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
					obj.remove();
					layer.msg('已下架!',{icon: 5,time:1000});
				}
				else{
					alert('下架失败');
				}
			}
		});
	}
});

/*资讯-发布*/
$('.article_start').click(function(){
	var res = confirm('确认要发布吗？');
	var obj = $(this);
	if(res){
		var id = $(this).attr('id');
		$.ajax({
			url: "{{url('admin/diary_start')}}",
			type: "get",
			data:{
				id:id,
				_token:"{{csrf_token()}}"
			},
			dataType: 'json',
			success:function(data){
				if(data == 1){
					obj.parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="article_stop" id="'+id+'" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
					obj.parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
					obj.remove();
					layer.msg('已发布!',{icon: 6,time:1000});
				}
				else{
					alert('发布失败');
				}
			}
		});
	}
});
/*资讯-申请上线*/
function article_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
@endsection
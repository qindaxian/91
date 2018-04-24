@extends('admin.common.base')
@section('content')
<div class="page-container" style="margin-left: 200px; ">
	<h1 style="border: 2px solid black; border-radius: 50px; text-align: center;margin-bottom:20px; background-color: #DCDCDC;">贷款资格申请</h1>
	<form action="" method="post" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请人：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?= session('admin')->a_name; ?>" placeholder="" id="" name="" disabled>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>真实姓名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="" name="real_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>身份证号：</label>
			<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="" name="id_card">
			</div>
		</div>
		{{ csrf_field() }}
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input type="submit" class="btn btn-primary radius" value="保存并提交审核">
				<input type="reset" class="btn btn-default radius" value="取消">
			</div>
		</div>
	</form>
</div>
@endsection

<script type="text/javascript" src="http://www.91.com/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="http://www.91.com/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="http://www.91.com/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="http://www.91.com/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<script>
</script>


@extends('admin.common.base')
@section('content')
<style>
	.input-text{width: 400px;}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
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
				<input type="text" class="input-text" value="" placeholder="" id="real_name" name="real_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>身份证号：</label>
			<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="" placeholder="" id="id_card" name="id_card">
			</div>
		</div>
		{{ csrf_field() }}
		<div class="row cl" style="margin-top: 50px;">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input type="submit" class="btn btn-primary radius" value="保存并提交审核">
				<input type="reset" class="btn btn-default radius" value="取消">
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="http://www.91.com/admin/lib/jquery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="http://www.91.com/js/tip.jquery.js"></script>
<script>
	var submit_name = false;
	var submit_idcard = false;
	$("#id_card").blur(function(){
		var obj=$(this);
		id_card=obj.val();
		if (id_card == '') {
			obj.tip({message:'身份证不能为空',bgColor:'#FFB6C1',color:'black',position:'right center'});
			 return submit_idcard=false;
		}
		if (id_card.length != 18){
			obj.tip({message:'身份证必须为18位',bgColor:'#FFB6C1',color:'black',position:'right center'});
			 return submit_idcard=false;
		}
		$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		$.ajax({
			url:"{{url('admin/qualification_ajax')}}",
			data:{
				id_card:id_card
			},
			type:'post',
			dataType:"json",
			success:function(data){
				if (data.status) {
					obj.tip({message:data.msg,bgColor:'#90EE90',color:'black',position:'right center'});
					return submit_idcard=true;
				}else{
					obj.tip({message:data.msg,bgColor:'#FFB6C1',color:'black',position:'right center'});
					return submit_idcard=false;
				}
			}
		})
	})

	$("#real_name").blur(function(){
		var obj=$(this);
		real_name=obj.val();
		if (real_name == '') {
			obj.tip({message:'真实姓名不能为空',bgColor:'#FFB6C1',color:'black',position:'right center'});
			 return submit_name=false;
		}
		else if(!isNaN( real_name )){
			obj.tip({message:'真实姓名不能输入数字',bgColor:'#FFB6C1',color:'black',position:'right center'});
			 return submit_name=false;
		}
		else if (real_name.length  > 4 || real_name.length==1){
			obj.tip({message:'真实姓名不能大于5位小于一位',bgColor:'#FFB6C1',color:'black',position:'right center'});
			 return submit_name=false;
		}
		else{
			obj.tip({message:'可以使用',bgColor:'#90EE90',color:'black',position:'right center'});
			return submit_name=true;
		}

	})

	$("#form-article-add").on("submit",function(event){
            if(submit_name&&submit_idcard){
            }else{
            	$("#real_name").trigger("blur");
            	$("#id_card").trigger("blur");
			 	return false;
            }
        })
</script>
@endsection
<script type="text/javascript" src="http://www.91.com/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="http://www.91.com/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>


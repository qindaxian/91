@extends('admin.common.base')
@section('content')
        <link rel="stylesheet" type="text/css" href="{{asset('admin/css/xcConfirm.css')}}"/>
        <script src="{{asset('admin/js/jquery-1.9.1.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{asset('admin/js/xcConfirm.js')}}" type="text/javascript" charset="utf-8"></script>
        <style type="text/css">
            .sgBtn{width: 135px; height: 35px; line-height: 35px; margin-left: 10px; margin-top: 10px; text-align: center; background-color: #0095D9; color: #FFFFFF; float: left; border-radius: 5px;}
        </style>
<script type="text/javascript" src="{{asset('')}}admin/lib/jquery/jquery-1.8.2.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="page-container" style="margin-left: 200px; ">
        <h1 style="border: 2px solid black; border-radius: 50px; text-align: center;margin-bottom:20px; background-color: #DCDCDC;">贷款项目申请</h1>
        <form  class="form form-horizontal" id="form-article-add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请人：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?= session('admin')->a_name; ?>" placeholder="" id="z_name" name="" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>贷款金额：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="最少申请10000最多申请1000000" id="z_money" name="">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>项目预期年利率：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="请输入6-8任何值" id="z_rate" name="">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>项目贷款金额：</label>
                <div class="formControls col-xs-8wwwwwww col-sm-9">
                    <select name="" class="input-text" id="z_state">
                        <option value="0" > 普通</option>
                        <option value="1" > 优先</option>
                    </select>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>项目贷款期限：</label>
                <div class="formControls col-xs-8wwwwwww col-sm-9">
                    <select name="" class="input-text" id="z_date">
                        <option value="60" > 60天</option>
                        <option value="80" > 80天</option>
                        <option value="100" > 100天</option>
                    </select>
                </div>
            </div>
            <div class="row cl">
                
                <div class="formControls col-xs-8 col-sm-9">
                    
                </div>
            </div>

            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <input type="button" id="btn" class="btn btn-primary radius" value="保存并提交审核">
                    <input type="reset" class="btn btn-default radius" value="取消">
                </div>
            </div>
           
        </form>
    </div>
    <script type="text/javascript" >
        

    $(function(){
        var obj = $(this);
        $('#btn').click(function(){
            var z_name = $('#z_name').val();
            var z_rate = $('#z_rate').val();
            var z_money = $('#z_money').val();
            var z_state = $('#z_state').val();
            var z_date = $('#z_date').val();
            
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                url:"{{url('admin/applyproject_add')}}",
                data:{
                     z_name:z_name,z_rate:z_rate,z_money:z_money,z_state:z_state,z_date:z_date
                },
                type:"post",
                // dataType:"json",
                success:function(msg) {
                    
                    window.wxc.xcConfirm(msg, window.wxc.xcConfirm.typeEnum.warning);
                  
                }

            })

        })

    })

    </script>
@endsection

<script type="text/javascript" src="{{asset('admin/lib/webuploader/0.1.5/webuploader.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/lib/ueditor/1.4.3/ueditor.config.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/lib/ueditor/1.4.3/ueditor.all.min.js')}}"> </script>
<script type="text/javascript" src="{{asset('admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js')}}"></script>



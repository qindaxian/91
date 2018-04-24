@extends('admin.common.base')
@section('content')
    <div class="page-container" style="margin-left: 200px; ">
        <h1 style="border: 2px solid black; border-radius: 50px; text-align: center;margin-bottom:20px; background-color: #DCDCDC;">贷款项目申请</h1>
        <form action="{{url('admin/ApplyProject')}}" method="post" class="form form-horizontal" id="form-article-add">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请人：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="<?= session('admin')->a_name; ?>" placeholder="" id="" name="" disabled>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>贷款金额：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="最少申请10000最多申请100000" id="" name="money">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>项目预期年利率：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="请输入6-8任何值" id="" name="rate">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>项目贷款金额：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <select name="state" class="input-text">
                        <option value="0" > 普通</option>
                        <option value="1" > 优先</option>
                    </select>

                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    {{ csrf_field() }}
                </div>
            </div>

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


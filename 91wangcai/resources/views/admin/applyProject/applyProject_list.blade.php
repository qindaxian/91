@extends('admin.common.base')
@section('content')
    
    <script type="text/javascript" src="{{asset('admin/lib/jquery/jquery-1.8.2.min.js')}}"></script>
    <script>
        $(function () {

            $(document).on('click','.btn',function () {
                var obj = $(this);
                var u_id = obj.parent().parent().find('.u_id').val();
                var ap_id = obj.parent().parent().find('#ap_id').html();
                var status = obj.parent().parent().find('#status').val();
             
                if(status == 2){
                    alert('此项目正在进行中，如若要停止请电联超级管理员'); return;
                }else if(status == 1){
                    alert('此项目已驳回，用户正在修整'); return;
                }else{
                     $.ajax({
                        url:"{{url('admin/ProductAdd')}}",
                        data:{
                            user_id:u_id,ap_id:ap_id
                            },
                        type:'get',
                        success:function (msg) {
                            alert(msg)
                    }

                    })
               }
            })


            $(document).on('click','#delBtn',function(){
                
                var obj = $(this);
                var u_id = obj.parent().parent().find('.u_id').val();
                var ap_id = obj.parent().parent().find('#ap_id').html();
                var status = obj.parent().parent().find('#status').val();
                
                if(status == 2){
                    alert('此项目正在进行中，如若要停止请电联超级管理员'); return;
                }else if(status == 1){
                    alert('此项目已驳回，用户正在修整'); return;
                }else{
                    $.ajax({
                        url:"{{url('admin/applyProductdel')}}",
                        data:{
                            ap_id:ap_id
                            },
                        type:'get',
                        success:function (msg) {
                            alert(msg)
                    }
                    })
                }
            })

        })
    </script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js" ></script>
    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
            <span class="c-gray en">&gt;</span>
            申请管理
            <span class="c-gray en">&gt;</span>
            申请列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> </nav>
        <div class="Hui-article">
            <article class="cl pd-20">
                <div class="text-c"> 日期范围：
                    <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">

                    <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
                    <input type="text" class="input-text" style="width:250px" placeholder="输入申请名称" id="" name="">
                    <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
                </div>
                <div class="cl pd-5 bg-1 bk-gray mt-20">
                    <span class="l"> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span>
                    <span class="r">共有数据：<strong>{{ $num }}</strong> 条</span>
                </div>
                <table class="table table-border table-bordered table-bg">
                    <thead>
                    <tr>
                        <th scope="col" colspan="9">申请列表</th>
                    </tr>
                    <tr class="text-c">
                        <th width="25"><input type="checkbox" name="" value=""></th>
                        <th width="40">ID</th>
                        <th width="150">申请人</th>
                        <th width="90">申请金额</th>
                        <th width="130">申请时间</th>
                        <th width="100">项目类型</th>
                        <th width="100">是否已启用</th>
                        <th width="100">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                         @foreach ($res as $val)
                        <tr class="text-c">
                            <td><input type="checkbox" value="" name=""></td>
                            <td id="ap_id">{{ $val['ap_id'] }}</td>
                            <td>{{ $val['apply_name'] }}</td>
                            <td>{{ $val['ap_pro_money'] }}</td>
                            <td>{{ $val['ap_pro_time'] }}</td>
                            <input class="u_id" type="hidden" value="{{ $val['user_id'] }}">
                            <td class="td-status">
                                @if ($val['ap_pro_state'] == 0)
                                    <span class="label label-success radius">普通项目</span>
                                @else
                                    <span class="label label-success radius">优先项目</span></td>
                                @endif
                            <td class="td-status" >
                                <input type="hidden" id="status" value="{{$val['ap_pro_status']}}">
                                @if ($val['ap_pro_status'] == 1)
                                    <span class="label label-success radius">未通过</span>
                                @elseif ($val['ap_pro_status'] == 0)
                                    <span class="label radius">审核中</span></td>
                                @else 
                                <span  class="label label-success radius">进行中</span>
                                @endif
                            <td class="td-manage"><a style="text-dewcoration:none"  href="javascript:;" class="btn" title="通过"><i class="Hui-iconfont">&#xe631;</i></a>  <a title="退回" id="delBtn" href="javascript:;" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </article>
        </div>
    </section>
@endsection


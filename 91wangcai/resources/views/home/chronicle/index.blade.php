@extends('home.common.base')
@section('content')
<!-- loading开始 -->
<div class="loadWrap">
    <span class="loadlogo"></span>
    <div class="loadBox"></div>
    <span class="loadText">正在加载...</span>
</div>
<!-- loading结束 -->
<!--main开始-->
<div class="main hidden">
    <div class="timeline">
        <ul id="issues" class="clearfix">
        </ul>
    </div>
</div>
<!--main结束-->
@endsection('content')
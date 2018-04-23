<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		@foreach (session('powerArr') as $val)
    	<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> {{$val['parent_name']}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					@foreach ($val['data'] as $v)
					<li><a href="{{url((string)$v['url'])}}" title="{{$v['ap_content']}}">{{$v['ap_content']}}</a></li>
					@endforeach
				</ul>
			</dd>
		</dl>
		@endforeach
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
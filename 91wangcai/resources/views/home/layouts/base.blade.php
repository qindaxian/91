{{-- 继承后插入的css --}}
@yield('css')

{{-- 包含页头 --}}
@include('home.layouts.header')

{{-- 继承后插入的内容 --}}
@yield('content')


{{-- 包含页脚 --}}
@include('home.layouts.footer')


{{-- 继承后插入的js --}}
@yield('js')

</body>
</html>

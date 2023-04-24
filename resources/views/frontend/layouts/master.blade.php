<!doctype html>
<html lang="tr">
@include('frontend.layouts.head')
<body>
@include('frontend.layouts.navbar')
@include('frontend.layouts.header')
@yield('content')
@include('frontend.layouts.footer')
@include('frontend.layouts.foot')
</body>
</html>

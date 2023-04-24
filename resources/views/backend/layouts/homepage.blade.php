<!doctype html>
<html lang="tr">
@include('backend.layouts.head')
<body id="page-top">
<div id="wrapper">
    @include('backend.layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('backend.layouts.navbar')
            @yield('content')
        </div>
        @include('backend.layouts.footer')
    </div>
</div>
@include('backend.layouts.foot')
</body>
</html>

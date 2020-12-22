<?php
/**
 * views/layouts/main.blade.php
 * File layout chính của ứng dụng
 */
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    {{-- Khai báo biến có giá trị động trong
    layout bằng hàm yields của Blade--}}
    <title>@yield('page_title')</title>
    <link rel="stylesheet"
          href="{{ asset('css/app.css') }}"/>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="header">
    <h1>Đây là header</h1>

    @if (session()->has('success'))
        <h3 style="color: green">
            {{ session()->get('success') }}
        </h3>
    @endif

    {{--Show lỗi validate form tại đây--}}
    {{--LAravel tự tạo ra 1 biến errors chứa
    tất cả thông tin lỗi--}}
    @foreach ($errors->all() AS $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach()
</div>
<div class="main">
    @yield('content')
</div>
<div class="footer">
    <h1>Đây là footer</h1>
</div>
</body>
</html>

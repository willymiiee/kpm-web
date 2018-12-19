<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PT. Kembar Putra Makmur | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body>
    @include('frontend.modules.header')
    @yield('body')
    @include('frontend.modules.footer')
    <a data-scroll class="back-to-top hidden" href="#">
        <img src="/img/icon/arrow-up.svg">
    </a>
    <script src="{{ asset('js//vendor/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

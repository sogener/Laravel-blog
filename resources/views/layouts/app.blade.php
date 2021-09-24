<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<div class="container mt-4">
    <h1>@yield('header')</h1>
    <div class="navigation">
        <ul>
            @yield('navigation')
        </ul>
    </div>
    <div class="main">
        <div class="main__errors">
            @yield('errors')
        </div>
        <div class="main__inner">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>

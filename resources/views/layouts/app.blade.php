<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO --}}
    <meta name="description" content="sentraltukang demo app created by Ikhsannul Hijri">
    <meta name="keywords" content="sentraltukang, unico, toko bangunan">
    <meta name="author" content="Ikhsannul Hijri">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>sentraltukang by Ikhsannul Hijri</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Fontawesome --}}
    <link href="{{ asset('plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="bg-orange-100">
    <div id="app">
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
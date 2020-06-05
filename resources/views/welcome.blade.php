<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sentraltukang by Ikhsannul Hijri</title>

    {{-- SEO --}}
    <meta name="description" content="sentraltukang demo app created by Ikhsannul Hijri">
    <meta name="keywords" content="sentraltukang, unico, toko bangunan">
    <meta name="author" content="Ikhsannul Hijri">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="landing-page-container w-screen h-screen m-0 p-0 flex flex-col items-center justify-center">
        <div>
            <img src="{{ asset('img/sentraltukang-logo.png') }}" alt="">
        </div>
        <div>
            <h1 class="text-main-orange  text-2xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-center">This is
                demo app created by Ikhsannul Hijri</h1>
        </div>
        <div class="flex flex-col sm:flex-row mt-5">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('users')}}">
                <div
                    class="sm:ml-8 mt-4 sm:mt-0 border border-main-orange px-6 py-2 rounded-full bg-main-orange text-white text-xl text-center hover:bg-secondary-orange hover:text-white">
                    User List
                </div>
            </a>
            @else
            <a href="{{ route('login')}}">
                <div
                    class="sm:ml-8 mt-4 sm:mt-0 border border-main-orange px-6 py-2 rounded-full bg-main-orange text-white text-xl text-center hover:bg-secondary-orange hover:text-white">
                    Login
                </div>
            </a>
            @if (Route::has('register'))
            <a href="{{ route('register')}}">
                <div
                    class="sm:ml-8 mt-4 sm:mt-0 border border-main-green px-6 py-2 rounded-full bg-main-green text-white text-xl text-center hover:bg-secondary-green hover:text-white">
                    Register
                </div>
            </a>
            @endif
            @endauth
        </div>
        @endif

    </div>
</body>

</html>
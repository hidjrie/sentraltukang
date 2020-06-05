<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SentralTukang by Ikhsannul Hijri</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}

        <div class="landing-page-container w-screen h-screen m-0 p-0 flex flex-col items-center justify-center">
            <div>
                <img src="{{ asset('img/sentraltukang-logo.png') }}" alt="">
            </div>
            <div>
                <h1 class="text-main-orange  text-2xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-center">This is demo app created by Ikhsannul Hijri</h1>
            </div>
            <div class="flex flex-col sm:flex-row mt-5">
            <a href="{{ route('login')}}">
                 <div class="sm:ml-8 mt-4 sm:mt-0 border border-main-orange px-6 py-2 rounded-full bg-main-orange text-white text-xl text-center hover:bg-secondary-orange hover:text-white">
                    Login
                </div>
            </a>
            <a href="{{ route('register')}}">
                <div class="sm:ml-8 mt-4 sm:mt-0 border border-main-green px-6 py-2 rounded-full bg-main-green text-white text-xl text-center hover:bg-secondary-green hover:text-white">
                    Register
                </div>
            </a>
            </div>
        </div>
    </body>
</html>

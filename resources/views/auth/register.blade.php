@extends('layouts.app')

@section('content')
<div class="h-screen bg-white sm:bg-transparent flex flex-col">
    <div
        class="container h-100 sm:h-auto sm:min-h-35rem sm:w-7/12 md:w-10/12 lg:w-7/12 sm:mt-8 m-auto flex bg-white sm:shadow sm:shadow-md">
        <div class="hidden md:block w-6/12">
            <img src="img/sentraltukang-front.jpg" alt="" class="w-full h-full object-cover">
        </div>
        <div class="flex flex-col justify-center w-full md:w-6/12 p-5">
            <div class="mb-8">
                <img src="img/sentraltukang-logo.png" alt="" class="w-8/12 m-auto">
            </div>
            @include('includes.messages')
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-5">
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange"
                        value="{{ old('name') }}">
                </div>
                <div class=" mb-5">
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange"
                        value="{{ old('email') }}">
                </div>
                <div class=" mb-5">
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
                </div>
                <div class="mb-5">
                    <input type="password" name="password_confirmation" id="password-confirm"
                        placeholder="Confirm Password"
                        class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
                </div>
                <div class="mb-5">
                    <button type="submit"
                        class="w-full bg-main-orange rounded-md p-2 text-white hover:bg-secondary-orange shadow shadow-md focus:outline-none">Register</button>
                </div>
            </form>
            <a href="{{ route('login') }}">
                <div
                    class="w-full rounded-md p-2 text-main-orange shadow shadow-md border border-grey-400 text-center bg-white hover:bg-orange-100">
                    Login
                </div>
            </a>
        </div>
    </div>
</div>


@endsection
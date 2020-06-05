{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')

<div class="container w-full h-screen sm:h-auto sm:min-h-35rem sm:w-7/12 md:w-10/12 lg:w-7/12 sm:mt-8 m-auto flex bg-white shadow shadow-md">
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
                    <input type="text" name="name" id="name" placeholder="Name" class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
                </div>
                <div class="mb-5">
                    <input type="email" name="email" id="email" placeholder="Email" class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
                </div>
                <div class="mb-5">
                    <input type="password" name="password" id="password" placeholder="Password" class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
                </div>
                <div class="mb-5">
                    <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
                </div>
                <div class="mb-5">
                    <button type="submit" class="w-full bg-main-orange rounded-md p-2 text-white hover:bg-secondary-orange shadow shadow-md focus:outline-none">Register</button>
                </div>
            </form>
            <div>
                <a type="submit" href="{{ route('login') }}" class="w-full rounded-md p-2 text-main-orange shadow shadow-md border border-grey-400 text-center hover:bg-orange-100">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection

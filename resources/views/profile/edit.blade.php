@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<div class="w-full max-w-xs bg-white shadow shadow-md m-auto mt-4">
    <img src="{{ asset('img/avatar-placeholder.png') }}" alt="" class="w-full mb-5">

    <form role="form" action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <div class="mb-3 px-5">
            <input type="text" name="name" id="name" placeholder="Name"
                class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange"
                value="{{ $profile->name }}">
        </div>
        <div class="mb-5 px-5">
            <input type="password" name="password" id="password" placeholder="New Password"
                class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
        </div>
        <div class="mb-3 px-5">
            <input type="password" name="password_confirmation" id="password-confirm" placeholder="New Confirm Password"
                class="border-b-2 border-main-green w-full p-2 outline-none focus:border-main-orange">
        </div>
        <div class="mb-3 px-5">
            <button type="submit" href=""
                class="w-full rounded-md p-2 mb-5 text-main-orange shadow shadow-md border border-grey-400 text-center hover:bg-main-orange hover:text-white shadow shadow-md focus:outline-none"><i
                    class="fas fa-check"></i> Save Profile</button>
        </div>
    </form>
</div>

@endsection
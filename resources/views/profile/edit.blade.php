@extends('layouts.app')

@section('content')
@include('layouts.navbar')

<div class="w-full max-w-xs bg-white shadow shadow-md m-auto mt-4">
    <img src="@if($profile->image) {{ url('storage/'.$profile->image) }} @else {{ asset('img/avatar-placeholder.png')}} @endif"
        alt="" class="w-full mb-5">

    <form role="form" action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="mb-3 px-5">
            <label id="image"
                class="items-center p-2 bg-white text-blue tracking-wide block w-100 uppercase border-2 border-main-green cursor-pointer hover:bg-main-green hover:text-white">
                <span class="mt-2 text-base leading-normal"><i class="fas fa-cloud-upload-alt"></i> Select Image
                    Profile</span>
                <input type='file' name="image" id="image" class="hidden" accept="image/*" />
            </label>
        </div>

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
        <input type="hidden" name="old_image" value="{{ $profile->image }}">
        <div class="mb-3 px-5">
            <button type="submit" href=""
                class="w-full rounded-md p-2 mb-5 text-main-orange shadow shadow-md border border-grey-400 text-center hover:bg-main-orange hover:text-white shadow shadow-md focus:outline-none"><i
                    class="fas fa-check"></i> Save Profile</button>
        </div>
    </form>
</div>

@endsection
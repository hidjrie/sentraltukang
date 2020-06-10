@extends('layouts.app')

@section('content')

@include('layouts.navbar')
<h1 class="text-center mt-3 mb-2 text-2xl text-main-orange uppercase">Your Profile</h1>
<div class="w-full max-w-xs bg-white shadow shadow-md m-auto my-4">
    @include('includes.messages')
    <img src="{{ asset('img/avatar-placeholder.png')}}" alt="avatar" class="w-full mb-3">
    <div class="px-5">
        <h3 class="text-main-orange text-lg md:text-md font-semibold">{{ $profile->name}}</h3>
    </div>
    <div class="px-5 pt-3 text-gray-700"><i class="far fa-envelope"></i> {{ $profile->email }}</div>
    <div class="px-5 pt-3 text-gray-700"> <i class="far fa-clock"></i>
        Registered since {{ \Carbon\Carbon::parse($profile->created_at)->isoFormat('d MMMM Y')}}</div>
    <div class="p-5">
        <a href="{{ route('profile.edit', $profile) }}">
            <div
                class="w-full rounded-md p-2 text-main-green shadow shadow-md border border-grey-400 text-center hover:bg-main-green hover:text-white">
                <i class="fas fa-cog"></i> Edit Profile
            </div>
        </a>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
@include('layouts.navbar')
    
<div class="w-full max-w-xs bg-white shadow shadow-md m-auto mt-4">
    <img src="@if($profile->image) {{ url('storage/'.$profile->image) }} @else img/avatar-placeholder.png @endif" alt="avatar" class="w-full mb-3">
    <div class="px-5">
        <h3
              class="text-main-orange text-lg md:text-md font-semibold"
            >{{ $profile->name}}</h3>
    </div>
    <div class="px-5 pt-3 text-gray-700"><i class="far fa-envelope"></i> {{ $profile->email }}</div>
    <div class="px-5 pt-3 text-gray-700"> <i class="far fa-clock"></i>
        Registered since {{ \Carbon\Carbon::parse($profile->created_at)->isoFormat('d MMMM Y')}}</div>
    <div class="p-5">
    <a type="submit" href="{{ route('profile.edit', $profile) }}" class="w-full rounded-md p-2 text-main-green shadow shadow-md border border-grey-400 text-center hover:bg-main-green hover:text-white"><i class="fas fa-cog"></i> Edit Profile</a>
    </div>
</div>
@endsection
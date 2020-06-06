@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<p class="bg-main-orange mb-5 p-2 text-white">
    <i class="fas fa-exclamation-triangle"></i> {{ $error }}</p>
@endforeach
@endif
@if (session()->has('message'))
<div class="w-100 bg-main-green p-2 m-0 text-white">{{ session('message') }}</div>
@endif
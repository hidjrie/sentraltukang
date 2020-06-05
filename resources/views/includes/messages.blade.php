@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<p class="bg-main-orange mb-5 p-2 text-white">
    <i class="fas fa-exclamation-triangle"></i> {{ $error }}</p>
@endforeach
@endif
@if (session()->has('message'))
<p class="alert alert-success">{{ session('message') }}</p>
@endif
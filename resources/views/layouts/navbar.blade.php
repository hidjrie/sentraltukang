<nav class="border-b border-main-green">
    <div class="container mx-auto flex flex-col sm:flex-row items-center justify-between px-4 py-3">
        <ul class="flex flex-col sm:flex-row items-center">
            <li>
                <a href="{{ url('/') }}"><img src="{{ asset('img/sentraltukang-logo.png')}}" alt="" class="w-32"></a>
            </li>
            <li class="sm:ml-16 mt-3 sm:mt-0">
                <a href="{{ route('user.index') }}"
                    class="{{ Request::is('users*') ? 'text-main-orange' : 'text-main-brown' }} hover:text-main-orange">User
                    List</a>
            </li>
            <li class="sm:ml-6 mt-3 sm:mt-0">
                <a href="{{ route('profile.show') }}"
                    class="{{ Request::is('profile*') ? 'text-main-orange' : 'text-main-brown' }} hover:text-main-orange">Profile</a>
            </li>
        </ul>
        <div class="flex flex-col sm:flex-row items-center">
            <div class="sm:ml-4 mt-3 sm:mt-0 flex">
                <a href="{{ route('profile.show') }}"><img
                        src="@if(Auth::user()->image) {{ url('storage/'.Auth::user()->image) }} @else {{ asset('img/avatar-placeholder.png')}} @endif"
                        class="rounded-full w-8 h-8"></a>
                <a href="{{ route('profile.show') }}">
                    <div class="ml-2 mt-1 text-main-brown hover:text-main-orange">{{ Auth::user()->name }}</div>
                </a>
            </div>
            <div
                class="sm:ml-8 mt-4 sm:mt-0 border border-main-orange px-2 py-1 rounded-full text-main-orange hover:bg-main-orange hover:text-white">
                <a href="{{ route('logout') }} " onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>
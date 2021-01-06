<div class="sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden top-0 right-0 px-6 py-4 sm:block">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

</div>

<!-- Start Top Bar -->
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
                @if (Route::has('login'))
                 <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    @foreach(['home', 'clients', 'reservations'] as $route)
                    <a href="{{ route($route) }}">@lang($route)</a>
                @endforeach
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                    @foreach(['home', 'clients'] as $route)
                        <a href="{{ route($route) }}">@lang($route)</a>
                @endforeach
                @endauth
            </div>
        @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->

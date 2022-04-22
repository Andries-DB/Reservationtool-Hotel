<!-- Start Top Bar -->
<div class="p-10 bg-green-300">
    <div>
        <div>
            <ul>
                @if (Route::has('login'))
                 <div class="top-0 sm:block">
                @auth
                    @foreach(['home', 'clients', 'reservations'] as $route)
                    <a class="  text-l text-black hover:underline uppercase pl-20" href="{{ route($route) }}">@lang($route)</a>
                @endforeach
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-l text-black hover:underline uppercase pl-20" type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-l text-black hover:underline uppercase pl-20">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class=" text-l text-black hover:underline uppercase pl-20">Register</a>
                    @endif
                    @foreach(['home'] as $route)
                        <a class="text-l text-black hover:underline uppercase pl-20" href="{{ route($route) }}">@lang($route)</a>
                @endforeach
                @endauth
            </div>
        @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->

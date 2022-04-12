<!-- Start Top Bar -->
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
                @foreach(['home', 'clients', 'reservations', 'dashboard'] as $route)
                    <li role="menuitem" class="{{ request()->routeIs($route . '*') ? 'active' : '' }}">
                        <a href="{{ route($route) }}">@lang('app.header.' . $route)</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->

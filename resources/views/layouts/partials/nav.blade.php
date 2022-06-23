<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a href="/" class="mt-3">
            <img src="{{ asset('/images/sau-brandmark-horizontal-blue.svg') }}" width="320" alt="Servers Australia">
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="/" class="navbar-item">Buy</a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Hotel Actions</a>
                <div class="navbar-dropdown">
                    <a href="{{ route('hotels.index') }}" class="navbar-item">View hotels</a>
                    <a href="{{ route('hotels.create') }}" class="navbar-item">Create a hotel</a>
                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('login') }}" class="button is-white"> {{ __('Log In') }}</a>
                        <a href="{{ route('register') }}" class="button is-primary">{{ __('Sign Up') }}</a>

                    @else
                        <p class="pr-5">Logged In:{{ Auth::user()->name }}</p>
                        <a href="{{ route('logout') }}" class="button is-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

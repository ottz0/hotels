<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.head')
<body>
    <div id="app">
        <div class="container">
            @include('layouts.partials.nav')
            @if(session('status'))
            <article class="message is-primary">
                <div class="message-body">
                    {{ session('status') }}
                </div>
              </article>
            @endif
            @yield('content')
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

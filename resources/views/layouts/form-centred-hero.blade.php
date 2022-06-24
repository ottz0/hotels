<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.head')
<body>
    <div id="app">
        <section class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__dark">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 is-offset-2" style="margin-top:80px;">
                        <div class="has-text-centered">
                            <figure><img src="{{ asset('/images/sau-brandmark-horizontal-blue.svg') }}" width="320" alt="Servers Australia"></figure>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                         @yield('content')
                    </div>
                </div>
            </div>
            <!-- Mini Carousel -->
            <div class="sau-c-mini-carousel__wrapper">
                <img src="/images/wave.svg" alt="wave" style="margin-bottom:-50px; margin-top:180px;" />
            </div>
        </section>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

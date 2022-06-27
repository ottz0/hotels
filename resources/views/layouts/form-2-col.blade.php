<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials.head')
<body>
    <div id="app">
        <section class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--gray" style="min-height:100vh;">
            <div class="container">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <nav class="level" style="position:relative; top:60px;">
                            <div class="level-item has-text-centered">
                              <figure><a href="/"><img src="{{ asset('/images/sau-brandmark-horizontal-blue.svg') }}" width="300" alt="Servers Australia"></a></figure>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="columns is-multiline">
                    <div class="column is-8 is-offset-2 register">
                    <div class="columns">
                        <div class="column left">
                            <!-- content -->
                            @yield('content')
                            <!-- /content -->
                        </div>
                        <div class="column right has-text-centered">
                            <!-- form -->
                            @yield('section-form')
                            <!-- /form -->
                            <p class="sau-u-font__size--xs pt-5">By providing your details you agree that Servers Australia may contact you about relevant services and offers as governed by our <br /><a href="#">Privacy Policy</a>.</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="columns" style="margin-top:-40px">
                    <div class="column">
                        <div class="column is-8 is-offset-2">
                            <br>
                            <nav class="level">
                              <div class="level-left">
                                <div class="level-item">
                                    <span class="icon">
                                        <a href="/about-us/contact-us" target="_blank"><i class="fas fa-envelope"></i></a>
                                    </span> &emsp;
                                    <span class="icon">
                                        <a href="https://www.facebook.com/ServersAustralia" target="_blank"><i class="fab fa-facebook"></i></a>
                                    </span> &emsp;
                                    <span class="icon">
                                        <a href="https://www.linkedin.com/company/servers-australia/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </span> &emsp;
                                    <span class="icon">
                                        <a href="https://twitter.com/serversau" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </span> &emsp;
                                    <span class="icon">
                                        <a href="https://www.youtube.com/channel/UC-1xNkTHOgWemJDv-E261dQ" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </span> &emsp;
                                </div>
                              </div>
                              <div class="level-right">
                                <small class="level-item" style="color: var(--textLight)">
                                    <p class="sau-u-font__size--sm">&copy; 2022 Servers Australia<sup>&reg;</sup>. All Rights Reserved. ABN: 98 125 037 443</p>
                                </small>
                              </div>
                            </nav>
                          </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

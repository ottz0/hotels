<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.partials.head')
<body class="has-background-light" style="height: 100vh;">
    <div id="app">
        <div class="container">
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <nav class="level" style="position:relative; top:60px;">
                        <div class="level-item has-text-centered">
                          <figure><img src="{{ asset('/images/sau-brandmark-horizontal-blue.svg') }}" width="320" alt="Servers Australia"></figure>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="columns is-multiline">
                <div class="column is-8 is-offset-2 register">
                <div class="columns">
                    <div class="column left">
                        <h1 class="is-size-1 has-text-weight-bold" style="line-height:46px;">MySAU Online Portal</h1>
                        <h2 class="subtitle colored is-4">Online access to purchase and configure your services</h2>
                        <p>Start, stop and power cycle your server, show CPU usage and event logs. Access payment and billing information. Get free access to our MySAU online Portal.</p>
                    </div>
                    <div class="column right has-text-centered">
                        <!-- form -->
                        @yield('section-form')
                        <!-- /form -->
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
                                <i class="fab fa-twitter"></i>
                              </span> &emsp;
                              <span class="icon">
                                <i class="fab fa-facebook"></i>
                              </span> &emsp;
                              <span class="icon">
                                <i class="fab fa-instagram"></i>
                              </span> &emsp;
                              <span class="icon">
                                <i class="fab fa-github"></i>
                              </span> &emsp;
                              <span class="icon">
                                <i class="fas fa-envelope"></i>
                              </span>
                            </div>
                          </div>
                          <div class="level-right">
                            <small class="level-item" style="color: var(--textLight)">
                              &copy; Servers Austrlalia &reg;. All Rights Reserved.
                            </small>
                          </div>
                        </nav>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

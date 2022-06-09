<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css" integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
              </a>

              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
              <div class="navbar-start">
                <a href="#" class="navbar-item">
                  Home
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link">
                    Hotel Actions
                  </a>

                  <div class="navbar-dropdown">
                    <a href="{{ route('hotels.index') }}" class="navbar-item">
                      View hotels
                    </a>
                    <a href="{{ route('hotels.create') }}" class="navbar-item">
                      Create a hotel
                    </a>
                  </div>
                </div>
              </div>

              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="buttons">
                    <a class="button is-primary">
                      <strong>Sign up</strong>
                    </a>
                    <a class="button is-light">
                      Log in
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        <div class="container">
            @if(session('status'))
            <article class="message is-primary">
                <div class="message-body">
                    {{ session('status') }}
                </div>
              </article>
            @endif
            @yield('content')
        </div>
    </body>
</html>

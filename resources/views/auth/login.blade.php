@extends('layouts.blank')

@section('content')
<div class="columns">
    <div class="column is-8 is-offset-2">
        <nav class="level" style="position:relative; top:150px;">
            <div class="level-item has-text-centered">
              <figure><img src="{{ asset('/images/sau-brandmark-horizontal-blue.svg') }}" width="320" alt="Servers Australia"></figure>
            </div>
        </nav>
    </div>
</div>
<section class="container">
    <div class="columns is-multiline">
      <div class="column is-8 is-offset-2 register">
        <div class="columns">
            <div class="column left">
                <h1 class="is-size-1 has-text-weight-bold" style="line-height:46px;">MySAU Online Portal</h1>
                <h2 class="subtitle colored is-4">Online access to purchase and configure your services</h2>
                <p>Start, stop and power cycle your server, show CPU usage and event logs. Access payment and billing information. Get free access to our MySAU online Portal.</p>
            </div>
            <div class="column right has-text-centered">
                <h1 class="is-size-4 has-text-weight-medium">Log in to MySAU</h1>
                <p class="description">Log in to the MySau online portal</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <input class="input is-large" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" autofocus="">
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                            <input class="input is-large" name="password" type="password" placeholder="{{ __('Password') }}">
                        </div>
                        @error('password')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field has-text-centered">
                        <label class="checkbox">
                            <input id="remember" {{ old('remember') ? 'checked' : '' }} name="remember" type="checkbox">{{ __(' Remember Me') }}</label>
                    </div>
                    <button class="button is-block is-primary is-large is-fullwidth">{{ __('Log In') }}</button>
                    <p class="has-text-grey sau-u-font__size--sm mt-4"><a href="/register">Sign Up</a></p>
                    <p class="has-text-grey sau-u-font__size--sm"> @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif</p>
                </form>
            </div>
        </div>
      </div>
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
  </section>
@endsection

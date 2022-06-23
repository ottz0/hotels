@extends('layouts.form-2-col')

@section('section-form')


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
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="field">
                        <div class="control">
                            <input class="input is-medium" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ $email ?? old('email') }}" required autofocus>
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="field">
                        <div class="control">
                            <input class="input is-medium form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="{{ __('Password') }}">
                        </div>
                        @error('password')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="button is-block is-primary is-medium is-fullwidth">{{ __('Log In') }}</button>
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
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

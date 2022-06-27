@extends('layouts.form-centred-hero')
@section('content')
<div class="columns is-multiline has-text-centered">
    <div class="column is-12 sau-u-font__size--lg" style="position:relative; z-index:666;">
        <a href="/login" class="sau-u-border-link is-white is-active">Log In</a><a href="/register" class="sau-u-border-link is-white">Sign Up</a>
    </div>
    <div class="column is-12 pt-5" style="position:relative; z-index:666;">
        <div class="columns">
            <div class="column is-12 sau-c-card-shadow" style="position:absolute; padding:35px;">
                <h1 class="is-size-3">Log In to MySAU</h1>
                <p class="pb-4">Log In to the MySAU online portal for access to purchase and configure your services.</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field">
                        <div class="control">
                            <p class="control has-icons-left">
                                <input class="input is-medium @error('email') is-danger @enderror" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}">
                                <span class="icon is-medium is-left">
                                <i class="far fa-envelope"></i>
                                </span>
                                @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </p>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <p class="control has-icons-left">
                                <input class="input is-medium @error('password') is-danger @enderror" name="password" type="password" placeholder="{{ __('Password') }}">
                                <span class="icon is-medium is-left">
                                <i class="far fa-lock"></i>
                                </span>
                                @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </p>
                        </div>
                    </div>
                    <div class="field has-text-centered sau-u-font__size--md">
                        <label class="checkbox">
                            <input id="remember" {{ old('remember') ? 'checked' : '' }} name="remember" type="checkbox">{{ __(' Remember Me') }}</label>
                    </div>
                    <button class="button is-block is-primary is-large is-fullwidth">{{ __('Log In') }}</button>
                    <p class="has-text-grey sau-u-font__size--sm pt-3"> @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif</p>
                </form>
                <p class="sau-u-font__size--xs pt-3">By providing your details you agree that Servers Australia may contact you about relevant services and offers as governed by our <br />Privacy Policy.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.form-centred-hero')
@section('content')
    <div class="columns is-multiline has-text-centered">
        <div class="column is-12 sau-u-font__size--lg" style="position:relative; z-index:666;">
            <a href="/login" class="sau-u-border-link is-white">Log In</a><a href="/register" class="sau-u-border-link is-white is-active">Sign Up</a>
        </div>
        <div class="column is-12 pt-5" style="position:relative; z-index:666;">
            <div class="columns">
                <div class="column is-12 sau-c-card-shadow" style="position:absolute; padding:35px;">
                    <h1 class="is-size-3">Sign Up to MySAU</h1>
                    <p class="pb-4">Sign Up to the MySAU online portal for access to purchase and configure your services.</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="field">
                            <div class="control">
                                <p class="control has-icons-left">
                                    <input class="input is-large @error('name') is-danger @enderror" name="name" type="text" placeholder="{{ __('Your Name') }}" value="{{ old('name') }}">
                                    <span class="icon is-large is-left">
                                    <i class="far fa-user"></i>
                                    </span>
                                    @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <p class="control has-icons-left">
                                    <input class="input is-large @error('email') is-danger @enderror" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}">
                                    <span class="icon is-large is-left">
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
                                    <input class="input is-large @error('password') is-danger @enderror" name="password" type="password" placeholder="{{ __('Password') }}">
                                    <span class="icon is-large is-left">
                                    <i class="far fa-lock"></i>
                                    </span>
                                    @error('password')
                                        <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                            </div>
                        </div>
                        <button class="button is-block is-primary is-large is-fullwidth">{{ __('Sign Up') }}</button>
                    </form>
                    <p class="sau-u-font__size--xs pt-3">By providing your details you agree that Servers Australia may contact you about relevant services and offers as governed by our <br />Privacy Policy.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

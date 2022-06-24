@extends('layouts.form-2-col')

@section('section-form')
    <h1 class="is-size-4 has-text-weight-medium">Register - MySAU</h1>
    <p class="description">Register for access to the MySau online portal</p>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="field">
            <div class="control">
                <input class="input is-medium @error('name') is-danger @enderror" name="name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" autofocus="">
            </div>
            @error('name')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <div class="control">
                <input class="input is-medium @error('email') is-danger @enderror" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" autofocus="">
            </div>
            @error('email')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <div class="control">
                <input class="input is-medium @error('password') is-danger @enderror" name="password" type="password" placeholder="{{ __('Password') }}">
            </div>
            @error('password')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="field">
            <div class="control">
                <input class="input is-medium @error('password') is-danger @enderror" name="password_confirmation" type="password" placeholder="{{ __('Confirm Password') }}">
            </div>
            @error('password')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
        <button class="button is-block is-primary is-medium is-fullwidth">{{ __('Sign Up') }}</button>
        <p class="has-text-grey sau-u-font__size--sm mt-4"><a href="/login">Log In</a></p>
        <p class="has-text-grey sau-u-font__size--sm"> @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif</p>
    </form>
</section>
@endsection

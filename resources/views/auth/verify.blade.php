@extends('layouts.form-2-col')

@section('section-form')
    <h1 class="is-size-4 has-text-weight-medium">Log in to MySAU</h1>
    <p class="description">Log in to the MySau online portal</p>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button class="button is-block is-primary is-medium is-fullwidth">{{ __('click here to request another') }}</button>
        <p class="has-text-grey sau-u-font__size--sm mt-4"><a href="/register">Sign Up</a></p>
        <p class="has-text-grey sau-u-font__size--sm"> @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif</p>
    </form>
@endsection

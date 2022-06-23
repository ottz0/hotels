@extends('layouts.form-2-col')

@section('section-form')

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="is-size-4 has-text-weight-medium">Reset Password</h1>
    <p class="description">Reset your password for the MySau online portal</p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="field">
            <div class="control">
                <input class="input is-medium @error('email') is-danger @enderror" name="email" type="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" >
            </div>
            @error('email')
                <p class="help is-danger" role="alert">{{ $message }}</p>
            @enderror
        </div>
        <button class="button is-block is-primary is-medium is-fullwidth">{{ __('Send Password Reset Link') }}</button>
    </form>
</div>

@endsection






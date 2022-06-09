@extends('layouts.app')
@section('content')
<div class="columns pt-5">
    <div class="column is-half is-offset-one-quarter">
        <h1 class="title is-1">Create a hotel</h1>
        <form action="{{ route('hotels.store') }}" method="POST">
            @csrf
            @include('hotels.partials.form')
            <div><input type="submit" value="Create" class="button is-primary"></div>
        </form>
    </div>
</div>
@endsection

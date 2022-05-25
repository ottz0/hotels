@extends('layouts.app')
@section('content')
<form action="{{ route('hotels.store') }}" method="POST">
    @csrf
    @include('hotels.partials.form')
    <div><input type="submit" value="Create" class="button is-primary"></div>
</form>
@endsection

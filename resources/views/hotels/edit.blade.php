@extends('layouts.app')
@section('content')
<form action="{{ route('hotels.update', ['hotel' => $hotel->id]) }}" method="POST">
    @csrf
    @method('PUT')
    @include('hotels.partials.form')
    <div><input type="submit" value="Update" class="button is-primary"></div>
</form>
@endsection

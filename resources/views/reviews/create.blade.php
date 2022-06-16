
@extends('layouts.app')
@section('content')
<div class="columns pt-5">
    <div class="column is-half is-offset-one-quarter">
        <h1 class="is-size-1">Hotel review for {{$hotel->name}}</h1>
        <form action="{{ route('hotels.update', ['hotel' => $hotel->id]) }}" method="POST">
            @csrf
            @method('PUT')
            @include('reviews.partials.form')
            <div><input type="submit" value="Update" class="button is-primary"></div>
        </form>
    </div>
</div>
@endsection








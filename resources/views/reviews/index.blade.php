@extends('layouts.app')
@section('content')
    <div class="columns pt-5">
        <div class="column is-half is-offset-one-quarter">
            @foreach ($reviews as $review)
                <p>This is user {{ $review->review }}</p>
                <a href="#">Edit Review</a>
            @endforeach
        </div>
    </div>
@endsection




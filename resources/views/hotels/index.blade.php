@extends('layouts.app')
@section('content')
    <div class="columns">
        <div class="column">
            @forelse ($hotels as $key => $hotel)
                <h3><a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}"> {{ $hotel->name }}</a></h3>
                @empty
                No posts found!
            @endforelse
        </div>
    </div>
@endsection

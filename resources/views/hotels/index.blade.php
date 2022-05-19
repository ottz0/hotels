@extends('layouts.app')
@section('content')
    <div class="columns">
        <div class="column">
            @forelse ($hotels as $key => $hotel)
                <h3>{{ $hotel->name }}</h3>
                @empty
                No posts found!
            @endforelse
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <main class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--white" style="height:100vh;">
        <div class="container">
            @include('layouts.partials.nav')
        </div>
        <div class="container pt-5">
            @include('hotels.partials.hotel-list')
        </div>
    </main>
@endsection

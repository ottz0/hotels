@extends('layouts.main')
@section('content')
<main class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--white" style="height:100vh;">
    <div class="container">
        @include('layouts.partials.nav')
    </div>
    <div class="container pt-5">
        <div class="columns">
            <div class="column">
                <h1 class="is-size-1 pt-5">Marketplace</h1>
                <ul class="sau-c-nav-list pt-3">
                    @foreach ($parents as $parent)
                        <li><a href="/marketplace/{{$parent->slug}}" class="{{ (request()->segment(2) === $parent->slug) ? 'is-active' : '' }}">{{$parent->title}}</a></li>
                    @endforeach
                    <li><a href="#">Private Cloud</a></li>
                    <li><a href="#">Virtual Data Centres</a></li>
                </ul>
            </div>
        </div>
        <div class="columns is-multiline">
            <div class="column is-12">
                <h2 class="is-size-4 pt-5">Dedicated Servers</h2>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <ul class="sau-c-nav-list pt-3">
                    @foreach ($serverCategories as $serverCategory)
                        <li><a href="/marketplace/{{$parents[0]->slug}}/{{$serverCategory->slug}}" class="{{ (request()->segment(1) === $serverCategory->slug) ? 'is-active' : '' }}">{{$serverCategory->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @include('marketplace.partials.server-list')
    </div>
</main>
@endsection

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
                <!-- Category Sub nav Menu -->
                @include('marketplace.partials.category-sub-nav')
            </div>
        </div>
        <div class="columns pt-5">
            <div class="column is-3">
                <!-- Aside Menu -->
                @include('marketplace.partials.aside-menu')
            </div>
            <div class="column is-7">
                @foreach ($servers[0] as $server)
                {{$servers}}
                @endforeach

            </div>
        </div>
    </div>
</main>
@endsection

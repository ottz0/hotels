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
                    <li><a href="#" class="is-active">Dedicated Servers</a></li>
                    <li><a href="#">Cloud Servers</a></li>
                    <li><a href="#">Colocation</a></li>
                    <li><a href="#">Private Cloud</a></li>
                    <li><a href="#">Virtual Data Centres</a></li>
                </ul>
            </div>
        </div>
        @include('marketplace.partials.server-list')
    </div>
</main>
@endsection

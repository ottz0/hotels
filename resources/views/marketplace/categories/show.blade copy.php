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
                <ul class="sau-c-nav-list pt-5 pb-3">
                    @foreach ($parents as $parent)
                        <li><a href="/marketplace/{{$parent->slug}}" class="{{ (request()->segment(2) === $parent->slug) ? 'is-active' : '' }}">{{$parent->title}}</a></li>
                    @endforeach
                    <li><a href="#">Private Cloud</a></li>
                    <li><a href="#">Virtual Data Centres</a></li>
                </ul>
            </div>
        </div>
        <div class="columns pt-5">

            <div class="column is-3">
                <!-- Aside Menu -->
                @include('marketplace.partials.aside-menu')
            </div>
            <div class="column is-7">
                this is 7
            </div>
            {{-- <div class="column" class="is-7">
                <div class="columns is-multiline pb-5">
                    <div class="column is-12">
                        <h2 class="is-size-2 has-text-weight-normal">{{$category->title}}</h2>
                        <nav class="breadcrumb" aria-label="breadcrumbs">
                            <ul>
                                <li class="has-text-weight-normal"><a href="/marketplace">Marketplace</a></li>
                                <li class="is-active"><a href="/marketplace/{{$category->slug}}"  aria-current="page">{{$category->title}}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                @include('marketplace.partials.server-list')
            </div> --}}
        </div>
    </div>
</main>
@endsection

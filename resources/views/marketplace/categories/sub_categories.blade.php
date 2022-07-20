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
        <div class="columns pt-5">
            <div class="column is-3">
                <ul class="sau-m-aside-nav">
                    @foreach ($serverCategories[0]->siblingsAndSelf as $serverCategory)
                        <li>
                            <a href="/marketplace/{{$serverCategory->slug}}/{{$serverCategory->slug}}" class="{{ (request()->segment(3) === $serverCategory->slug) ? 'is-active' : '' }}">
                                <div class="is-flex">
                                    <div class="sau-m-aside-nav__img has-text-centered mr-2">
                                        <img src="/images/{{$serverCategory->slug}}.svg" alt="{{$serverCategory->title}}" width="30">
                                    </div>
                                    <div>
                                        <p class="sau-m-aside-nav__desc">{{$serverCategory->title}}</p>
                                        <p class="sau-m-aside-nav__tag">{{$serverCategory->tagline}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="column" class="is-7">
                <div class="column" class="is-7">
                    <div class="columns is-multiline pb-5">
                        <div class="column is-12">
                            <h2 class="is-size-2 has-text-weight-normal">{{$serverCategories[0]->title}}</h2>
                            <nav class="breadcrumb" aria-label="breadcrumbs">
                                <ul>
                                    <li class="has-text-weight-normal"><a href="/marketplace">Marketplace</a></li>
                                    <li class="has-text-weight-normal"><a href="/marketplace/{{$parents[0]->slug}}">{{$parents[0]->title}}</a></li>
                                    <li class="is-active"><a href="/marketplace/{{$serverCategories[0]->slug}}" aria-current="page">{{$serverCategories[0]->title}}</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @include('marketplace.partials.server-list')
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

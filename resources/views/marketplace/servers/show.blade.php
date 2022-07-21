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
        <div class="columns">
            {{-- <div class="column is-3">
                <!-- Aside Menu -->
                @include('marketplace.partials.aside-menu')
            </div> --}}
            <div class="column is-12">
                <h2 class="is-size-2 has-text-weight-semibold">{{$rootCategory->title}}</h2>
                <nav class="breadcrumb pb-5" aria-label="breadcrumbs">
                    <ul>
                        <li class="has-text-weight-normal"><a href="/marketplace">Marketplace</a></li>
                        <li class="has-text-weight-normal"><a href="/marketplace/{{$rootCategory->slug}}">{{$rootCategory->title}}</a></li>
                        <li class="has-text-weight-normal"><a href="/marketplace/{{$rootCategory->slug}}/{{$category[0]->slug}}">{{$category[0]->title}}</a></li>
                        <li class="is-active"><a href="/marketplace/{{$server->slug}}"  aria-current="page">{{$server->title}}</a></li>
                    </ul>
                </nav>




                {{$server}}



            </div>
        </div>
    </div>
</main>
@endsection





{{-- {{$parentCategories}} --}}



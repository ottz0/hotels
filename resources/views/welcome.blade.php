
@extends('layouts.main')
@section('content')
<header class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--gray">
    <div class="container">
        @include('layouts.partials.nav')
        <div class="columns sau-c-page-hero__inner">
            <div class="column">
                <div class="columns is-vcentered">
                    <div class="column is-6-desktop has-text-centered has-text-left-tablet">
                        <h1 class="pb-4">Dedicated Servers</h1>
                        <div class="sau-u-subtitle pb-5">
                            Powered by Hewlett Packard Enterprise (HPE), the HPE ProLiant Gen10 series offers maximum performance and compliance for sensitive workloads delivering security, agility and flexibility without compromise.
                        </div>
                        <a href="#pageScroll" class="button is-primary is-medium primary scroll-btn">Get Started</a>
                    </div>
                    <div class="column is-6-desktop has-text-centered has-text-left-desktop">
                        <img src="/images/hpe.webp" alt="Hero Image" class="mx-auto float-right" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mini Carousel -->
    <div class="sau-c-mini-carousel__wrapper">
        <img src="/images/wave.svg" alt="wave" style="margin-bottom:-15px;" />
        <page-carousel />
        <div class="sau-c-mini-carousel__sep"></div>
    </div>
</header>
<div class="columns pt-5">
    <div class="column is-half is-offset-one-quarter">
        <h1 class="is-size-1">This is the home page</h1>
        <test />
    </div>
</div>
@endsection

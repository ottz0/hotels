@extends('layouts.main')
@section('content')
<main class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--white" style="height:100vh;">
    <div class="container">
        @include('layouts.partials.nav')
    </div>
    <div class="container pt-5">
        <div class="columns">
            <div class="column">
                <span class="sau-u-font__size--sm has-text-weight-normal">MARKETPLACE</span>
                <h1 class="is-size-1">Dedicated Servers</h1>
                <!-- Category Sub nav Menu -->
                @include('marketplace.partials.category-sub-nav')
            </div>
        </div>
        <div class="columns">
            <div class="column">
                {{-- <h2 class="is-size-2 has-text-weight-semibold">{{$rootCategory->title}}</h2> --}}
                <nav class="breadcrumb pb-5" aria-label="breadcrumbs">
                    <ul>
                        <li class="has-text-weight-normal"><a href="/marketplace">Marketplace</a></li>
                        <li class="has-text-weight-normal"><a href="/marketplace/{{$rootCategory->slug}}">{{$rootCategory->title}}</a></li>
                        <li class="has-text-weight-normal"><a href="/marketplace/{{$rootCategory->slug}}/{{$category[0]->slug}}">{{$category[0]->title}}</a></li>
                        <li class="is-active"><a href="/marketplace/{{$server->slug}}"  aria-current="page">{{$server->title}}</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6">
                <div class="columns">
                    <div class="column is-2">
                        <img src="/images/vmware-ready.svg" alt="VMware Ready">
                        <img src="/images/vmware-cloud-verified.svg" alt="VMware Cloud Verified">
                        <img src="/images/microsoft-hyper-v.gif" alt="Microsoft Hyper-v">
                        <img src="/images/equinix-logo.svg" alt="Equninix">
                    </div>
                    <div class="column is-10">
                        <video controls poster="/videos/screen.jpg">
                            <source src="/videos/dl20-server.mp4" type="video/mp4" style="width:100%;">
                                Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
            <div class="column is-6">
                <!-- Price box -->
                <div class="columns">
                    <div class="column">
                        <div class="sau-c-server-card is-outlined p-5">
                            <div class="columns">
                                <div class="column is-8">
                                    <div class="is-flex">
                                        <div class="pr-3">
                                            <img src="/images/{{$server->type}}.svg" alt="{{$server->title}}" width="70">
                                        </div>
                                        <div>
                                            <span class="tag is-light">{{$rootCategory->title}}</span>
                                            <h3 class="is-size-4 has-text-weight-semibold">{{$server->title}}</h3>
                                            <progress class="progress is-success is-small" value="{{$server->benchmark_percentage}}" max="100" style="margin:0;">15%</progress>
                                            <p class="sau-u-font__size--xs pt-2"><strong>{{$server->benchmark}} BENCHMARK</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-4 has-text-centered">
                                    <p class="is-size-2 has-text-weight-semibold" style="margin-bottom:-15px;">${{$server->price}}.00</p>
                                    <p class="sau-u-font__size--xs py-2">ex.GST/month</p>
                                    <a href="/marketplace/" class="button is-success mx-3 mb-3">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Config options -->
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-4 has-text-weight-medium">Configuration</h3>
                        <div class="columns is-multiline">
                            <div class="column is-6">
                                <div class="is-flex">
                                    <div><i class="fa-solid fa-microchip"></i></div>
                                    <div class="px-2">
                                        <p class="has-text-weight-medium">Processor</p>
                                        <p class="sau-u-font__size--md">{{$server->processor_line_1}} - {{$server->processor_line_2}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="is-flex">
                                    <div><i class="fa-solid fa-hdd"></i></div>
                                    <div class="px-2">
                                        <p class="has-text-weight-medium">Storage</p>
                                        <p class="sau-u-font__size--md">{{$server->storage_line_1}} - {{$server->storage_line_2}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="is-flex">
                                    <div><i class="fa-solid fa-memory"></i></div>
                                    <div class="px-2">
                                        <p class="has-text-weight-medium">Memory</p>
                                        <p class="sau-u-font__size--md">{{$server->memory}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="is-flex">
                                    <div><i class="fa-solid fa-network-wired"></i></div>
                                    <div class="px-2">
                                        <p class="has-text-weight-medium">Data</p>
                                        <p class="sau-u-font__size--md">{{$server->data}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- Operating system -->
                        <div class="columns">
                            <div class="column">
                                <h3 class="is-size-4 has-text-weight-medium">Operating System</h3>
                                <div class="columns">
                                    <div class="column">
                                        <ul class="sau-c-nav-list">
                                            <li><a href="#" class="is-active">Linux</a></li>
                                            <li><a href="#">Control Panels</a></li>
                                            <li><a href="#">Windows</a></li>
                                            <li><a href="#">VMware</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="columns is-multiline">
                                    <div class="column is-4 is-flex">
                                        <div class="sau-c-radio-toolbar">
                                            <input type="radio" id="osDebian" name="radioOS" value="debian" checked>
                                            <label for="osDebian">
                                                <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                                <div class="is-flex p-2">
                                                    <img src="/images/debian.svg" alt="Debian logo" width="40">
                                                    <div class="pl-2">
                                                        <p class="has-text-weight-medium">Debian</p>
                                                        <p class="sau-u-font__color--muted sau-u-font__size--sm">9 Latest</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="column is-4 is-flex">
                                        <div class="sau-c-radio-toolbar">
                                            <input type="radio" id="osCentOs" name="radioOS" value="centOs">
                                            <label for="osCentOs">
                                                <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                                <div class="is-flex p-2">
                                                    <img src="/images/centos.svg" alt="Cent Os" width="40">
                                                    <div class="pl-2">
                                                        <p class="has-text-weight-medium">Cent OS</p>
                                                        <p class="sau-u-font__color--muted sau-u-font__size--sm">7 Latest</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="column is-4 is-flex">
                                        <div class="sau-c-radio-toolbar">
                                            <input type="radio" id="osAlma" name="radioOS" value="alma">
                                            <label for="osAlma">
                                                <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                                <div class="is-flex p-2">
                                                    <img src="/images/alma.svg" alt="Alma Os" width="40">
                                                    <div class="pl-2">
                                                        <p class="has-text-weight-medium">Alma</p>
                                                        <p class="sau-u-font__color--muted sau-u-font__size--sm">8 Latest</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="column is-4 is-flex">
                                        <div class="sau-c-radio-toolbar">
                                            <input type="radio" id="osUbuntu20" name="radioOS" value="ubuntu-20.04-lts">
                                            <label for="osUbuntu20">
                                                <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                                <div class="is-flex p-2">
                                                    <img src="/images/Ubuntu.svg" alt="Ubuntu logo" width="40">
                                                    <div class="pl-2">
                                                        <p class="has-text-weight-medium">Ubuntu</p>
                                                        <p class="sau-u-font__color--muted sau-u-font__size--sm">20.04 LTS</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="column is-4 is-flex">
                                        <div class="sau-c-radio-toolbar">
                                            <input type="radio" id="osUbuntu18" name="radioOS" value="ubuntu-18.04-lts">
                                            <label for="osUbuntu18">
                                                <div class="is-flex p-2">
                                                    <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                                    <img src="/images/ubuntu.svg" alt="Ubuntu logo" width="40">
                                                    <div class="pl-2">
                                                        <p class="has-text-weight-medium">Ubuntu</p>
                                                        <p class="sau-u-font__color--muted sau-u-font__size--sm">18.04 LTS</p>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>








                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection





{{-- {{$parentCategories}} --}}



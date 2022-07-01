@extends('layouts.main')
@section('content')
<main class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--white" style="height:100vh;">
    <div class="container">
        @include('layouts.partials.nav')
    </div>
    <div class="container pt-5">
        @include('marketplace.partials.nav')
        <div class="columns pt-5">
            <div class="column is-9">
                <section class="columns is-vcentered">
                    <div class="column is-flex">
                        <div class="pr-4">
                            <img src="/images/{{$server->type}}.svg" alt="{{$server->type}} Dedicated Server" width="70">
                        </div>
                        <div>
                            <span class="tag">Dedicated Server</span>
                            <h2 class="is-size-2">{{$server->name}}</h2>
                        </div>
                    </div>
                    <div>
                        <progress class="progress is-success is-small" value="{{ $server->benchmark / 1000 }}" max="100" style="margin:0;">15%</progress>
                        <p class="sau-u-font__size--xs pt-1">{{$server->benchmark}} BENCHMARK</p>
                    </div>
                </section>
                <hr />
                <section class="columns">
                    <div class="column">
                        <h3 class="is-size-3">Specifications</h3>
                        <div class="columns is-multiline pt-3">
                            <div class="column is-6 is-flex">
                                <div class="sau-c-server-card is-outlined is-flex p-5">
                                    <div class="pr-4"><i class="fa-solid fa-microchip fa-xl"></i></div>
                                    <div>
                                        <p class="has-text-weight-medium">Processor</p>
                                        <p>{{$server->processor_line_1}}</p>
                                        <p>{{$server->processor_line_2}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6 is-flex">
                                <div class="sau-c-server-card is-outlined is-flex p-5">
                                    <div class="pr-4"><i class="fa-solid fa-hdd fa-xl"></i></div>
                                    <div>
                                        <p class="has-text-weight-medium">Storage</p>
                                        <p>{{$server->storage_line_1}}</p>
                                        <p>{{$server->storage_line_2}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column is-6 is-flex">
                                <div class="sau-c-server-card is-outlined is-flex p-5">
                                    <div class="pr-4"><i class="fa-solid fa-memory fa-xl"></i></div>
                                    <div>
                                        <p class="has-text-weight-medium">Memory</p>
                                        <p>{{$server->memory}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6 is-flex">
                                <div class="sau-c-server-card is-outlined is-flex p-5">
                                    <div class="pr-4"><i class="fa-solid fa-network-wired fa-xl"></i></div>
                                    <div>
                                        <p class="has-text-weight-medium">Data</p>
                                        <p>{{$server->data}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="columns">
                    <div class="column">
                        <h3 class="is-size-3">Hostname</h3>
                        <p>If no hostname is provided, one will automatically be assigned for you.</p>
                        <div class="columns pt-3">
                            <div class="column is-6">
                                <input class="input is-medium" type="text" placeholder="myserver.example.com" name="hostname">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="columns">
                    <div class="column">
                        <h3 class="is-size-3">Operating System</h3>
                        <div class="columns pt-3">
                            <div class="column is-6">
                                monkey
                            </div>
                        </div>



                        <div class="columns">
                            <div class="column is-6 is-flex">
                                <div class="sau-c-server-card is-outlined is-flex p-5">
                                    <div class="pr-4"><i class="fa-solid fa-memory fa-xl"></i></div>
                                    <div>
                                        <p class="has-text-weight-medium">Debian</p>
                                        <p class="sau-u-font__color--muted sau-u-font__size--sm">9 Latest</p>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6 is-flex">



                                <div class="sau-c-radio-toolbar">
                                    <input type="radio" id="radioApple" name="radioFruit" value="apple" checked>
                                    <label for="radioApple">
                                        <div class="sau-c-server-card is-outlined is-flex p-5">
                                            <div class="pr-4"><i class="fa-solid fa-memory fa-xl"></i></div>
                                            <div>
                                                <p class="has-text-weight-medium">Debian</p>
                                                <p class="sau-u-font__color--muted sau-u-font__size--sm">9 Latest</p>
                                            </div>
                                        </div>
                                    </label>

                                    <input type="radio" id="radioBanana" name="radioFruit" value="banana">
                                    <label for="radioBanana">Banana</label>

                                    <input type="radio" id="radioOrange" name="radioFruit" value="orange">
                                    <label for="radioOrange">Orange</label>
                                </div>
                                <p>&nbsp;</p>







                            </div>
                        </div>






                    </div>
                </section>






            </div>
            <aside class="column is-3">
                aside
            </aside>
        </div>
        {{$server}}







    </div>
</main>
@endsection

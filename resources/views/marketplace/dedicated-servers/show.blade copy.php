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
                        <p class="sau-u-font__size--xs pt-1 has-text-weight-normal has-text-centered">{{$server->benchmark}} BENCHMARK</p>
                        <div class="is-flex pt-2">
                            <img src="/images/vmware-ready.svg" alt="VMware ready logo" width="100">
                            <img src="/images/microsoft-hyper-v.gif" alt="Microsoft Hyper-v" width="100">
                        </div>
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
                                <input class="input is-large" type="text" placeholder="myserver.example.com" name="hostname">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="columns">
                    <div class="column">
                        <h3 class="is-size-3">Operating System</h3>
                        <div class="columns pt-3">
                            <div class="column">
                                <ul class="sau-c-nav-list pt-3">
                                    <li><a href="#" class="is-active">Linux</a></li>
                                    <li><a href="#">Control Panels</a></li>
                                    <li><a href="#">Windows</a></li>
                                    <li><a href="#">VMware</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="columns is-multiline">
                            <div class="column is-3 is-flex">
                                <div class="sau-c-radio-toolbar">
                                    <input type="radio" id="osDebian" name="radioOS" value="debian">
                                    <label for="osDebian">
                                        <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                        <div class="is-flex p-2">
                                            <img src="/images/debian.svg" alt="Debian logo" width="52">
                                            <div class="pl-2">
                                                <p class="has-text-weight-medium">Debian</p>
                                                <p class="sau-u-font__color--muted sau-u-font__size--sm">9 Latest</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="column is-3 is-flex">
                                <div class="sau-c-radio-toolbar">
                                    <input type="radio" id="osCentOs" name="radioOS" value="centOs">
                                    <label for="osCentOs">
                                        <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                        <div class="is-flex p-2">
                                            <img src="/images/centos.svg" alt="Cent Os" width="52">
                                            <div class="pl-2">
                                                <p class="has-text-weight-medium">Cent OS</p>
                                                <p class="sau-u-font__color--muted sau-u-font__size--sm">7 Latest</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="column is-3 is-flex">
                                <div class="sau-c-radio-toolbar">
                                    <input type="radio" id="osAlma" name="radioOS" value="alma">
                                    <label for="osAlma">
                                        <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                        <div class="is-flex p-2">
                                            <img src="/images/alma.svg" alt="Alma Os" width="52">
                                            <div class="pl-2">
                                                <p class="has-text-weight-medium">Alma</p>
                                                <p class="sau-u-font__color--muted sau-u-font__size--sm">8 Latest</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="column is-3 is-flex">
                                <div class="sau-c-radio-toolbar">
                                    <input type="radio" id="osUbuntu20" name="radioOS" value="ubuntu-20.04-lts">
                                    <label for="osUbuntu20">
                                        <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                        <div class="is-flex p-2">
                                            <img src="/images/Ubuntu.svg" alt="Ubuntu logo" width="52">
                                            <div class="pl-2">
                                                <p class="has-text-weight-medium">Ubuntu</p>
                                                <p class="sau-u-font__color--muted sau-u-font__size--sm">20.04 LTS</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="column is-3 is-flex">
                                <div class="sau-c-radio-toolbar">
                                    <input type="radio" id="osUbuntu18" name="radioOS" value="ubuntu-18.04-lts">
                                    <label for="osUbuntu18">
                                        <div class="is-flex p-2">
                                            <div class="sau-c-radio-toolbar__dot"><img src="/images/radio.svg" alt="Radio logo" width="20"></div>
                                            <img src="/images/ubuntu.svg" alt="Ubuntu logo" width="52">
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
                </section>
            </div>
            <aside class="column is-3">
                <div class="sau-c-card-shadow p-5">
                    <div class="columns is-multiline">
                        <div class="column is-12">
                            <div  class="has-text-centered">
                                <img src="/images/{{$server->type}}.svg" alt="{{$server->type}} Dedicated Server" width="50">
                                <div><span class="tag">Dedicated Server</span></div>
                                <h4 class="is-size-4 has-text-weight-medium">{{$server->name}}</h4>
                            </div>
                        </div>
                        <div class="column">
                            <div class="is-flex pb-3">
                                <div><i class="fa-solid fa-microchip"></i></div>
                                <div class="px-2">
                                    <p class="sau-u-font__size--md">{{$server->processor_line_1}} - {{$server->processor_line_2}}</p>
                                </div>
                            </div>
                            <div class="is-flex pb-3">
                                <div><i class="fa-solid fa-hdd"></i></div>
                                <div class="px-2">
                                    <p class="sau-u-font__size--md">{{$server->storage_line_1}} - {{$server->storage_line_2}}</p>
                                </div>
                            </div>
                            <div class="is-flex pb-3">
                                <div><i class="fa-solid fa-memory"></i></div>
                                <div class="px-2">
                                    <p class="sau-u-font__size--md">{{$server->memory}}</p>
                                </div>
                            </div>
                            <div class="is-flex">
                                <div><i class="fa-solid fa-network-wired"></i></div>
                                <div class="px-2">
                                    <p class="sau-u-font__size--md">{{$server->data}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="column is-12">
                            <div class="has-text-centered">
                                <p class="is-size-2 has-text-weight-bold py-3" style="line-height:0;">${{$server->price}}.00</p>
                                <span class="sau-u-font__size--xs">ex. GST/month</span>
                                <button class="button is-large is-fullwidth is-success">Buy Now</button>
                                <a href="{{ URL::previous() }}" class="sau-u-font__size--md">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
        {{$server}}







    </div>
</main>
@endsection

@extends('layouts.main')
@section('content')
<main class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--white" style="height:100vh;">
    <div class="container">
        @include('layouts.partials.nav')
    </div>
    <div class="container pt-5">
        @include('marketplace.partials.nav')
        <div class="columns pt-5">
            <div class="column is-6">
                <div class="columns">
                    <div class="column is-2">
                        <img src="/images/vmware-ready.svg" alt="VMware Ready">
                        <img src="/images/vmware-cloud-verified.svg" alt="VMware Cloud Verified">
                        <img src="/images/microsoft-hyper-v.gif" alt="Microsoft Hyper-v">
                        <img src="/images/equinix-logo.svg" alt="Equninix">
                    </div>
                    <div class="column is-10">
                        <video controls poster="/videos/screen.gif">
                            <source src="/videos/dl20-server.mp4" type="video/mp4" style="width:100%;">
                                Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-3 has-text-weight-medium">Features</h3>
                        <p>Blaze Dedicated Server series by Servers Australia featuring the power Hewlett Packard Entrprise (HPE) family of HPE Gen10 Plus servers. Supported by the amazing predictive HPE InfoSite monitoring, in world class Australian Equinix Data Centres. Perfect for virtualisation, databases and high-performance and reliable computing.
                        </p>
                    </div>
                </div>


            </div>
            <aside class="column is-6">
                <!-- Price Panel -->
                <div class="sau-c-server-card is-outlined p-5">
                    <div class="columns">
                        <div class="column is-8">
                            <div class="is-flex">
                                <div class="pr-4">
                                    <img src="/images/{{$server->type}}.svg" alt="{{$server->type}} Dedicated Server" width="60">
                                </div>
                                <div>
                                    <span class="tag">Dedicated Server</span>
                                    <h2 class="is-size-3 has-text-weight-medium" style="margin-top:-10px;">{{$server->name}}</h2>
                                    <progress class="progress is-success is-small" value="{{ $server->benchmark / 1000 }}" max="100" style="margin:0;">15%</progress>
                                    <p class="sau-u-font__size--xs pt-1 has-text-weight-normal has-text-centered">{{$server->benchmark}} BENCHMARK</p>
                                </div>
                            </div>
                        </div>
                        <div class="column is-4 has-text-centered">
                            <div class="has-text-centered">
                                <p class="is-size-3 has-text-weight-medium py-3" style="line-height:0;">${{$server->price}}.00</p>
                                <span class="sau-u-font__size--xs">ex. GST/month</span>
                                <button class="button is-fullwidth is-success">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Configuration -->
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-3 has-text-weight-medium pt-5">Configuration</h3>
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
                    </div>
                </div>
                <hr />
                <!-- Hostname -->
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-3 has-text-weight-medium">Hostname</h3>
                        <p>If no hostname is provided, one will automatically be assigned for you.</p>
                        <div class="columns pt-3">
                            <div class="column">
                                <input class="input is-large" type="text" placeholder="myserver.example.com" name="hostname">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Operating System -->
                <section class="columns">
                    <div class="column">
                        <h3 class="is-size-3 has-text-weight-medium">Operating System</h3>
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
                </section>
                <!-- Additional Options -->
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-3 has-text-weight-medium">Additional Options</h3>
                        <div class="sau-c-server-card is-outlined p-5">
                            <h4 class="is-size-6 has-text-weight-medium">Backup Storage</h4>
                            <div class="select is-fullwidth mb-3">
                                <select>
                                    <option>None</option>
                                    <option>With options</option>
                                </select>
                            </div>
                            <h4 class="is-size-6 has-text-weight-medium">Backup Freqency</h4>
                            <div class="select is-fullwidth mb-3">
                                <select>
                                    <option>None</option>
                                    <option>With options</option>
                                </select>
                            </div>
                            <h4 class="is-size-6 has-text-weight-medium">Additional IP's</h4>
                            <div class="select is-fullwidth">
                                <select>
                                    <option>None</option>
                                    <option>With options</option>
                                </select>
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

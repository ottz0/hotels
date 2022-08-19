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
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-4 has-text-weight-medium">Features</h3>
                        <p>Blaze Dedicated Server series by Servers Australia featuring the power Hewlett Packard Entrprise (HPE) family of HPE Gen10 Plus servers. Supported by the amazing predictive HPE InfoSite monitoring, in world class Australian Equinix Data Centres. Perfect for virtualisation, databases and high-performance and reliable computing.</p>
                        <ul class="sau-u-bullets pt-4">
                            <li>290W non-hot-plug power supply with Platinum power efficiency. Supports Intel® Xeon® E-2300 series processors, up to 8 cores.</li>
                            <li>HPE InfoSight provides a cloud-based analytics tool that predicts and prevents problems before your business is impacted.</li>
                            <li>Dedicated HPE iLO management port as an option kit for faster data transmission with enhanced security.</li>
                            <li>Two PCIe Gen4 slots for greater I/O bandwidth.</li>
                        </ul>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
                        <h3 class="is-size-4 has-text-weight-medium">Information</h3>
                        <section class="content pt-2">
                            <div class="accordion">
                                <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Specifications</div>
                                <div class="accordion__content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore incidunt odio possimus excepturi ipsa, aliquid maiores harum tempora sunt soluta nam culpa qui atque? Soluta sed nobis necessitatibus beatae exercitationem.</div>
                                </label>
                                <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Warranty</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate, molestiae consequuntur eveniet quisquam dolor ea accusantium laudantium quo quos blanditiis maxime doloremque atque. Neque ut odio sunt quam odit?</div>
                                </label>
                                <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Management options</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nostrum culpa voluptatibus maiores odio nemo adipisci id dolore, velit beatae eveniet. Pariatur reiciendis quae, exercitationem tempora autem accusamus optio iusto!</div>
                                </label>
                            </div>
                        </section>
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
                        <div class="columns">
                            <div class="column">
                                <h3 class="is-size-4 has-text-weight-medium">Hostname</h3>
                                <p class="sau-u-font__size--sm pb-2">If no hostname is provided, one will automatically be assigned for you.</p>
                                <input class="input is-medium" type="text" placeholder="myserver.example.com">
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <h3 class="is-size-4 has-text-weight-medium">Additional Options</h3>
                                <h5 class="is-size-6 has-text-weight-medium pt-3">Backup Storage</h5>
                                <div class="select is-medium is-fullwidth">
                                    <select>
                                        <option>None</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                                <h5 class="is-size-6 has-text-weight-medium pt-3">Backup Frequency</h5>
                                <div class="select is-medium is-fullwidth">
                                    <select>
                                        <option>None</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                                <h5 class="is-size-6 has-text-weight-medium pt-3">Additional Ip's</h5>
                                <div class="select is-medium is-fullwidth">
                                    <select>
                                        <option>None</option>
                                        <option>With options</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="columns">
            <div class="column">
                <h2 class="is-size-2">HPE Infosite</h2>
                <hr />
                <div class="columns">
                    <div class="column">
                        <video controls poster="/videos/screen.gif">
                            <source src="/videos/hpe-infosight.mp4" type="video/mp4" style="width:100%;">
                                Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="column">
                        <h3 class="is-size-3">The industry’s most advanced artificial intelligence for infrastructure</h3>
                        <p>It is a cloud-based artificial intelligence for IT operations (AIOps) platform that applies advanced machine learning to transform how infrastructure is managed and supported. Every second, it collects and analyses millions of sensors from over 150,000 systems across the globe. It then learns from this data, engineering and HPE Pointnext Services solutions to drive global intelligence and insights from storage to virtual machines. Infrastructure powered by HPE InfoSight continuously gets smarter and more autonomous.</p>
                        <ul class="sau-u-bullets pt-4">
                            <li>Predict and prevent: HPE InfoSight automatically predicts and prevents problems before you even know there was an issue.</li>
                            <li>Signature detection: HPE InfoSight prevents customers from ever seeing a known issue through advanced pattern-matching algorithms.</li>
                            <li>App-aware protection: HPE InfoSight sees across infrastructure with correlated insights to protect every app.</li>
                            <li>Support redefined: AI-driven support gives you faster response times and accelerates time to resolution so there is no more finger-pointing, just an amazing customer experience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="columns">
            <div class="column">
                <h2 class="is-size-2">Data Sovereingty</h2>
                <hr />
                <div class="columns">
                    <div class="column">
                        <p>Data Sovereingty has never been so important. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="columns is-multiline pt-5">
                            <div class="column is-4">
                                <a href="#" class="sau-u-hover-box">
                                    <div class="has-text-centered p-3">
                                        <img src="/images/equinix-logo-single.svg" alt="Equinix Logo" width="46">
                                        <p class="sau-u-font__size--md"><strong>Sydney</strong></p>
                                        <p class="sau-u-font__size--sm">Equinix SY3</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column is-4">
                                <a href="#" class="sau-u-hover-box">
                                    <div class="has-text-centered p-3">
                                        <img src="/images/equinix-logo-single.svg" alt="Equinix Logo" width="46">
                                        <p class="sau-u-font__size--md"><strong>Sydney</strong></p>
                                        <p class="sau-u-font__size--sm">Equinix SY4</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column is-4">
                                <a href="#" class="sau-u-hover-box">
                                    <div class="has-text-centered p-3">
                                        <img src="/images/equinix-logo-single.svg" alt="Equinix Logo" width="46">
                                        <p class="sau-u-font__size--md"><strong>Brisbane</strong></p>
                                        <p class="sau-u-font__size--sm">Equinix BR1</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column is-4">
                                <a href="#" class="sau-u-hover-box">
                                    <div class="has-text-centered p-3">
                                        <img src="/images/equinix-logo-single.svg" alt="Equinix Logo" width="46">
                                        <p class="sau-u-font__size--md"><strong>Melbourne</strong></p>
                                        <p class="sau-u-font__size--sm">Equinix ME1</p>
                                    </div>
                                </a>
                            </div>
                            <div class="column is-4">
                                <a href="#" class="sau-u-hover-box">
                                    <div class="has-text-centered p-3">
                                        <img src="/images/equinix-logo-single.svg" alt="Equinix Logo" width="46">
                                        <p class="sau-u-font__size--md"><strong>Perth</strong></p>
                                        <p class="sau-u-font__size--sm">Equinix PE1</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <img src="/images/hero-equinix-sy4.jpg" alt="Equinix SY4">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="columns">
                <div class="column">
                    <h2 class="is-size-2">Server Addons</h2>
                    <hr />
                    <section class="content pt-2">
                        <div class="accordion">
                            <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Backups</div>
                                <div class="accordion__content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore incidunt odio possimus excepturi ipsa, aliquid maiores harum tempora sunt soluta nam culpa qui atque? Soluta sed nobis necessitatibus beatae exercitationem.</div>
                            </label>
                            <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Firewalls</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate, molestiae consequuntur eveniet quisquam dolor ea accusantium laudantium quo quos blanditiis maxime doloremque atque. Neque ut odio sunt quam odit?</div>
                            </label>
                            <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Operating Systems</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate, molestiae consequuntur eveniet quisquam dolor ea accusantium laudantium quo quos blanditiis maxime doloremque atque. Neque ut odio sunt quam odit?</div>
                            </label>
                            <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Control Panel</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate, molestiae consequuntur eveniet quisquam dolor ea accusantium laudantium quo quos blanditiis maxime doloremque atque. Neque ut odio sunt quam odit?</div>
                            </label>
                            <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Storage</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate, molestiae consequuntur eveniet quisquam dolor ea accusantium laudantium quo quos blanditiis maxime doloremque atque. Neque ut odio sunt quam odit?</div>
                            </label>
                            <label class="accordion__item">
                                <input type="radio" name="accordion">
                                <div class="accordion__title">Data Packs</div>
                                <div class="accordion__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum cupiditate, molestiae consequuntur eveniet quisquam dolor ea accusantium laudantium quo quos blanditiis maxime doloremque atque. Neque ut odio sunt quam odit?</div>
                            </label>
                        </div>
                    </section>
                </div>
            </div>
        </section>


    </div>
</main>
@endsection
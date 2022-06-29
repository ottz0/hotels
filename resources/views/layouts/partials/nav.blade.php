<nav class="sau-c-nav is-hidden-touch is-flex-desktop-only">
    <div class="columns">
        <div class="column">
            <div class="columns">
                <div class="column">
                    <div class="sau-c-nav__top">
                        <ul>

                            <li><a href="https://status.mysau.com.au/" target="_blank">Network Status</a></li>
                            <li><a href="/about-us/contact-us/">Contact us</a></li>
                            <li><a href="tel:1300788862">24/7 support 1300 788 862</a></li>
                            <li>|</li>
                            <li>
                                @guest
                                    <a href="{{ route('login') }}"><i class="far fa-user-circle"></i> MySAU Login</a>
                                @else
                                    <p><i class="fas fa-user-circle fa-xl"></i>{{ Auth::user()->name }}</p>
                                @endguest
                            </li>





                        </ul>
                    </div>
                </div>
            </div>
            <div class="is-flex">
                <div class="mr-auto">
                    <a href="/"><img src="/images/sau-brandmark-horizontal-blue.svg" alt="Servers Australia logo" width="370"/></a>
                </div>
                <nav class="sau-c-nav-mega">
                    <ul class="sau-c-nav-mega__menu">
                        <!-- Main menu Item - Buy -->
                        <li class="sau-c-nav-mega__menu-items menu-main"><a href="#"><i class="fas fa-chevron-down fa-sm"></i> Products</a>
                            <div class="sau-c-nav-mega__menu-sub-wrapper">
                                <div class="columns sau-c-nav__menu-sub">
                                    <div class="column">
                                        <!-- Buy - Sub Menu -->
                                        <div class="columns sau-sub-menu">
                                            <div class="column">
                                                <div class="columns">
                                                    <div class="column">
                                                        <div class="cat-type">Dedicated Servers</div>
                                                        <a href="/products/dedicated-servers">
                                                            <div class="is-flex">
                                                                <div class="pr-3">
                                                                    <figure class="image is-64x64 is-square">
                                                                        <img src="/images/ds.svg" alt="Dedicated Servers"/>
                                                                    </figure>
                                                                </div>
                                                                <div>
                                                                    <h6 class="pb-1">Dedicated Servers</h6>
                                                                    <p>Maximum performance and compliance for sensitive workloads</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="columns">
                                                    <div class="column">
                                                        <div class="columns">
                                                            <div class="column">
                                                                <div class="cat-type">Cloud Computing</div>
                                                                <a href="/products/cloud-servers">
                                                                    <div class="is-flex">
                                                                        <div class="pr-3 is-fullwidth">
                                                                            <figure class="image is-64x64 is-square">
                                                                                <img src="/images/cs.svg" alt="Cloud Servers"/>
                                                                            </figure>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="pb-1">Cloud Servers</h6>
                                                                            <p>Your own resources, no noisy neighbours!</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column">
                                                                <a href="/products/private-cloud">
                                                                    <div class="is-flex">
                                                                        <div class="pr-3 is-fullwidth">
                                                                            <figure class="image is-64x64 is-square">
                                                                                <img src="/images/pc.svg" alt="Private Cloud"/>
                                                                            </figure>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="pb-1">Private Cloud</h6>
                                                                            <p>Powered by VMware, customized to grow with your business</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column">
                                                                <a href="/products/virtual-data-centre">
                                                                    <div class="is-flex">
                                                                        <div class="pr-3 is-fullwidth">
                                                                            <figure class="image is-64x64 is-square">
                                                                                <img src="/images/vdc.svg" alt="Virtual Data Centre"/>
                                                                            </figure>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="pb-1">Virtual Data Centre</h6>
                                                                            <p>Complete control over infrastructure configuration</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="columns">
                                                    <div class="column">
                                                        <div class="cat-type">Colocation</div>
                                                        <a href="/products/colocation">
                                                            <div class="is-flex">
                                                                <div class="pr-3">
                                                                    <figure class="image is-64x64 is-square">
                                                                        <img src="/images/co.svg" alt="Colocation"/>
                                                                    </figure>
                                                                </div>
                                                                <div>
                                                                    <h6 class="pb-1">Colocation</h6>
                                                                    <p>Choose from world class Australian Data Centres</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Main menu Item - Solutions -->
                        <li class="sau-c-nav-mega__menu-items menu-main"><a href="#"><i class="fas fa-chevron-down fa-sm"></i> Solutions</a>
                            <div class="sau-c-nav-mega__menu-sub-wrapper">
                                <!-- Solutions - Sub Menu -->
                                <div class="columns sau-c-nav__menu-sub">
                                    <div class="column">
                                        <div class="columns sau-sub-menu">
                                            <div class="column">
                                                <div class="columns">
                                                    <div class="column">
                                                        <div class="cat-type">Professional Services</div>
                                                        <a href="/solutions/professional-services">
                                                            <h6>Professional Services Agreement (PSA)</h6>
                                                            <p>Access to support engineers and technical experts</p>
                                                        </a>
                                                        <a href="/solutions/professional-services" class="pt-4">
                                                            <h6>Monitoring and Maintenance Agreement (MMA)</h6>
                                                            <p>Monitor your cloud workloads</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="columns">
                                                    <div class="column">
                                                        <div class="cat-type">Industry &amp; Sectors</div>
                                                        <a href="/solutions/industry-sectors/vpn-providers">
                                                            <h6>VPN Providers</h6>
                                                            <p>Superfast interconnections throughout Australia</p>
                                                        </a>
                                                        <a href="/solutions/industry-sectors/gaming" class="pt-4">
                                                            <h6>Gaming</h6>
                                                            <p>FREE DDoS protection and scrubbing  services</p>
                                                        </a>
                                                        <a href="/solutions/industry-sectors/web-dev-web-hosting" class="pt-4">
                                                            <h6>Web Dev / Hosting</h6>
                                                            <p>Manage your own resources with root access</p>
                                                        </a>
                                                        <a href="/solutions/industry-sectors/managed-service-providers" class="pt-4">
                                                            <h6>Managed Service Providers</h6>
                                                            <p>Leverage our Australia wide network</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Main menu Item - Resources -->
                        <li class="sau-c-nav-mega__menu-items menu-main"><a href="#"><i class="fas fa-chevron-down fa-sm"></i> Resources</a>
                            <div class="sau-c-nav-mega__menu-sub-wrapper">
                                <!-- Resources - Sub Menu -->
                                <div class="columns sau-c-nav__menu-sub">
                                    <div class="column">
                                        <div class="columns sau-sub-menu">
                                            <div class="column">
                                                <div class="cat-type">Network</div>
                                                <a href="https://status.mysau.com.au" target="_blank" class="pb-3">Network Status <i class="fas fa-external-link fa-xs"></i></a>
                                                <a href="https://go.serversaustralia.com.au/sau_network_map" target="_blank" class="pb-3">Network Map <i class="fas fa-external-link fa-xs"></i></a>
                                            </div>
                                            <div class="column">
                                                <div class="cat-type">User Resources</div>
                                                <a href="/sau-resources/mysau" class="pb-3">MySAU Portal</a>
                                                <a href="https://help.serversaustralia.com.au/s/" target="_blank" class="pb-3">Knowledgebase Portal <i class="fas fa-external-link fa-xs"></i></a>
                                                <a href="https://api.mysau.com.au/v2/" target="_blank" class="pb-3">API Documentation <i class="fas fa-external-link fa-xs"></i></a>
                                            </div>
                                            <div class="column">
                                                <div class="cat-type">Resources</div>
                                                <a href="https://www.serversaustralia.com.au/resources/news" target="_blank" class="pb-3">News <i class="fas fa-external-link fa-xs"></i></a>
                                                <a href="https://www.serversaustralia.com.au/resources/articles" target="_blank" class="pb-3">Articles <i class="fas fa-external-link fa-xs"></i></a>
                                                <a href="https://docs.serversaustralia.com.au/" target="_blank" class="pb-3">Docs <i class="fas fa-external-link fa-xs"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Main menu Item - About us -->
                        <li class="sau-c-nav-mega__menu-items menu-main"><a href="#"><i class="fas fa-chevron-down fa-sm"></i> About us</a>
                            <div class="sau-c-nav-mega__menu-sub-wrapper">
                                <!-- About us - Sub Menu -->
                                <div class="columns sau-c-nav__menu-sub">
                                    <div class="column">
                                        <div class="columns sau-sub-menu">
                                            <div class="column">
                                                <div class="cat-type">Why Us?</div>
                                                <a href="/about-us" class="pb-3">About Us</a>
                                                <a href="/data-centres" class="pb-3">Data Centres</a>
                                            </div>
                                            <div class="column">
                                                <div class="cat-type">Legal</div>
                                                <a href="/about-us/legal" class="pb-3">Privacy Policy</a>
                                                <a href="/about-us/legal" class="pb-3">Customer Service Agreement</a>
                                            </div>
                                            <div class="column">
                                                <div class="cat-type">Contact Us</div>
                                                <a href="/about-us/contact-us" class="pb-3">Contact Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="pl-5">
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('register') }}" class="button is-primary">{{ __('Sign Up') }}</a>
                    @else
                        <a href="{{ route('logout') }}" class="button is-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

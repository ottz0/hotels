
    {{-- <div class="has-text-centered">
        <h2 class="pb-3 mt-5">Blaze Dedicated Servers</h2>
        <div class="sau-u-subtitle pb-5">
            Blaze Dedicated Server series by Servers Australia featuring the power of Hewlett Packard Enterprise HPE Gen10 Plus servers. Supported by the amazing predictive HPE InfoSite monitoring, in world class Australian Equinix Data Centres. Perfect for virtualisation, databases and high-performance and reliable computing.
        </div>
    </div> --}}
    <div class="columns pt-5">
        <div class="column">
            <div class="columns is-ancestor has-text-centered is-desktop is-multiline">
                <!-- Server -->
                @foreach ($servers as $server)
                <div class="column is-3-desktop tile is-parent">
                    <div class="tile is-child sau-c-server-card is-shadow item is-flex is-flex-direction-column is-justify-content-space-between">
                        <div class="has-text-centered pt-3">
                            <img src="/images/{{$server->type}}.svg" alt="Blaze Servers" width="50">
                        </div>
                        <h5 class="is-size-4"><strong>{{$server->name}}</strong></h5>
                        <div class="columns is-centered is-mobile">
                            <div class="column is-6">
                                <progress class="progress is-success is-small" value="{{ $server->benchmark / 1000 }}" max="100" style="margin:0;">15%</progress>
                                <p class="sau-u-font__size--xs pt-1">{{$server->benchmark}} BENCHMARK</p>
                            </div>
                        </div>
                        <div class="p-4" style="margin-top:-30px;">
                            <ul>
                                <li>
                                    <p class="sau-u-font__size--md"><strong>Processor</strong></p>
                                    <p class="sau-u-font__size--sm">{{$server->processor_line_1}}</p>
                                    <p class="sau-u-font__size--sm">{{$server->processor_line_2}}</p>
                                </li>
                                <li>
                                    <p class="sau-u-font__size--md"><strong>Memory</strong></p>
                                    <p class="sau-u-font__size--sm">{{$server->memory}}</p>
                                </li>
                                <li>
                                    <p class="sau-u-font__size--md"><strong>Storage</strong></p>
                                    <p class="sau-u-font__size--sm">{{$server->storage_line_1}}</p>
                                    <p class="sau-u-font__size--sm">{{$server->storage_line_2}}</p>
                                </li>
                                <li>
                                    <p class="sau-u-font__size--md"><strong>Data</strong></p>
                                    <p class="sau-u-font__size--sm">{{$server->data}}</p>
                                </li>
                            </ul>
                            <p class="is-size-3 has-text-weight-semibold" style="margin-bottom:-10px;">${{$server->price}}.00</p>
                            <p class="sau-u-font__size--sm pb-2">ex.GST/month</p>
                            <a href="{{ route('dedicated-servers.show', ['dedicated_server' => $server->id]) }}" class="button is-primary is-medium is-block mx-3 mb-3">Buy Now</a>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <div class="columns">
                <div class="column">
                    {{$servers->links('partials.sau-pagination')}}
                </div>
            </div>
        </div>
    </div>

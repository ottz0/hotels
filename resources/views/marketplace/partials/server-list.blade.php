<div class="columns pt-5">
    <div class="column">
        <div class="columns is-ancestor has-text-centered is-desktop is-multiline">
            @foreach ($serverLists as $serverList)
                @foreach ($serverList->servers as $server)
                    <div class="column is-4">
                        <div class="sau-c-server-card is-shadow is-flex is-flex-direction-column is-justify-content-space-between p-4" style="margin-bottom:60px;">
                            <div class="has-text-centered">
                                <div class="sau-u-square is-sm has-text-centered">
                                    <img src="/images/{{$server->type}}.svg" alt="{{$server->title}}" width="45">
                                </div>
                            </div>
                            <h5 class="is-size-4" style="margin-top:-40px;"><strong>{{$server->title}}</strong></h5>
                            <div class="columns is-centered is-mobile">
                                <div class="column is-6">
                                    <progress class="progress is-success is-small" value="{{$server->benchmark_percentage}}" max="100" style="margin:0;">15%</progress>
                                    <p class="sau-u-font__size--xs pt-2"><strong>{{$server->benchmark}} BENCHMARK</strong></p>
                                </div>
                            </div>
                            <div>
                                <ul>
                                    <li class="pb-1">
                                        <p class="sau-u-font__size--md"><strong>Processor</strong></p>
                                        <p class="sau-u-font__size--sm">{{$server->processor_line_1}}</p>
                                        <p class="sau-u-font__size--sm">{{$server->processor_line_2}}</p>
                                    </li>
                                    <li class="pb-1">
                                        <p class="sau-u-font__size--md"><strong>Memory</strong></p>
                                        <p class="sau-u-font__size--sm">{{$server->memory}}</p>
                                    </li>
                                    <li class="pb-1">
                                        <p class="sau-u-font__size--md"><strong>Storage</strong></p>
                                        <p class="sau-u-font__size--sm">{{$server->storage_line_1}}</p>
                                        <p class="sau-u-font__size--sm">{{$server->storage_line_2}}</p>
                                    </li>
                                    <li class="pb-1">
                                        <p class="sau-u-font__size--md"><strong>Data</strong></p>
                                        <p class="sau-u-font__size--sm">{{$server->data}}</p>
                                    </li>
                                </ul>
                            </div>
                            <p class="is-size-2 has-text-weight-semibold" style="margin-bottom:-15px;">${{$server->price}}.00</p>
                            <p class="sau-u-font__size--xs py-2">ex.GST/month</p>
                            <a href="/marketplace/{{ Request::segment(2) }}/{{$serverList->slug}}/{{$server->slug}}" class="button is-primary is-medium mx-3 mb-3">Buy Now</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

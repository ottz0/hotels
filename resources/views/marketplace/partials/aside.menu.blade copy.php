            <!-- Aside Menu -->
            <aside class="column is-3">
                <ul class="sau-m-aside-nav">
                    @foreach ($serverCategories[0]->siblingsAndSelf as $serverCategory)
                        <li>
                            <a href="/marketplace/{{$serverCategory->slug}}/{{$serverCategory->slug}}" class="{{ (request()->segment(3) === $serverCategory->slug) ? 'is-active' : '' }}">
                                <div class="is-flex">
                                    <div class="sau-m-aside-nav__img has-text-centered mr-2">
                                        <img src="/images/{{$serverCategory->slug}}.svg" alt="{{$serverCategory->title}}" width="30">
                                    </div>
                                    <div>
                                        <p class="sau-m-aside-nav__desc">{{$serverCategory->title}}</p>
                                        <p class="sau-m-aside-nav__tag">{{$serverCategory->tagline}}</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                    {{-- @foreach ($serverCategories[0] as $serverCategory)
                        <li>
                            <a href="/marketplace/{{$category->slug}}/{{$serverCategories->slug}}" class="{{ (request()->segment(1) === $serverCategories->slug) ? 'is-active' : '' }}">
                                <div class="is-flex">
                                    <div class="sau-m-aside-nav__img has-text-centered mr-2">
                                        <img src="/images/{{$serverCategory->slug}}.svg" alt="{{$serverCategory->title}}" width="30">
                                    </div>
                                    <div>
                                        <p class="sau-m-aside-nav__desc">{{$serverCategory->title}}</p>
                                        <p class="sau-m-aside-nav__tag">Up in minutes, No long term contracts</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach --}}
                </ul>
            </aside>

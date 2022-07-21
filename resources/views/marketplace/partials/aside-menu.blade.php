<aside class="column">
    <ul class="sau-m-aside-nav">
        @foreach ($parentCategories as $parentCategory)
            <li>
                <a href="/marketplace/{{ Request::segment(2) }}/{{$parentCategory->slug}}" class="{{ (request()->segment(3) === $parentCategory->slug) ? 'is-active' : '' }}">
                    <div class="is-flex">
                        <div class="sau-m-aside-nav__img has-text-centered mr-2">
                            <img src="/images/{{$parentCategory->slug}}.svg" alt="{{$parentCategory->title}}" width="30">
                        </div>
                        <div>
                            <p class="sau-m-aside-nav__desc">{{$parentCategory->title}}</p>
                            <p class="sau-m-aside-nav__tag">{{$parentCategory->tagline}}</p>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</aside>

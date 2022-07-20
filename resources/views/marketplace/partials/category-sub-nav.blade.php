<nav>
    <ul class="sau-c-nav-list pt-5 pb-3">
        @foreach ($rootCategories as $rootCategory)
            <li><a href="/marketplace/{{$rootCategory->slug}}" class="{{ (request()->segment(2) === $rootCategory->slug) ? 'is-active' : '' }}">{{$rootCategory->title}}</a></li>
        @endforeach
        <li><a href="#">Private Cloud</a></li>
        <li><a href="#">Virtual Data Centres</a></li>
    </ul>
</nav>

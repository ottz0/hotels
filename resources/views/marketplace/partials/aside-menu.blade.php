<aside>



    @foreach ($parentCategories as $parentCategory)
        <a href="/marketplace/{{ Request::segment(2) }}/{{$parentCategory->slug}}">{{$parentCategory->title}}</a> <br />
    @endforeach



{{-- {{$serverCategories}}
    @foreach ($serverCategories as $serverCategory)
        <a href="/marketplace/">{{$serverCategory->title}}</a><br />
    @endforeach --}}
</aside>

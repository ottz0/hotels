<div class="columns">
    <div class="column">
        <table class="table is-fullwidth">
            <thead>
                <tr>
                    <th><abbr title="id">ID</abbr></th>
                    <th>Hotel</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $key => $hotel)
                    <tr>
                        <th>{{$hotel->id}}</th>
                        <td><a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}">{{$hotel->name}}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

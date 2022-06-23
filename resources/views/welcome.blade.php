
@extends('layouts.app')
@section('content')
<div class="columns pt-5">
    <div class="column is-half is-offset-one-quarter">
        <h1 class="is-size-1">This is the home page</h1>
        <test />
        <b-progress :value="80" show-value format="percent"></b-progress>
        @include('hotels.partials.hotel-list')
    </div>
</div>
@endsection

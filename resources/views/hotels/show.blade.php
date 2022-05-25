@extends('layouts.app')
@section('content')
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-content">
                  <div class="content">
                      <h2>{{ $hotel->name }}</h2>
                    <p>{{ $hotel->street_name }} {{$hotel->postcode}}, {{$hotel->state}}</p>
                  </div>
                </div>
                <footer class="card-footer">
                    <a href="/hotels" class="card-footer-item">Back to hotels</a>
                    <a href="{{ route('hotels.edit', ['hotel' => $hotel->id]) }}" class="card-footer-item">Edit hotel</a>
                  </footer>
              </div>
        </div>
    </div>
@endsection


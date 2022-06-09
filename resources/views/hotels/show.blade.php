@extends('layouts.app')
@section('content')
    <div class="columns pt-5">
        <div class="column is-half is-offset-one-quarter">
            <div class="card">
                <div class="card-content">
                  <div class="content">
                      <h2>{{ $hotel->name }}</h2>
                    <p>{{ $hotel->address }} {{$hotel->postcode}}, {{$hotel->state}}</p>
                    <p>Star Rating: {{$hotel->star_rating}}</p>
                    <hr>
                    <h5>Hotel Facilities</h5>
                    @if ($hotel->hotelFacilities->parking)<i class="fas fa-parking"></i> Parking @endif
                    @if ($hotel->hotelFacilities->fitness_centre)<i class="far fa-heart-rate"></i> fitness_centre @endif
                    @if ($hotel->hotelFacilities->bar)<i class="fas fa-cocktail"></i> Bar @endif
                    @if ($hotel->hotelFacilities->swimming_pool)<i class="fas fa-swimming-pool"></i> Swimming Pool @endif
                    @if ($hotel->hotelFacilities->free_wifi)<i class="fas fa-wifi"></i> Free Wifi @endif
                  </div>
                </div>
                <footer class="card-footer">
                    <a href="/hotels" class="card-footer-item">Back to hotels</a>
                    <a href="{{ route('hotels.edit', ['hotel' => $hotel->id]) }}" class="card-footer-item">Edit hotel</a>
                    <a href="{{ route('hotels.destroy', ['hotel' => $hotel->id]) }}" class="card-footer-item">Delete hotel</a>
                  </footer>
              </div>
        </div>
    </div>
@endsection


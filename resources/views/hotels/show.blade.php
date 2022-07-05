@extends('layouts.main')
@section('content')
<main class="sau-c-page-hero sau-c-page-hero__light sau-c-page-hero__light--white" style="height:100vh;">
    <div class="container">
        @include('layouts.partials.nav')
    </div>
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
                <!-- Auth -->
                @auth
                    <footer class="card-footer">
                        <a href="/hotels" class="card-footer-item">Back to hotels</a>
                        <a href="{{ route('hotels.edit', ['hotel' => $hotel->id]) }}" class="card-footer-item">Edit hotel</a>
                        <form class="d-inline" action="{{ route('hotels.destroy', ['hotel' => $hotel->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete!" class="button is-danger">
                        </form>
                    </footer>
                @endauth
              </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <a href="{{ url("/hotels/{$hotel->id}/reviews/create") }}">Create a review</a>
            <h3 class="is-size-3">Hotel Reviews</h3>
            @foreach ($hotel->hotelReviews as $review)
                <p>{{ $review->review }}</p>
                <!-- Auth -->
                @auth
                <div>
                    <a href="{{ url("/hotels/{$hotel->id}/reviews/{$review->id}/edit") }}">Edit Review</a>
                    <form class="d-inline" action="{{ route('hotels.reviews.destroy', ['hotel' => $hotel->id, 'review' => $review->id ]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete Review" class="button is-danger is-small">
                    </form>
                </div>
                @endauth
                <br />
                <br />
            @endforeach
        </div>
    </div>
</main>
@endsection

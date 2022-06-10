
<h2 class="is-size-2">Details</h2>
<div class="field">
    <label class="label">Hotel Name</label>
    <div class="control">
        <input class="input" type="text" placeholder="Hotel Name" name="name" value="{{ old('name', optional($hotel ?? null)->name) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<div class="field">
    <label class="label">Address</label>
    <div class="control">
        <input class="input" type="text" placeholder="Address" name="address" value="{{ old('address', optional($hotel ?? null)->address) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<div class="field is-horizontal">
    <div class="field-body">
        <div class="field">
            <label class="label">Postcode</label>
            <div class="control">
                <input class="input" type="text" placeholder="Postcode" name="postcode" value="{{ old('postcode', optional($hotel ?? null)->postcode) }}">
            </div>
            <p class="help">This is a help text</p>
        </div>

        <div class="field">
            <label class="label">State</label>
            <div class="control">
                <input class="input @error('state') is-danger @enderror" type="text" placeholder="State" name="state" value="{{ old('state', optional($hotel ?? null)->state) }}">
            </div>
            @error('state')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>

<div class="field">
    <label class="label">Star Rating</label>
    <div class="control">
        <input class="input" type="text" placeholder="Star Rating" name="star_rating" value="{{ old('star_rating', optional($hotel ?? null)->star_rating) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<hr />

{{-- value="{{old($hotel->hotelFacilities->fitness_centre ? 'on':'off', 'on')}}" --}}

{{-- <input type="checkbox" name="fitness_centre" {{ (old() ? old('fitness_centre', false) : $hotel->hotelFacilities->fitness_centre ?? false) ? 'checked' : '' }}> --}}

{{-- <input type="checkbox" name="fitness_centre" {{ $hotel->hotelFacilities->fitness_centre ? 'checked ':''}} value="{{ old('on', optional($hotel->hotelFacilites->fitness_centre ?? null)->fitness_centre) }}"> --}}


<h2 class="is-size-2">Facilities</h2>
<div class="pb-5">
    <label class="checkbox">
        <input type="checkbox" name="fitness_centre" {{ (old() ? old('fitness_centre', false) : $hotel->hotelFacilities->fitness_centre ?? false) ? 'checked' : '' }}>
        Fitness Centre
      </label>
      <label class="checkbox">
        <input type="checkbox" name="bar" {{ (old() ? old('bar', false) : $hotel->hotelFacilities->bar ?? false) ? 'checked' : '' }}>
        Bar
      </label>
      <label class="checkbox">
        <input type="checkbox" name="swimming_pool" {{ (old() ? old('swimming_pool', false) : $hotel->hotelFacilities->swimming_pool ?? false) ? 'checked' : '' }}>
        Swimming Pool
      </label>
      <label class="checkbox">
        <input type="checkbox" name="parking" {{ (old() ? old('parking', false) : $hotel->hotelFacilities->parking ?? false) ? 'checked' : '' }}>
        Parking
      </label>
      <label class="checkbox">
        <input type="checkbox" name="free_wifi" {{ (old() ? old('free_wifi', false) : $hotel->hotelFacilities->free_wifi ?? false) ? 'checked' : '' }}>
        Free Wifi
      </label>
</div>

@if($errors->any())
    <article class="message is-danger">
        <div class="message-body">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </article>
@endif

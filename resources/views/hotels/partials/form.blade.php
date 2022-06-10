
<h2 class="is-size-2">Details</h2>
<div class="field">
    <label class="label">Hotel Name</label>
    <div class="control">
        <input class="input" type="text" placeholder="Hotel Name" name="name" value="{{ old('name', optional($hotel[0] ?? null)->name) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<div class="field">
    <label class="label">Address</label>
    <div class="control">
        <input class="input" type="text" placeholder="Address" name="address" value="{{ old('address', optional($hotel[0] ?? null)->address) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<div class="field is-horizontal">
    <div class="field-body">
        <div class="field">
            <label class="label">Postcode</label>
            <div class="control">
                <input class="input" type="text" placeholder="Postcode" name="postcode" value="{{ old('postcode', optional($hotel[0] ?? null)->postcode) }}">
            </div>
            <p class="help">This is a help text</p>
        </div>

        <div class="field">
            <label class="label">State</label>
            <div class="control">
                <input class="input @error('state') is-danger @enderror" type="text" placeholder="State" name="state" value="{{ old('state', optional($hotel[0] ?? null)->state) }}">
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
        <input class="input" type="text" placeholder="Star Rating" name="star_rating" value="{{ old('star_rating', optional($hotel[0] ?? null)->star_rating) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<hr />



<h2 class="is-size-2">Facilities</h2>
<div class="pb-5">
    <label class="checkbox">
        <input type="checkbox" name="fitness_centre" {{ $hotel[0]->hotelFacilities->fitness_centre ? ' checked ':''}} value="{{ $hotel[0]->hotelFacilities->fitness_centre ? 'on':'off'}}">
        Fitness Centre
      </label>
      <label class="checkbox">
        <input type="checkbox" name="bar" {{ $hotel[0]->hotelFacilities->bar ? ' checked ':''}} value="{{ old('on', optional($hotel[0]->hotelFacilites->bar ?? null)->bar) }}">
        Bar
      </label>
      <label class="checkbox">
        <input type="checkbox" name="swimming_pool" {{ $hotel[0]->hotelFacilities->swimming_pool ? ' checked ':''}} value="{{ old('on', optional($hotel[0]->hotelFacilites->swimming_pool ?? null)->swimming_pool)}}">
        Swimming Pool
      </label>
      <label class="checkbox">
        <input type="checkbox" name="parking" {{ $hotel[0]->hotelFacilities->parking ? ' checked ':''}} value="{{ old('on', optional($hotel[0]->hotelFacilites->parking ?? null)->parking)}}">
        Parking
      </label>
      <label class="checkbox">
        <input type="checkbox" name="free_wifi" {{ $hotel[0]->hotelFacilities->free_wifi ? ' checked ':''}} value="{{ old('on', optional($hotel[0]->hotelFacilites->free_wifi ?? null)->free_wifi)}}">
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

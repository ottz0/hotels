
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
        <input class="input" type="text" placeholder="State" name="state" value="{{ old('state', optional($hotel ?? null)->state) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<div class="field">
    <label class="label">Star Rating</label>
    <div class="control">
        <input class="input" type="text" placeholder="Star Rating" name="star_rating" value="{{ old('star_rating', optional($hotel ?? null)->star_rating) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

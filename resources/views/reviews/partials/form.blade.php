
<h2 class="is-size-2">Review</h2>

<div class="field">
    <label class="label">Date of stay</label>
    <div class="control">
        <input class="input" type="text" placeholder="Date of stay" name="date-of-stay" value="{{ old('date_of_stay', optional($review[0] ?? null)->date_of_stay) }}">
    </div>
    <p class="help">This is a help text</p>
</div>

<div class="field">
    <label class="label">Hotel Name</label>
    <div class="control">
        <textarea class="textarea" placeholder="e.g. Hello world">{{ old('review', optional($review[0] ?? null)->review) }}</textarea>
    </div>
    <p class="help">This is a help text</p>
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

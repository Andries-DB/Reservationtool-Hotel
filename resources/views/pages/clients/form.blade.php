<form action="{{ $action }}" method="post">
    @method("POST")
    @csrf

    <div class="medium-4  columns">
        <label for="title">Titel</label>
        <select id="title" name="title">
            @foreach (['mr', 'ms', 'mrs', 'dr'] as $title)
                <option value="{{ $title }}" {{ old('title', optional($client)->title) === $title ?  'selected="selected"' : ''}}>
                    @lang('app.clients.titles.' . $title)
                </option>
            @endforeach
        </select>
        @error('title')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-4  columns">
        <label for="first_name">Voornaam</label>
        {{-- Option 1: 2nd argument of old() method --}}
        <input id="first_name" name="first_name" maxlength="255" type="text" value="{{ old('first_name', optional($client)->first_name) }}">
        @error('first_name')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-4  columns">
        <label for="last_name">Achternaam</label>
        {{-- Option 2: With ?? operator --}}
        <input id="last_name" name="last_name" type="text" value="{{ old('last_name') ?? optional($client)->last_name }}">
        @error('last_name')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-8  columns">
        <label for="address">Adres</label>
        <input id="address" name="address" type="text" value="{{ old('address') ?? optional($client)->address }}">
        @error('address')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-4  columns">
        <label for="postal_code">Postcode</label>
        <input id="postal_code" name="postal_code" type="text" value="{{ old('postal_code') ?? optional($client)->postal_code }}">
        @error('postal_code')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-4  columns">
        <label for="city">Stad</label>
        <input id="city" name="city" type="text" value="{{ old('city') ?? optional($client)->city }}">
        @error('city')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-4  columns">
        <label for="county">Provincie</label>
        <input id="county" name="county" type="text" value="{{ old('county') ?? optional($client)->county }}">
        @error('county')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-12  columns">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="text" value="{{ old('email') ?? optional($client)->email }}">
        @error('email')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-12  columns">
        <input value="{{ $label }}" class="button success hollow" type="submit">
    </div>
</form>

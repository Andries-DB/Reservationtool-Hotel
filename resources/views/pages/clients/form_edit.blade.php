<form action="{{ $action }}" method="post">
    @method("POST")
    @csrf

    <div class="medium-4  columns">
        <label for="title">Title</label>
        <select id="title" name="title">
            @foreach (['mr', 'ms', 'mrs', 'dr'] as $title)
                <option value="{{ $title }}" {{ old('title', optional($client)->title) === $title ?  'selected="selected"' : ''}}>
                    @lang($title)
                </option>
            @endforeach
        </select>
        @error('title')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-4  columns">
        <label for="first_name">Firstname</label>
        <input id="first_name" name="first_name" maxlength="255" type="text" value="{{ old('firstname', optional($client)->firstname) }}">
        @error('firstname')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-4  columns">
        <label for="last_name">Lastname</label>
        <input id="last_name" name="last_name" type="text" value="{{ old('lastname', optional($client)->lastname) }}">
        @error('lastname')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-8  columns">
        <label for="street">Adress</label>
        <input id="street" name="street" type="text" value="{{ old('street', optional($client)->adress->street) }}">
        @error('street')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-4  columns">
        <label for="postal_code">ZIP Code</label>
        <input id="postal_code" name="postal_code" type="text" value="{{ old('zipcode') ?? optional($client)->adress->zipcode }}">
        @error('postal_code')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-4  columns">
        <label for="city">City</label>
        <input id="city" name="city" type="text" value="{{ old('city') ?? optional($client)->adress->city }}">
        @error('city')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-4  columns">
        <label for="county">State</label>
        <input id="county" name="county" type="text" value="{{ old('country_code') ?? optional($client)->adress->country_code }}">
        @error('county')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <br>
    <div class="medium-12  columns">
        <label for="email">Email</label>
        <input id="email" name="email" type="text" value="{{ old('email') ?? optional($client)->email }}">
        @error('email')
        <span class="form-error is-visible">{{ $message }}</span>
        @enderror
    </div>
    <div class="medium-12  columns">
        <input value="{{ $label }}" class="text-black hover:underline pt-10" type="submit">
    </div>
</form>

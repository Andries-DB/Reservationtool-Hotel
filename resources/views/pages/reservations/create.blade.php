@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('app.reservations.create.title')</h4>
            @if ($errors->any())
                <div class="callout alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="medium-2  columns">Boeking voor:</div>
            <div class="medium-2  columns"><b>{{ $client->full_name }}</b></div>
            <form action="" method="GET">
                <div class="medium-1  columns">Van:</div>
                <div class="medium-2  columns"><input name="start_date" value="{{ $start_date }}" type="date" class="datepicker" /></div>
                <div class="medium-1  columns">Tot:</div>
                <div class="medium-2  columns"><input name="end_date" value="{{ $end_date }}" type="date" class="datepicker" /></div>
                <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
            </form>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">Kamer</th>
                    <th width="200">Beschikbaarheid</th>
                    <th width="200">Actie</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->number }} ({{ $room->name }})</td>
                            @if (!in_array($room->id, $reserved_rooms))
                                <td>
                                    <div class="callout success">
                                        <h7>Beschikbaar</h7>
                                    </div>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('reservations.create') }}">
                                        @csrf
                                        <input type="hidden" name="room_id" value="{{ $room->id }}" />
                                        <input type="hidden" name="client_id" value="{{ $client->id }}" />
                                        <input type="hidden" name="start_date" value="{{ $start_date }}" />
                                        <input type="hidden" name="end_date" value="{{ $end_date }}" />
                                        <button type="submit" class="hollow button">Boek</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <div class="callout warning">
                                        <h7>Bezet</h7>
                                    </div>
                                </td>
                                <td></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

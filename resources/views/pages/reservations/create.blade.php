@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('Create a new reservation')</h4>
            @if ($errors->any())
                <div class="callout alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="medium-2 columns">
                <p>
                     Booking for: <b>{{ $client->firstname . ' ' . $client->lastname }}</b>
                </p>
            </div>
            <form action="" method="GET">
                <div class="medium-1 columns">
                    <p>
                        From:
                    </p>
                </div>
                <div class="medium-2 columns">
                    <input name="date_start" value="{{ $client->date_start }}" type="date" class="datepicker" />
                </div>
                <div class="medium-1 columns mt-2">
                    <p>
                        To:
                    </p>
                </div>
                <div class="medium-2 columns">
                    <input name="date_end" value="{{ $client->date_end }}" type="date" class="datepicker" />
                </div>
                <div class="medium-2 columns">
                    <input class="bg-green-300 text-black px-10 py-5 my-3  rounded-xl hover:bg-green-500 hover:text-white" type="submit" value="Search" />
                </div>
            </form>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">Room</th>
                    <th width="200">Availability</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->name }} <br> <b>on floor </b> {{ $room->floor }}</td>
                            @if (!in_array($room->id, $reserved_rooms))
                                <td>
                                    <div class="text-black font-bold">
                                        <h7>Available</h7>
                                    </div>
                                </td>
                                <td>
                                    <form method="POST" action="{{ route('reservations.create') }}">
                                        @csrf
                                        <input type="hidden" name="room_id" value="{{ $room->id }}" />
                                        <input type="hidden" name="client_id" value="{{ $client->id }}" />
                                        <input type="hidden" name="start_date" value="{{ $start_date }}" />
                                        <input type="hidden" name="end_date" value="{{ $end_date }}" />
                                        <button type="submit" class="text-black hover:underline">Order</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <div class="text-red-600 font-bold">
                                        <h7>Occupied</h7>
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

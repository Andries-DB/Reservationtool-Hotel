    @extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('Reservations')</h4>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">@lang('Room')</th>
                    <th width="200">@lang('Client')</th>
                    <th width="200">@lang('Dates')</th>
                    <th width="200">@lang('Action')</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($reservations as $reservation)
                    <tr>
                        <?php
                            $first_name = $reservation->client->firstname ?? 'none';
                            $last_name = $reservation->client->lastname ?? 'none';
                            $full_name = $first_name . ' ' . $last_name
                        ?>

                        <td>{{ $reservation->room->name ?? 'none' }}</td>
                        <td>{{ $full_name }}</td>
                        <td>{{ $reservation->date_start->format('d-m-Y') }} → {{ $reservation->date_end->format('d-m-Y') }}</td>
                        <td>
                            <form method="POST" action="{{ route('reservations.delete', $reservation->id) }}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="button-delete">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection

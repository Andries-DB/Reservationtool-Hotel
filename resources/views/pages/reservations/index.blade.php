    @extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4 class="text-4xl ">@lang('Reservations')</h4>

            <table class="stack mt-20 border-collapse border-2 border-solid border-white text-sm">
                <thead>
                <tr>
                    <th width="200">@lang('Kamer')</th>
                    <th width="200">@lang('Klant')</th>
                    <th width="200">@lang('Datum')</th>
                    <th width="200">@lang('Verwijder')</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($reservations as $reservation)
                    <tr>
                        <?php
                            $firstname = $reservation->client->firstname ?? 'none';
                            $lastname = $reservation->client->lastname ?? 'none';
                        ?>

                        <td class="text-center">{{ $reservation->room->name ?? 'Nog niet gereserveerd' }}</td>
                        <td class="text-center">{{ $firstname . ' ' . $lastname }}</td>
                        <td class="text-center">{{ $reservation->date_start->format('d-m-Y') }} → {{ $reservation->date_end->format('d-m-Y') }}</td>
                        <td class="text-center">
                            <form method="POST" action="{{ route('reservations.delete', $reservation->id) }}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="bg-red-600 px-7 py-5 text-white text-sm hover:border-none hover:bg-red-700 hover:px-7 hover:py-5 hover:text-white"
                                >Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection

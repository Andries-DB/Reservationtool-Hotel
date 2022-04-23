    @extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4 class="text-4xl ">@lang('Reservations')</h4>
            <table class="stack my-5 border-collapse border-2 border-solid border-white text-sm">
                <thead>
                <tr>
                    <th width="200">Room</th>
                    <th width="200">Client</th>
                    <th width="200">Date</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($reservations as $reservation)
                    <tr>
                        <?php
                            $firstname = $reservation->client->firstname ?? 'none';
                            $lastname = $reservation->client->lastname ?? 'none';
                        ?>

                        <td class="text-center">{{ $reservation->room->name ?? 'Not reserved yet' }}</td>
                        <td class="text-center">{{ $firstname . ' ' . $lastname }}</td>
                        <td class="text-center">{{ $reservation->date_start->format('d-m-Y') }} → {{ $reservation->date_end->format('d-m-Y') }}</td>
                        <td class="text-center">
                            <form method="POST" action="{{ route('reservations.delete', $reservation->id) }}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="font-bold text-lg text-black hover:underline"
                                >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection

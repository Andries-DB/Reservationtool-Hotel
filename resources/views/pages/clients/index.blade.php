@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4 class="text-4xl mb-3">@lang('Clients')</h4>
            <br>
            <div class="medium-2  columns">
                <a class="bg-green-300 text-black px-10 py-5 mt-8  rounded-xl hover:bg-green-500 hover:text-white" href="{{ route('clients.create') }}">Voeg nieuwe klant toe</a>
            </div>
            <br>
            <table>
                <thead>
                <tr>
                    <th class="w-200" >@lang('Name')</th>
                    <th class="w-200" >@lang('Email')</th>
                    <th class="w-200" >@lang('Action')</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->firstname .' ' . $client->lastname }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a class="text-black hover:underline" href="{{ route('clients.update', $client->id) }}">BEWERK</a> <br>
                                <a class="text-black hover:underline" href="{{ route('reservations.create.client', $client->id) }}">BOEK EEN KAMER</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection

@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('Clients')</h4>

            <div class="medium-2  columns">
                <a class="new-client" href="{{ route('clients.create') }}">@lang('Add a new client')</a>
            </div>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">@lang('Name')</th>
                    <th width="200">@lang('Email')</th>
                    <th width="200">@lang('Action')</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->firstname .' ' . $client->lastname }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a class="client-action" href="{{ route('clients.update', $client->id) }}">BEWERK</a> <br>
                                <a class="client-action" href="{{ route('reservations.create.client', $client->id) }}">BOEK EEN KAMER</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection

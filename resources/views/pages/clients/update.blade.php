@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Klant aanpassen</h4>

            @include('pages.clients.form', [
               'action' => route('clients.update', $client->id),
               'label' => 'Aanpassen',
               'client' => $client,
           ])
        </div>
    </div>

@endsection

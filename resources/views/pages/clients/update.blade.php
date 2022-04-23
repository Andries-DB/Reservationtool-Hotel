@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4><b>Edit Client</b></h4>

            @include('pages.clients.form_edit', [
               'action' => route('clients.update', $client->id),
               'label' => 'Edit',
               'client' => $client,
           ])
        </div>
    </div>

@endsection

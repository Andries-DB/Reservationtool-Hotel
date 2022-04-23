@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4><b>New Client</b></h4>

            @include('pages.clients.form_create', [
                'action' => route('clients.create'),
                'label' => 'Make new client',
                'client' => null
            ])
        </div>
    </div>

@endsection

@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Nieuwe klant</h4>

            @include('pages.clients.form', [
                'action' => route('clients.create'),
                'label' => 'Aanmaken',
                'client' => null,
            ])
        </div>
    </div>

@endsection

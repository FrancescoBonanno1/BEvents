@extends('layouts.admin')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(sizeof($operator) > 0)
        <div class="card">
            <div class="card-header">{{ $operator[0]->name }}</div>
            <div class="card-body">
                <p class="card-text">Telefono: {{ $operator[0]->phone }}</p>
                <p class="card-text">Indirizzo: {{ $operator[0]->address }}</p>
                <p class="card-text">Descrizione: {{ $operator[0]->description }}</p>
                <p class="card-text">Prezzo Ingaggio: {{ $operator[0]->engagement_price }}</p>
                <p class="card-text">Data di nascita: {{ $operator[0]->foundation_year }}</p>
            </div>
        </div>
    @endif
@endsection
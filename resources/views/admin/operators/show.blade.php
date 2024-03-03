@extends('layouts.admin')

@section('content')
<div id="container" class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2>Dettagli Operatore</h2>
    </div>
    <div class="row row-cols-2 row-cols-md-2 g-4 py-4">
        <div class="col-3">
            <div class="card">
                <div class="card-header">{{ $operator->name }}</div>
                <div class="card-body">
                    <p class="card-text">Telefono: {{ $operator->phone }}</p>
                    <p class="card-text">Indirizzo: {{ $operator->address }}</p>
                    <p class="card-text">Descrizione: {{ $operator->description }}</p>
                    <p class="card-text">Prezzo Ingaggio: {{ $operator->engagement_price }}</p>
                    <p class="card-text">Data di nascita: {{ $operator->foundation_year }}</p>
                    <p>Specialità :</p>
                    @if ($operator->specializations->isNotEmpty())
                        @foreach ($operator->specializations as $specialization)
                            <p>{{ $specialization->name }}</p>
                            <img class="img" src="../../img/specializzazioni/{{ $specialization->background_image }}" alt="img">
                        @endforeach
                    @endif
                </div>
                <div class="card-footer">
                   
                    <a href="{{ route('admin.operators.edit', $operator->id) }}" class="btn btn-primary">Modifica</a>
                    
                    
                    <form action="{{ route('admin.operators.destroy', $operator->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

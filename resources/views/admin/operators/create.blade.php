@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2>Nuovo Operatore</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <form action="{{ route('admin.operators.store') }}" method="POST">
            @csrf
            {{-- name description --}}
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Inserisci Recapito telefonico</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                    value="{{ old('phone') }}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Inserisci Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    value="{{ old('image') }}">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Inserisci Indirizzo</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                    value="{{ old('address') }}">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="engagement_price" class="form-label">Inserisci prezzo dell'ingaggio</label>
                <input type="decimal" class="form-control @error('engagement_price') is-invalid @enderror" id="engagement_price" name="engagement_price"
                    value="{{ old('engagement_price') }}">
                @error('engagement_price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foundation_year" class="form-label">Inserisci data di nascita</label>
                <input type="year" class="form-control @error('foundation_year') is-invalid @enderror" id="foundation_year"
name="foundation_year" value="{{ old('foundation_year') }}">
                @error('foundation_year')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
</div>
@endsection

{{-- ID
 nome
 PK
 VARCHAR (20)
 Prezzo Ingaggio DECIMAL
 DESCRIZIONE VARCHAR 
TELEFONO
 IMMAGINE
 VARCHAR (50)
 (255)
 VARCHAR (20)
 VARCHAR
 INDIRIZZO 
VARCHAR (50)
 Data di nascita Date --}}
@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <h2>Modifica Operatore</h2>
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
        <form action="{{ route('admin.operators.update', $operator->id) }}" method="POST">
            @csrf
            @method('PUT')
           
            <div class="mb-3">
                <label for="name" class="form-label">Inserisci Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $operator->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Inserisci Recapito telefonico</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                    value="{{ old('phone', $operator->phone) }}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Inserisci Immagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    value="{{ old('image', $operator->image) }}">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Inserisci Indirizzo</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
                    value="{{ old('address', $operator->address) }}">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    value="{{ old('description', $operator->description) }}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="engagement_price" class="form-label">Inserisci prezzo dell'ingaggio</label>
                <input type="decimal" class="form-control @error('engagement_price') is-invalid @enderror" id="engagement_price" name="engagement_price"
                    value="{{ old('engagement_price', $operator->engagement_price) }}">
                @error('engagement_price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="foundation_year" class="form-label">Inserisci data di nascita</label>
                <input type="year" class="form-control @error('foundation_year') is-invalid @enderror" id="foundation_year"
name="foundation_year" value="{{ old('foundation_year', $operator->foundation_year) }}">
                @error('foundation_year')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
</div>
@endsection
@extends('layouts.base')

@section('title','Aggiungi Fumetto')

@section('content')
    <h1>Crea prodotto</h1>  

    <form action="{{route("comics.store")}}" method="POST">
        
        @csrf

        <div class="form-group">
            <label for="title">Titolo fumetto</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo del fumetto" value="{{old('title')}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrizione fumetto</label>
            <input type="description" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci una descrizione" value="{{old('description')}}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="thumb">Immagine di copertina</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Inserisci la url dell'immagine" value="{{old('thumb')}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="price">Prezzo fumetto</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo" value="{{old('price')}}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci il titolo del fumetto" value="{{old('series')}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci il titolo del fumetto" value="{{old('sale_date')}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Tipo fumetto</label>
            <select class="form-control form-control-md" id="type" name="type">
                <option value="comic book">Comic book</option>
                <option value="graphic novel">Graphic novel</option>
            </select>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
        
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
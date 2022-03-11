@extends('layouts.base')

@section('title','Aggiungi Fumetto')

@section('content')
    <h1>Crea prodotto</h1>  

    <form action="{{route("comics.store")}}" method="POST">
        
        @csrf

        <div class="form-group">
            <label for="title">Titolo fumetto</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto">
        </div>

        <div class="form-group">
            <label for="description">Descrizione fumetto</label>
            <input type="description" class="form-control" id="description" name="description" rows="3" placeholder="Inserisci una descrizione">
        </div>

        <div class="form-group">
            <label for="thumb">Immagine di copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la url dell'immagine">
        </div>
        
        <div class="form-group">
            <label for="price">Prezzo fumetto</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
        </div>

        <div class="form-group">
            <label for="sale_date"></label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci il titolo del fumetto">
        </div>

        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci il titolo del fumetto">
        </div>

        <div class="form-group">
            <label for="type">Tipo fumetto</label>
            <select class="form-control form-control-md" id="type" name="type">
                <option value="comic book">Comic book</option>
                <option value="graphic novel">Graphic novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
        
    </form>
@endsection
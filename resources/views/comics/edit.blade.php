@extends('layouts.base')

@section('title','Comics')

@section('content')
    <h1>Modifica fumetto {{$comic->title}}</h1>
    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-info">Indietro</button></a>

    <form action="{{route("comics.update", $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="title">Nome Fumetto</label>
                <input name="title" value="{{$comic->title}}"  class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci titolo fumetto">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-12">
                <label for="description">Descrizione fumetto</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror"  rows="3">{{$comic->description}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="thumb">Copertina Fumetto</label>
            <textarea name="thumb" value="{{$comic->thumb}}" type="text" class="form-control @error('thumb') is-invalid @enderror" placeholder="Inserisci url copertina">{{$comic->thumb}}</textarea>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="">
            <img src="{{$comic->thumb}}" alt="">
        </div>

        <div class="form-group">
            <label for="price">Prezzo Fumetto</label>
            <input name="price" value="{{$comic->price}}" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Inserisci il prezzo del fumetto">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="series">Serie</label>
                <input name="series" value="{{$comic->series}}" type="text" class="form-control @error('series') is-invalid @enderror">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="sale_date">Data di vendita</label>
                <input name="sale_date" value="{{$comic->sale_date}}" type="text" class="form-control @error('sale_date') is-invalid @enderror">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="type">Tipo Fumetto</label>
                <select name="type" class="form-control">
                    <option value="comic book" {{$comic->type == "comic book"? "selected": ""}}>comic book</option>
                    <option value="graphic novel" {{$comic->type == "graphic novel"? "selected": ""}}>graphic novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>

        {{-- <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form> --}}
    </form>
@endsection
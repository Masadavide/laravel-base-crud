@extends('layouts.base')

@section('title','prodotto')

@section('content')
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}">


    <a href="{{route("comics.index")}}"><button type="button" class="btn btn-primary">back</button></a>
@endsection
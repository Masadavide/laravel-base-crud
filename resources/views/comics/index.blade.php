@extends('layouts.base')

@section('title','lista fumetti')

@section('content')
<table class="table">
    <a href="{{route('comics.create')}}">
        <button type="button" class="btn btn-success">Aggiungi fumetto</button>
    </a>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</th>
                <td>{{$comic->description}}</th>
                <td><img src="{{$comic->thumb}}" alt=""></th>
                <td>{{$comic->price}}</th>
                <td>{{$comic->series}}</th>
                <td>{{$comic->sale_date}}</th>
                <td>{{$comic->type}}</th>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}">
                        <button type="button" class="btn btn-primary">Information</button>
                    </a>
                    <a href="{{route('comics.edit', $comic->id)}}">
                        <button type="button" class="btn btn-warning">Edit</button>
                    </a>
                    <form method="post" action="{{route('comics.destroy', $comic->id)}}">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </form>
                </th>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
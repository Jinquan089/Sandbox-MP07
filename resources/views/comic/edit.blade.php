@extends('layouts.plantilla')

@section('title', 'Actualizar comic')
@section('content')
    <h1>En esta página podremos actualizar un curso</h1>
    <form action="{{ route('comic.update', $comic) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Nombre</label>
        <input type="text" name="title" id="title" value="{{ $comic->title }}"><br>
        <label for="genre">Genero</label>
        <input type="text" name="genre" id="genre" value="{{ $comic->genre }}"><br>
        <label for="collection">Coleccion</label>
        <input type="text" name="collection" id="collection" value="{{ $comic->collection }}"><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection

@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')
    <h1>Bienvenido al curso {{ $comic->title }}</h1>
    <a href="{{ route('comic.index') }}">Volver a la página de comic</a><br>
    <a href="{{ route('comic.create') }}">Crear un comic nuevo</a><br>
    <form action="{{ route('comic.destroy', $comic) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar comic</button></form>
    <a href="{{ route('comic.edit', $comic->id) }}">Editar este comic</a><br>
    <p><strong>Genero </strong>{{ $comic->genre }}</p>
    <p>Coleccion: {{ $comic->collection }}</p>
@endsection

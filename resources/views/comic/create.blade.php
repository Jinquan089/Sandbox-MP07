@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')
    <h1>En esta pagina podrems crear un curso nuevo</h1>
    <form action="{{route('comic.store')}}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"><br>
        <label for="genre">Genero</label>
        <input type="text" name="genre" id="genre"><br>
        <label for="collection">Coleccion</label>
        <input name="collection" id="collection"><br>
        <button type="submit">Enviar</button>
    </form>
@endsection
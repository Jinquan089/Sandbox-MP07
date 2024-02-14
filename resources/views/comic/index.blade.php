@extends('layouts.plantilla')

@section('title', 'Home')
@section('content')
    <h1>Bienvenido pagina principal index comics</h1>
    <ul>
        @foreach ($comic as $comics)
            <li>{{$comics->id}}<a href="{{route('comic.show', $comics->id)}}"> {{$comics->title}}</a></li>
        @endforeach
    </ul>
    {{$comic->links()}}
@endsection
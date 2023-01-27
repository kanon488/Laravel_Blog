@extends('layouts.plantilla')

@section('title','Curso: ' .$curso->name)

@section('content')
    <h1>Bienvenido al curso: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index')}}">Regresar a cursos</a>

    <p><strong>{{ $curso->categoria }}</strong></p>
    <p><strong>{{ $curso->description }}</strong></p>
    {{-- <code>
        {{ $curso }}
    </code> --}}
@endsection

@extends('layouts.plantilla')

@section('title','Curso: ' .$curso->name)

@section('content')
    <h1>Bienvenido al curso: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index')}}">Regresar a cursos</a>
    <br>
    <a href="{{ route('cursos.edit',$curso) }}">Editar curso:</a>
    <p><strong>{{ $curso->categoria }}</strong></p>
    <p><strong>{{ $curso->description }}</strong></p>

    <form action="{{ route('cursos.destroy',$curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    {{-- <code>
        {{ $curso }}
    </code> --}}
@endsection

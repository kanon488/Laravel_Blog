@extends('layouts.plantilla')

@section('title','Crear Cursos')

@section('content')
    <h1>En esta página podras editar un curso.</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf

        @method('put')

        <label for="">Nombre:
            <br>
            <input type="text" name="name" value="{{ $curso->name }}">
        </label>
        <br>
        <label for="">Descripción:
            <br>
            <textarea name="description" cols="30" rows="5" >{{ $curso->description }}</textarea>
        </label>
        <br>
       <label for="">Categoría:
        <br>
       <input type="text" name="category" value="{{ $curso->categoria }}">
       </label>
       <br>
       <button type="submit">Actualizar</button>
    </form>

    {{-- <code>
        {{ $curso }}
    </code> --}}
@endsection

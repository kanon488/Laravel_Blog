@extends('layouts.plantilla')

@section('title','Crear Cursos')

@section('content')
    <h1>En esta página podras editar un curso.</h1>
    <a href="{{ route('cursos.show',$curso->id) }}">Regresar</a>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf

        @method('put')

        <label for="">Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
        <br>
        <small>{{ $message }}</small>
        <br>
        @enderror
        <br>
        <label for="">Descripción:
            <br>
            <textarea name="description" cols="30" rows="5" >{{  old('description', $curso->description) }}</textarea>
        </label>
        @error('description')
        <br>
        <small>{{ $message }}</small>
        <br>
        @enderror
        <br>
       <label for="">Categoría:
        <br>
       <input type="text" name="category" value="{{ old('category', $curso->categoria) }}">
       </label>
       @error('category')
        <br>
        <small>{{ $message }}</small>
        <br>
        @enderror
       <br>
       <button type="submit">Actualizar</button>
    </form>

    {{-- <code>
        {{ $curso }}
    </code> --}}
@endsection

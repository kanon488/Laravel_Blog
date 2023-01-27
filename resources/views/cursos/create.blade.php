@extends('layouts.plantilla')

@section('title','Crear Cursos')

@section('content')
    <h1>En esta página podras crear cursos.</h1>
    <a href="{{ route('cursos.index') }}">Regresar</a>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <label for="">Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label for="">Descripción:
            <br>
            <textarea name="description" cols="30" rows="5">{{ old('description') }}</textarea>
        </label>
        @error('description')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
        <br>
       <label for="">Categoría:
        <br>
       <input type="text" name="category" value="{{ old('category') }}">
       </label>
       @error('category')
            <br>
            <small>{{ $message }}</small>
            <br>
        @enderror
       <br>
       <button type="submit">Enviar formulario</button>
    </form>
@endsection

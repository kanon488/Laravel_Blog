@extends('layouts.plantilla')

@section('title','Crear Cursos')

@section('content')
    <h1>En esta página podras crear cursos.</h1>
    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf

        <label for="">Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label for="">Descripción:
            <br>
            <textarea name="description" cols="30" rows="5"></textarea>
        </label>
        <br>
       <label for="">Categoría:
        <br>
       <input type="text" name="category">
       </label>
       <br>
       <button type="submit">Enviar formulario</button>
    </form>
@endsection

@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
    <h1>Bienvenido a la página de principal de cursos.</h1>

    <a href="{{ route('cursos.create') }}">Crear nuevo curso</a>

    <ul>
       @foreach ($cursos as $curso)
       <li>
        <a href="{{ route('cursos.show',$curso->id) }}">{{$curso->name}}</a>
       </li>
       @endforeach
    </ul>

    <div class="row d-flex">
        {{ $cursos->links() }}
    </div>

@endsection

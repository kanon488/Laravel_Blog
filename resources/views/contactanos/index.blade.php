@extends('layouts.plantilla')
@section('title', 'Contactanos' )

@section('content')
    <h1>Dejanos un mensaje.</h1>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label for="">Nombre:
            <br>
            <input type="text" name="name">
        </label>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="">Correo:
            <br>
            <input type="email" name="correo">
        </label>
        @error('correo')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <label for="">Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        @error('mensaje')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif
@endsection
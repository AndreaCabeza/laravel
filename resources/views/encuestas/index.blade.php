<!-- resources/views/encuesta.blade.php -->

@extends('layout')

@section('title', 'Encuesta de Satisfacción')

@section('content')
    <h1>Encuesta de Satisfacción</h1>
    <!-- Aquí puedes agregar el contenido del formulario de encuesta -->
    <form action="/enviar-encuesta" method="post">
        @csrf
        <label for="nombre">Nombre Completo:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" id="email" required>

        <label for="telefono">Telefono:</label>
        <input type="telefono" name="telefono" id="telefono" required>

        <label for="opinion">Opinión:</label>
        <textarea name="opinion" id="opinion" rows="4" required></textarea>

        <button type="submit">Enviar Encuesta</button>
    </form>
@endsection


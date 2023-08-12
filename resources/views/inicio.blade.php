@extends('layouts.app')
@section('titulo', 'Memorial')
@section('cabecera', 'Memorial - El mejor lugar donde nace la cerveza')
@section('contenido')
<div class="hero min-h-screen" style="background-image: url(https://www.clarin.com/img/2016/06/22/rJl5ocitVl_1256x620.jpg);">
 <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
     <h1 class="mb-5 text-5xl font-bold">Aquí encontrará lo mejor de Memorial!</h1>
      <p class="mb-5">Estamos comprometidos con nuestros clientes entregándoles lo mejor. Nuestro fin es promover la cultura de la cerveza artesanal acompañados con los mejores platos.</p>
       <a href="{{route('cervezas.index')}}" class="btn btn-warning">Iniciar experiencia</a>
    </div>
  </div>
 </div>
</div>
@endsection
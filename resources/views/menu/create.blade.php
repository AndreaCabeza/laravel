@extends('layouts.app')
@section('titulo', 'Crear Plato')
@section('cabecera', 'Crear Plato')
@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
<form action="{{route('menu.store')}}" method="POST">
@csrf
<div class="form-control">
<label class="label" for="nombre">
<span class="label-text">Nombre de Plato</span>
</label>
<input type="text" name="nombre" placeholder="Nombre plato" maxlength="100" class="input input-bordered" value="{{old('nombre')}}" required />
</div>
<div class="form-control">
<label class="label" for="cantidad_personas">
<span class="label-text">De tipo:</span>
</label>
<input type="text" name="cantidad_personas" placeholder="Escriba para cuantas personas" maxlength="255" class="input input-bordered" value="{{old('cantidad_personas')}}" required />
</div>
<div class="form-control">
<label class="label" for="precio">
<span class="label-text">Precio</span>
</label>
<input type="int" name="precio" placeholder="Escriba el precio" maxlength="255" class="input input-bordered" value="{{old('precio')}}" required />
</div>
   
<div class="form-control mt-6">
<button class="btn btn-outline btn-success">Crear Menu</button>
<a href="{{ route('menu.index') }}" class="btn btn-outline btn-danger mt-4">Cancelar</a>
</div>
</form>
</div>
</div>
</div>
@endsection
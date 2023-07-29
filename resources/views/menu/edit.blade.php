@extends('layouts.app')
@section('titulo', 'Editar Plato')
@section('cabecera', 'Editar Plato - ' . $menus->nombre)
@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
<form action="{{route('menu.update', $menus)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
{{-- Nombre --}}
<div class="form-control">
<label class="label" for="nombre">
<span class="label-text">Nombre</span>
</label>
<input type="text" name="nombre" placeholder="Nombre del plato" class="input input-bordered" maxlength="100" value="{{$menus->nombre}}" required />
</div>

{{-- Descripcion --}}
<div class="form-control">
<label class="label" for="cantidad_personas">
<span class="label-text">De tipo:</span>
</label>
<input type="text" name="cantidad_personas" placeholder="Escriba si es Individual, Familiar, Compartir x2 o x3" class="input input-bordered" maxlength="255" value="{{$menus->cantidad_personas}}" />
</div>
{{-- Precio --}}
<div class="form-control">
<label class="label" for="precio">
<span class="label-text">Precio</span>
</label>
<input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered" value="{{$menus->precio}}" required />
</div>
{{-- Stock --}}
<div class="form-control mt-6">
<button class="btn btn-primary">Actualizar Producto</button>
<a href="{{ route('menu.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
</div>
</form>
</div>
</div>
</div>
@endsection
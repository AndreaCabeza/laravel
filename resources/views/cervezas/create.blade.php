@extends('layouts.app')
@section('titulo', 'Crear Cerveza')
@section('cabecera', 'Crear Cerveza')
@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
<form action="{{route('cervezas.store')}}" method="POST">
@csrf
<div class="form-control">
<label class="label" for="nombre">
<span class="label-text">Nombre</span>
</label>
<input type="text" name="nombre" placeholder="Nombre categoría" maxlength="100" class="input input-bordered" required />
</div>
<div class="form-control">
<label class="label" for="descripcion">
<span class="label-text">Descripción</span>
</label>
<input type="text" name="descripcion" placeholder="Escriba la descripción" maxlength="255" class="input input-bordered" />
</div>
<div class="form-control mt-6">
<button class="btn btn-primary">Crear Cerveza</button>
<a href="{{ route('cervezas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
</div>
</form>
</div>
</div>
</div>
@endsection
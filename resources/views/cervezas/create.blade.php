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
<input type="text" name="nombre" placeholder="Nombre cerveza" maxlength="100" class="input input-bordered" value="{{old('nombre')}}" required />
</div>
<div class="form-control">
<label class="label" for="descripcion">
<span class="label-text">Descripción</span>
</label>
<input type="text" name="descripcion" placeholder="Escriba la descripción" maxlength="255" class="input input-bordered" value="{{old('descripcion')}}" required />
</div>
<div class="form-control">
    <label class="label" for="clase">
    <span class="label-text">Clase</span>
    </label>
    <input type="text" name="clase" placeholder="Escriba la clase" maxlength="255" class="input input-bordered" value="{{old('clase')}}" required />
    </div>
    <div class="form-control">
    <label class="label" for="descripcion">
    <span class="label-text">Precio</span>
    </label>
    <input type="int" name="precio" placeholder="Escriba el precio" maxlength="255" class="input input-bordered" value="{{old('precio')}}" required />
    </div>
    <div class="form-control">
    <label class="label" for="codigo">
    <span class="label-text">Codigo</span>
    </label>
    <input type="int" name="codigo" placeholder="Escriba el codigo" maxlength="255" class="input input-bordered" value="{{old('codigo')}}" required />
    </div>
    <div class="form-control">
    <label class="label" for="stock">
    <span class="label-text">Stock</span>
    </label>
    <input type="int" name="stock" placeholder="Escriba el stock" maxlength="255" class="input input-bordered" value="{{old('stock')}}" required />
    </div>
<div class="form-control mt-6">
<button class="btn btn-outline btn-success">Crear Cerveza</button>
<a href="{{ route('cervezas.index') }}" class="btn btn-outline btn-danger mt-4">Cancelar</a>
</div>
</form>
</div>
</div>
</div>
@endsection
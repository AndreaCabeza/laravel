@extends('layouts.app')
@section('titulo', 'Editar Cerveza')
@section('cabecera', 'Editar Cerveza - ' . $cervezas->nombre)
@section('contenido')
<div class="flex justify-center">
<div class="card w-96 shadow-2xl bg-base-100">
<div class="card-body">
<form action="{{route('cervezas.update', $cervezas)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
{{-- Nombre --}}
<div class="form-control">
<label class="label" for="nombre">
<span class="label-text">Nombre</span>
</label>
<input type="text" name="nombre" placeholder="Nombre del producto" class="input input-bordered" maxlength="100" value="{{$cervezas->nombre}}" required />
</div>

{{-- Descripcion --}}
<div class="form-control">
<label class="label" for="descripcion">
<span class="label-text">Descripción</span>
</label>
<input type="text" name="descripcion" placeholder="Escriba la descripción" class="input input-bordered" maxlength="255" value="{{$cervezas->descripcion}}" />
</div>
{{-- Precio --}}
<div class="form-control">
<label class="label" for="precio">
<span class="label-text">Precio</span>
</label>
<input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered" value="{{$cervezas->precio}}" required />
</div>
{{-- Stock --}}
<div class="form-control">
<label class="label" for="stock">
<span class="label-text">Stock</span>
</label>
<input type="number" name="stock" placeholder="Escriba el stock" class="input input-bordered" value="{{$cervezas->stock}}" required />
</div>
<div class="form-control mt-6">
<button class="btn btn-primary">Actualizar Producto</button>
<a href="{{ route('cervezas.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
</div>
</form>
</div>
</div>
</div>
@endsection
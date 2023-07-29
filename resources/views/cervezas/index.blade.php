@extends('layouts.app')
@section('titulo', 'Listar Cervezas')
@section('cabecera', 'Listar Cervezas')
@section('contenido')
<div class="flex justify-end m-4">
<a href="{{ route('cervezas.create') }}" class="btn btn-outline btn-sm">Crear Cerveza</a>
</div>
<div class="flex justify-center mx-6">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
@foreach ($cervezas as $cervezas)
<div class="card w-64 bg-base-100 shadow-xl">
<div class="card-body">
<h2 class="card-title">{{$cervezas->nombre}}</h2>
<p>{{Str::limit($cervezas->descripcion, 80)}}</p>
{{-- precio y stock--}}
<div class="flex space-x-4">
<div class="badge badge-neutral">${{number_format($cervezas->precio, 0, ',', '.')}}</div>
<div class="badge badge-ghost">{{$cervezas->stock}} en stock</div>
</div>
<div class="card-actions justify-end mt-5">
{{-- Editar --}}
<a href="{{ route('cervezas.edit', $cervezas->id) }}" class="btn btn-outline btn-warning btn-xs">Editar</a>
{{-- Eliminar --}}
<form action="{{ route('cervezas.destroy', $cervezas->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" onclick="return confirm('¿Desea eliminar el producto {{ $cervezas->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
</form>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection
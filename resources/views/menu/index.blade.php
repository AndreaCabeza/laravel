@extends('layouts.app')
@section('titulo', 'Listar Platos')
@section('cabecera', 'Listar Platos')
@section('contenido')
<div class="flex justify-end m-4">
<a href="{{ route('menu.create') }}" class="btn btn-outline btn-sm">Crear Plato</a>
</div>
<div class="flex justify-center mx-6">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-10">
@foreach ($menus as $menus)
<div class="card w-64 bg-base-100 shadow-xl">
<div class="card-body">
<h2 class="card-title">{{$menus->nombre}}</h2>
<p>{{Str::limit($menus->cantidad_personas, 80)}}</p>
{{-- precio y stock--}}
<div class="flex space-x-4">
<div class="badge badge-neutral">${{number_format($menus->precio, 0, ',', '.')}}</div>
</div>
<div class="card-actions justify-end mt-5">
{{-- Editar --}}
<a href="{{ route('menu.edit', $menus->id) }}" class="btn btn-outline btn-warning btn-xs">Editar</a>
{{-- Eliminar --}}
<form action="{{ route('menu.destroy', $menus->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" onclick="return confirm('¿Desea eliminar el producto {{ $menus->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
</form>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection
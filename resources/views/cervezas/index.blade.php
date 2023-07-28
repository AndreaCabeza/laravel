@extends('layouts.app')
@section('titulo', 'Listar Categorías')
@section('cabecera', 'Listar Categorías')
@section('contenido')
<div class="flex justify-end m-4">
<a href="{{ route('cervezas.create') }}" class="btn btn-outline btn-sm">Crear Cerveza</a>
</div>
<div class="flex justify-center">
<div class="overflow-x-auto">
<table class="table table-zebra">
<thead>
<tr>
<th>Nombre</th>
<th>Descripción</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
@foreach ($cervezas as $cervezas)
<tr>
<td>{{ $cervezas->nombre }}</td>
<td>{{ $cervezas->descripcion }}</td>
<td class="flex space-x-2">
<a href="{{ route('cervezas.edit', $cervezas->id) }}" class="btn btn-warning btn-xs">Editar</a>
{{-- si la categoria no tiene productos asociados, se puede eliminar --}}

<form action="{{ route('cervezas.destroy', $cervezas->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit" onclick="return confirm('¿Desea eliminar la categoría {{ $cervezas->nombre }}?')" class="btn btn-error btn-xs">Eliminar</button>
</form>
@endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
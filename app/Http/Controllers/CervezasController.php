<?php

namespace App\Http\Controllers;

use App\Models\Cervezas;
use Illuminate\Http\Request;

class CervezasController extends Controller
{
     // Método para mostrar todas las cervezas (index)
     public function index()
     {
         $cervezas = Cervezas::all();
         return view('cervezas.index', compact('cervezas'));
     }
 
     // Método para mostrar el formulario de creación de una cerveza (create)
     public function create()
     {
         return view('cervezas.create');
     }
 
     // Método para guardar una nueva cerveza en la base de datos (store)
     public function store(Request $request)
     {
         $request->validate([
             'clase' => 'required',
             'nombre' => 'required',
             'descripcion' => 'required',
             'precio' => 'required|numeric',
             'codigo' => 'required',
             'stock'=> 'required',
             'activo'=> 'required',
         ]);
 
         Cervezas::create($request->all());
 
         return redirect()->route('cervezas.index')
                          ->with('success', 'Cerveza creada exitosamente.');
     }

     //Mostrar una cerveza especifica 
     public function show($id)
     {
         $cerveza = Cervezas::findOrFail($id);
         return view('cervezas.show', compact('cerveza'));
     }

      // Mostrar el formulario para editar un elemento
 
     public function edit($id)
     {
         $cerveza = Cervezas::findOrFail($id);
         return view('cervezas.edit', compact('cerveza'));
     }
 

      // Actualizar un elemento en la base de datos
     public function update(Request $request, $id)
     {
         $cerveza = Cervezas::findOrFail($id);
         $cerveza->update($request->all());
         return redirect()->route('cervezas.index')->with('success', 'Cerveza actualizada correctamente');
     }
 

       // Eliminar un elemento de la base de datos
     public function destroy($id)
     {
         $cerveza = Cervezas::findOrFail($id);
         $cerveza->delete();
         return redirect()->route('cervezas.index')->with('success', 'Cerveza eliminada correctamente');
     }
 
}

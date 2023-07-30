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
         ]);
 
         Cervezas::create($request->all());
 
         return redirect()->route('cervezas.index');
     }

     //Mostrar una cerveza especifica 
     public function show($id)
     {
         $cerveza = Cervezas::findOrFail($id);
         return view('cervezas.show', compact('cervezas'));
     }

      // Mostrar el formulario para editar un elemento
 
     public function edit($id)
     {
         $cervezas = Cervezas::findOrFail($id);
         return view('cervezas.edit', compact('cervezas'));
     }
 

      // Actualizar un elemento en la base de datos
     public function update(Request $request, $id)
     {
         $cervezas = Cervezas::findOrFail($id);
         $cervezas->update($request->all());
         return redirect()->route('cervezas.index');
     }
 

       // Eliminar un elemento de la base de datos
     public function destroy($id)
     {
         $cervezas = Cervezas::findOrFail($id);
         $cervezas->delete();
         return redirect()->route('cervezas.index');
     }
 
}

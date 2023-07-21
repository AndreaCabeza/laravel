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
}

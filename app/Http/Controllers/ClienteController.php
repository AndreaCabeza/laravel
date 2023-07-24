<?php

namespace App\Http\Controllers;


use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Listar los clientes.
     */
    public function index()
    {
        $cliente= Cliente::all();
        return $cliente;
    }

     // Método para mostrar el formulario de creación de un cliente(create)
     public function create()
     {
         return view('clientes.create');
     }
 
     // Método para guardar un nuevo cliente en la base de datos (store)
     public function store(Request $request)
     {
         $request->validate([
             'fecha_nacimiento' => 'required',
             'nombre_completo' => 'required',
             'correo' => 'required',
             'telefono'=> 'required',
         ]);
 
         Cliente::create($request->all());
 
         return redirect()->route('clientes.index')
                          ->with('success', 'Cliente creado exitosamente.');
     }

     //Mostrar un cliente especifico
     public function show($id)
     {
         $cliente = Cliente::findOrFail($id);
         return view('clientes.show', compact('cliente'));
     }

      // Mostrar el formulario para editar un elemento
 
     public function edit($id)
     {
         $cliente = Cliente::findOrFail($id);
         return view('clientes.edit', compact('cliente'));
     }
 

      // Actualizar un elemento en la base de datos
     public function update(Request $request, $id)
     {
         $cliente = Cliente::findOrFail($id);
         $cliente->update($request->all());
         return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
     }
 

       // Eliminar un elemento de la base de datos
     public function destroy($id)
     {
         $cliente = Cliente::findOrFail($id);
         $cliente->delete();
         return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente');
     }
 
}
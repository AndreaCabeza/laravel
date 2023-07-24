<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Mostrar lista de facturas
     */
    public function index()
    {
        $factura = Factura::all();
        return view('factura.index', compact('factura'));
    }

    // Método para mostrar el formulario de creación  (create)
    public function create()
    {
        return view('factura.create');
    }
    /**
     * Guardar la factura 
     */

        public function store(Request $request)
     {
         $request->validate([
             'medio_pago' => 'required',
             'clase_factura' => 'required',
             'fecha_hora' => 'required',
             'correo' => 'required',
             'codigo' => 'required',
             'cliente'=> 'required',
             'monto'=> 'required',
            
         ]);
 
         Factura::create($request->all());
 
         return redirect()->route('factura.index')
                          ->with('success', 'Factura creada exitosamente.');
     }
    //Mostrar una factura especifica 
    public function show($id)
    {
        $factura = Factura::findOrFail($id);
        return view('factura.show', compact('factura'));
    }

     // Mostrar el formulario para editar un elemento

    public function edit($id)
    {
        $factura = Factura::findOrFail($id);
        return view('factura.edit', compact('factura'));
    }

     // Actualizar un elemento en la base de datos
    public function update(Request $request, $id)
    {
        $factura = Factura::findOrFail($id);
        $factura->update($request->all());
        return redirect()->route('facturas.index')->with('success', 'Factura actualizada correctamente');
    }

      // Eliminar un elemento de la base de datos
    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();
        return redirect()->route('facturas.index')->with('success', 'Factura eliminada correctamente');
    }
}

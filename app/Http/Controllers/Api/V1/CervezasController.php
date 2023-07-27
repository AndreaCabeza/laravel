<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Cervezas;
use Illuminate\Http\Request;

class CervezasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //Listar cervezas
    public function index()

     {
         $cervezas = Cervezas::all();
         return response()->json(Cervezas::all(), 200); //200: OK;
     }
    

    /**
     * Store a newly created resource in storage.
     */
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
    //Crear el producto
    Cervezas::create($request->all());
    return response()->json(['success' => true, 'message' => 'Cerveza creada'], 201); //201: Created

    }


    /**
     * Display the specified resource.
     */
    public function show(Cervezas $cervezas)
   {
   return response()->json($cervezas, 200); //200: OK
   }

    /**
     * Update the specified resource in storage.
     */
     // Actualizar un elemento en la base de datos
     public function update(Request $request, $id)
     {
         $cervezas = Cervezas::findOrFail($id);
         $cervezas->update($request->all());
         return response()->json(['success' => true, 'message' => 'Cerveza actualizada'], 200); //200: OK
     }
    /**
     * Remove the specified resource from storage.
     */
     // Eliminar un elemento de la base de datos
     public function destroy($id)
     {
         $cerveza = Cervezas::findOrFail($id);
         $cerveza->delete();
         return response()->json(['success' => true, 'message' => 'Producto eliminado'], 204); //204: No content
     }
}

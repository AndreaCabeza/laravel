<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()

     {
         $menus = Menu::all();
         return response()->json(Menu::all(), 200); //200: OK;
     }
    

    /**
     * Store a newly created resource in storage.
     */
    // Método para guardar una nueva cerveza en la base de datos (store)
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad_personas' => 'required',
            'precio' => 'required|numeric',
        ]);
    //Crear el producto
    Menu::create($request->all());
    return response()->json(['success' => true, 'message' => 'Plato creada'], 201); //201: Created

    }


    /**
     * Display the specified resource.
     */
    public function show(Menu $menus)
   {
   return response()->json($menus, 200); //200: OK
   }

    /**
     * Update the specified resource in storage.
     */
     // Actualizar un elemento en la base de datos
     public function update(Request $request, $id)
     {
         $menus = Menu::findOrFail($id);
         $menus->update($request->all());
         return response()->json(['success' => true, 'message' => 'Plato actualizado'], 200); //200: OK
     }
    /**
     * Remove the specified resource from storage.
     */
     // Eliminar un elemento de la base de datos
     public function destroy($id)
     {
         $menus = Menu::findOrFail($id);
         $menus->delete();
         return response()->json(['success' => true, 'message' => 'Producto eliminado'], 204); //204: No content
     }
}

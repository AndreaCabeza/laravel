<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Método para mostrar todos los menús (index)
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    // Método para mostrar el formulario de creación de un menú (create)
    public function create()
    {
        return view('menu.create');
    }

    // Método para guardar un nuevo menú en la base de datos (store)
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cantidad_personas' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        Menu::create($request->all());

        return redirect()->route('menu.index')
                         ->with('success', 'Menú creado exitosamente.');
    }

}

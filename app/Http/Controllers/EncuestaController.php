<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
     // Método para mostrar el formulario de creación de una encuesta (create)
     public function create()
     {
         return view('encuesta.create');
     }
     //Metodo para guardar las respuestas
     public function store(Request $request)
     {
        $request->validate([
            'nombre_completo' => $request->input('nombre_completo'),
            'email' => $request->input('email'),
            'nivel_satisfaccion' => $request->input('nivel_satisfaccion'),
            'sugerencias' => $request->input('sugerencias'),
            'telefono' => $request->input('telefono'),
        ]);
     return redirect()->route('encuesta.gracias')->with('success', '¡Gracias por completar la encuesta!');
    }
    // Mostrar la página de agradecimiento después de completar la encuesta
    public function gracias()
    {
        return view('encuesta.gracias');
    }
     //Mostrar una encuesta especifica 
     public function show($id)
     {
         $encuesta = Encuesta::findOrFail($id);
         return view('encuesta.show', compact('encuesta'));
     }

      // Mostrar el formulario para editar un elemento
 
     public function edit($id)
     {
         $encuesta = Encuesta::findOrFail($id);
         return view('encuesta.edit', compact('encuesta'));
     }
      // Actualizar un elemento en la base de datos
     public function update(Request $request, $id)
     {
         $encuesta = Encuesta::findOrFail($id);
         $encuesta->update($request->all());
         return redirect()->route('encuesta.index')->with('success', 'Encuesta actualizada correctamente');
     }
       // Eliminar un elemento de la base de datos
     public function destroy($id)
     {
         $encuesta = Encuesta::findOrFail($id);
         $encuesta->delete();
         return redirect()->route('encuesta.index')->with('success', 'Encuesta eliminada correctamente');
     }

}
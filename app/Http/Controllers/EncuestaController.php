<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function enviarEncuesta(Request $request)
    {
        $request->validate([
            'nombre_completo' => 'required',
            'email' => 'required|email',
            'nivel_satisfaccion' => 'required',
            // ... y otras validaciones según tus necesidades
        ]);

        // Crear una nueva instancia de Encuesta y guardar los datos en la tabla 'encuestas'
        Encuesta::create([
            'nombre_completo' => $request->input('nombre_completo'),
            'email' => $request->input('email'),
            'nivel_satisfaccion' => $request->input('nivel_satisfaccion'),
            'sugerencias' => $request->input('sugerencias'),
            'telefono' => $request->input('telefono'),
        ]);

        return response()->json(['mensaje' => 'Encuesta enviada con éxito']); 
    }
}

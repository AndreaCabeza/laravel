<?php

use App\Http\Controllers\CervezasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Ruta para listar clientes

Route::get('/clientes', [ClienteController::class, "index"]) ->name("clientes.index");

//Ruta de la pagina fija de redes sociales

Route::view('/redes', 'redes_sociales') ->name('redes');


// Ruta de la página de inicio
Route::view('/inicio', 'inicio') -> name('inicio');

// Ruta para mostrar la lista de cervezas
Route::get('/cervezas',  [CervezasController::class,'index'])->name('cervezas.index');

// Ruta para mostrar los detalles de una cerveza específica
Route::get('/cervezas/{id}', [CervezasController::class,'show'])->name('cervezas.show');

// Ruta para mostrar el menú del restaurante
Route::get('/menu', [MenuController::class,'index'])->name('menu.index');

// Ruta para mostrar los detalles de un plato específico del menú
Route::get('/menu/{id}', [MenuController::class,'show'])->name('menu.show');



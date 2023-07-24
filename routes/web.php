<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\CervezasController;
use App\Http\Controllers\EncuestaController;


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

//Ruta para editar un cliente

Route::get('/clientes/{id}', [ClienteController::class, "edit"]) ->name("clientes.edit");

//Ruta para ver el formulario de crear cliente

Route::get('/clientes', [ClienteController::class, "create"]) ->name("clientes.create");

//Ruta para mostrar un cliente

Route::get('/clientes/{id}', [ClienteController::class, "show"]) ->name("clientes.show");


//Ruta de la pagina fija de redes sociales

Route::view('/redes', 'redes_sociales') ->name('redes');


// Ruta de la página de inicio
Route::view('/inicio', 'inicio') -> name('inicio');

// Ruta para mostrar la lista de cervezas
Route::get('/cervezas',  [CervezasController::class,'index'])->name('cervezas.index');

// Ruta para mostrar los detalles de una cerveza específica
Route::get('/cervezas/{id}', [CervezasController::class,'show'])->name('cervezas.show');

//Ruta editar un cerveza
Route::get('/cervezas/{id}', [CervezasController::class,'edit'])->name('cervezas.edit');

//Ruta ver el formulario de creacion de una cerveza
Route::get('/cervezas', [CervezasController::class,'create'])->name('cervezas.create');

// Ruta para mostrar el menú del restaurante
Route::get('/menu', [MenuController::class,'index'])->name('menu.index');

// Ruta para mostrar los detalles de un plato específico del menú
Route::get('/menu/{id}', [MenuController::class,'show'])->name('menu.show');

//Ruta para editar el Menu
Route::get('/menu/{id}', [MenuController::class, 'edit'])->name('menu.edit');

//Ruta para ver el formulario de crear un Plato en el Menu
Route::get('/menu', [MenuController::class, 'create'])->name('menu.create');

//Ruta para listar facturas

Route::get('/facturas', [FacturaController::class, "index"]) ->name("facturas.index");

//Ruta para ver el formulario de crear factura

Route::get('/facturas', [FacturaController::class, "create"]) ->name("facturas.create");

//Ruta para mostrar una factura

Route::get('/facturas/{id}', [FacturaController::class, "show"]) ->name("facturas.show");

//Ruta para editar facturas
Route::get('/facturas/{id}', [FacturaController::class, "edit"]) ->name("facturas.edit");

//Ruta de mensaje de gracias luego de completar encuesta
Route::get('/encuesta/gracias', [EncuestaController::class, 'gracias'])->name('encuesta.gracias');

//Ruta para listar facturas

Route::get('/encuestas', [EncuestaController::class, "index"]) ->name("encuestas.index");

//Ruta para ver el formulario de crear factura

Route::get('/encuestas', [EncuestaController::class, "create"]) ->name("encuestas.create");

//Ruta para mostrar una factura

Route::get('/encuestas/{id}', [EncuestaController::class, "show"]) ->name("encuestas.show");

//Ruta para editar facturas
Route::get('/encuestas/{id}', [EncuestaController::class, "edit"]) ->name("encuestas.edit");

//Ruta donde el usuario llena la encuesta
Route::post('/encuestas', [EncuestaController::class, 'store'])->name('encuestas.store');

//Ruta para actualizar un elemento
Route::put('/encuestas/{id}', [EncuestaController::class, 'update'])->name('encuestas.update');

//Ruta para borrar una factura
Route::delete('/facturas/{id}', [EncuestaController::class, 'destroy'])->name('facturas.destroy');

//Ruta para actualizar un elemento
Route::put('/facturas/{id}', [EncuestaController::class, 'update'])->name('facturas.update');

//Ruta para borrar una cerveza
Route::delete('/cervezas/{id}', [EncuestaController::class, 'destroy'])->name('cervezas.destroy');

//Ruta para actualizar un elemento
Route::put('/cervezas/{id}', [EncuestaController::class, 'update'])->name('cervezas.update');

//Ruta para borrar un cliente
Route::delete('/clientes/{id}', [EncuestaController::class, 'destroy'])->name('clientes.destroy');

//Ruta para actualizar un cliente
Route::put('/clientes/{id}', [EncuestaController::class, 'update'])->name('clientes.update');

//Ruta para borrar un plato del menu
Route::delete('/menu/{id}', [EncuestaController::class, 'destroy'])->name('menu.destroy');

//Ruta para actualizar un elemento
Route::put('/menu/{id}', [EncuestaController::class, 'update'])->name('menu.update');

//Ruta para borrar una encuesta
Route::delete('/encuestas/{id}', [EncuestaController::class, 'destroy'])->name('encuestas.destroy');

//Ruta donde se guarda un nuevo cliente
Route::post('/clientes', [EncuestaController::class, 'store'])->name('clientes.store');

//Ruta donde se guarda una nueva factura
Route::post('/facturas', [EncuestaController::class, 'store'])->name('facturas.store');

//Ruta donde se guarda un nuevo plata del menu
Route::post('/menu', [EncuestaController::class, 'store'])->name('menu.store');

//Ruta donde se guarda una nueva cerveza
Route::post('/cervezas', [EncuestaController::class, 'store'])->name('cervezas.store');
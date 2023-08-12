<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\CervezasController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\AutenticaController;


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

Route::resource('/clientes', ClienteController::class);

//Ruta de la pagina fija de redes sociales

Route::view('/redes', 'redes_sociales') ->name('redes');

// Ruta de la página de inicio
Route::view('/', 'inicio') -> name('inicio');

//Ruta ver el formulario de creacion de una cerveza
Route::resource('/cervezas', CervezasController::class);

// Ruta para mostrar el menú del restaurante
Route::resource('/menu', MenuController::class);

//Ruta para listar facturas

Route::resource('/facturas', FacturaController::class);

//Ruta de mensaje de gracias luego de completar encuesta
Route::resource('/encuesta/gracias', EncuestaController::class);

//Ruta de registro de usuarios
route::view('/registro', 'autenticacion.registro')->name('registro');
route::post('/registro', [AutenticaController::class, 'registro'])->name('registro.store');
//Ruta de login de usuarios
route::view('/login', 'autenticacion.login')->name('login');
route::post('/login', [AutenticaController::class, 'login'])->name('login.store');
//Ruta de logout del usuario
route::post('/logout', [AutenticaController::class, 'logout'])->name('logout');
//Ruta para editar el perfil de usuario
Route::get('/perfil', [AutenticaController::class, 'perfil'])->name('perfil');
Route::put('/perfil/{user}',[AutenticaController::class,'perfilUpdate'])->name('perfil.update');
//Ruta para cambiar la contraseña de usuario
Route::put('/perfil/password/{user}',[AutenticaController::class,'passwordUpdate'])->name('password.update');
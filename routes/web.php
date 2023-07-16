<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/restaurante', function () {
    $restaurante= [
        ["name" => "Para compartir"],
        ["name" => "Individual"],
        ["name" => "Familiar"],
    ];
    return view('menú', ["restaurante" =>$restaurante]);
})->name ("restaurante");

Route::get('/restaurante', [ProductoController::class, "index"]) ->name("restaurante.index");
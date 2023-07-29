<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CervezasController;
use App\Http\Controllers\Api\V1\MenuController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Cervezas
Route::apiResource("v1/cervezas", App\Http\Controllers\Api\V1\CervezasController::class);
//Menu
Route::apiResource("v1/menu", App\Http\Controllers\Api\V1\MenuController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/ruta", function(){
 //Lógica para manejar la solicitud POST
});
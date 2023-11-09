<?php

use App\Http\Controllers\HolaMundoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RifaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/practica3', [HolaMundoControllerler::class, 'practica3_get']);
Route::post('/practica3', [HolaMundoController::class, 'practica3_post']);
Route::get('/practica3json', [HolaMundoController::class, 'practica3_json_get']);
Route::post('/practica3json', [HolaMundoController::class, 'practica3_json_post']);

/*********************************************************************************/

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::post('/login',[LoginController::class, 'login']);

Route::get('/rifas', [RifaController::class, 'list'])->middleware('auth:sanctum');
Route::post('/rifas/guardar',[RifaController::class, 'create']);
Route::delete('/rifas/borrar',[RifaController::class, 'delete']);


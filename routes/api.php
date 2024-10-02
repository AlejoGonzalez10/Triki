<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\JuegoController;
use Illuminate\Http\Request;


// Rutas API
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// rutas API personalizadas
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::patch('/usuarios/{id}/estadisticas/{resultadoId}', [UsuarioController::class, 'updateStats']);
Route::post('/juegos', [JuegoController::class, 'store']);
Route::get('/juegos', [JuegoController::class, 'index']);

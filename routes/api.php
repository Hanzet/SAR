<?php

use App\Http\Controllers\SarEstadoRecursosController;
use App\Http\Controllers\SarTiposRecursosController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Controlador SarTiposRecursos
Route::get('/sartiposrecursos/show', [SarTiposRecursosController::class, 'index']);
Route::get('/sartiposrecursos/show/{id}', [SarTiposRecursosController::class, 'show']);
Route::post('/sartiposrecursos/store', [SarTiposRecursosController::class, 'store']);

// Controlador SarEstadoRecursos
Route::get('/sarestadorecursos/show', [SarEstadoRecursosController::class, 'index']);
Route::get('/sarestadorecursos/show/{id}', [SarEstadoRecursosController::class, 'show']);
Route::post('/sarestadorecursos/store', [SarEstadoRecursosController::class, 'store']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CarApi;
use App\Http\Controllers\API\BrandApi;
use App\Http\Controllers\API\CarModelApi;

// Rotte per le macchine
Route::get('/cars', [CarApi::class, 'index']);
Route::get('/cars/{id}', [CarApi::class, 'show']);
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/cars', [CarApi::class, 'store']);
    Route::put('/cars/{id}', [CarApi::class, 'update']);
    Route::delete('/cars/{id}', [CarApi::class, 'destroy']);
});
// Rotte per i marchi
Route::get('/brands', [BrandApi::class, 'index']);
Route::get('/brands/{id}', [BrandApi::class, 'show']);

// Rotte per i modelli di macchine
Route::get('/car-models', [CarModelApi::class, 'index']);
Route::get('/car-models/{id}', [CarModelApi::class, 'show']);
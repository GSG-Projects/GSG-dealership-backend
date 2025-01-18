<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CarApi;

Route::get('/cars', [CarApi::class, 'index']);
Route::get('/cars/{id}', [CarApi::class, 'show']);
Route::post('/cars', [CarApi::class, 'store']);
Route::put('/cars/{id}', [CarApi::class, 'update']);
Route::delete('/cars/{id}', [CarApi::class, 'destroy']);
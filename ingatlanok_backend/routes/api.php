<?php

use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/ingatlanok', [IngatlanokController::class, 'index']);
Route::get('/ingatlanDelete/{$id}', [IngatlanokController::class, 'destroy']);
Route::get('/ingatlanPost', [IngatlanokController::class, 'store']);
Route::get('/ingatlanKategoriaval', [IngatlanokController::class, 'indexKategoriaval']);
Route::get('/szuresKategoriara/{$kat}', [IngatlanokController::class, 'kategoriaSzerint']);


Route::get('/kategoriak', [KategoriakController::class, 'index']);





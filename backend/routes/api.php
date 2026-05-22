<?php

use App\Http\Controllers\EsemenyekController;
use App\Models\esemenyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/esemenyeks',[EsemenyekController::class, 'index']);
Route::get('/kategoriaks',[EsemenyekController::class, 'index']);
Route::put('/esemenyeks/{id}',[EsemenyekController::class, 'update']);
Route::delete('/esemenyeks',[EsemenyekController::class, 'destroy']);
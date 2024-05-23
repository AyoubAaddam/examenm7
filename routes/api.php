<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::get('/students', [StudentsController::class, 'store']);


Route::post('/student', [StudentsController::class, 'store']);

Route::get('/students/{id}', [StudentsController::class, 'show']);

Route::put('/students/{id}', [StudentsController::class, 'update']);

Route::delete('/students/{id}', [StudentsController::class, 'destroy']);

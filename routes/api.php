<?php

use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/order', [OrderController::class, 'store']);
Route::get('/order-burguer', [OrderController::class, 'getOrders']);
Route::delete('/order/{id}', [OrderController::class, 'destroy']);

Route::get('/ingredients', [IngredientsController::class, 'ingredients']);

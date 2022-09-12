<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo/create', [TodoController::class, 'create']);
Route::post('/todo/save', [TodoController::class, 'store']);
Route::get('/todo', [TodoController::class, 'index'])->name('index');
Route::get('/todo/{id}', [TodoController::class, 'show']);

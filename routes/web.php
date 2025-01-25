<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PathaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cities', [PathaoController::class, 'cities']);
Route::get('/zones', [PathaoController::class, 'zones']);
Route::get('/areas', [PathaoController::class, 'areas']);
Route::get('/create_order', [PathaoController::class, 'create_order']);

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * @path /users
 * @method GET
 */
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

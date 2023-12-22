<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(UserController::class)->group(function () {
    Route::get('/usuarios', 'getAll');
    Route::get('/usuarios/{id}', 'getById');
    Route::post('/usuarios', 'create');
    Route::put('/usuarios/{id}', 'update');
    Route::delete('/usuarios/{id}', 'deleteUser');
});
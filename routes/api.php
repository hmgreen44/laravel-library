<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/authors/all', [App\Http\Controllers\AuthorController::class, 'index']);
Route::get('/books/all', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/users/all', [App\Http\Controllers\UserController::class, 'index']);
Route::post('/users/new', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

// Route::post('/books/new', [BookController::class, 'create']);

// Route::post('/books/update/{id}', [BookController::class, 'update']);

// Route::post('/books/delete/{id}', [BookController::class, 'delete']);
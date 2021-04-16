<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorBookController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/authors/all', [AuthorController::class, 'index']);
Route::get('/books/all', [BookController::class, 'index']);
Route::get('/users/all', [UserController::class, 'index']);
Route::post('/users/new', [UserController::class, 'create']);
Route::post('/users/delete/{id}', [UserController::class, 'destroy']);
Route::post('/users/update/{id}', [UserController::class, 'update']);
Route::get('/author_books/all', [AuthorBookController::class, 'index']);
Route::get('/check_outs/all', [CheckoutController::class, 'index']);

// Route::post('/books/new', [BookController::class, 'create']);

// Route::post('/books/update/{id}', [BookController::class, 'update']);

// Route::post('/books/delete/{id}', [BookController::class, 'delete']);
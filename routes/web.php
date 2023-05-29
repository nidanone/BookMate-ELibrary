<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class, 'index']);

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/profile', [UserController::class, 'index']);

Route::get('/disimpan', function () {
    return view('disimpan', [
        "title" => "Disimpan"
    ]);
});


Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "title" => "Sign up"
    ]);
});

Route::get('/{slug}', [BookController::class, 'show']);

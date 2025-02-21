<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// gebruik voor consistente naamgeving /categories/create als naam
Route::get('create-category', [CategoryController::class, 'create'])->middleware('auth');
Route::post('create-category', [CategoryController::class, 'store'])->middleware('auth');

Route::get('create-article', [PostController::class, 'create'])->middleware('auth');
Route::post('create-article', [PostController::class, 'store'])->middleware('auth');

Route::get('posts/{post:slug}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::put('posts/{post:slug}/edit', [PostController::class, 'update'])->middleware('auth');

Route::delete('posts/{post:slug}', [PostController::class, 'destroy'])->middleware('auth');

Route::get('register', [RegistrationController::class, 'create'])->middleware('guest');
Route::post('register', [RegistrationController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name("login");
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('comment', [CommentsController::class,'create'])->middleware('auth');
Route::post('comment', [CommentsController::class,'store'])->middleware('auth');

Route::get('get-premium', [UserController::class, 'index'])->middleware('auth');
route::post('get-premium', [UserController::class, 'update'])->middleware('auth');
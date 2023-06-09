<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name(name:'home');
Route::view('/about', view:'about')->name(name:'about');
Route::view('/contact', view:'contact')->name(name:'contact');

Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name(name:'posts.show');


<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
/* use Illuminate\Auth\Events\Login; */

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

Route::get('/', function () {
    return view('principal');
});
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/muro', [PostController::class, 'index'])->name('post.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index'); /* Para crear la ruta */

Route::post('/login', [LoginController::class, 'store'])->name('login.index');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
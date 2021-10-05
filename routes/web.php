<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})
->name('home.index')
->middleware('auth');
Route::resource('/productos', ProductoController::class);

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/login',[LoginController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout',[LoginController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

Route::get('/admin',[AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

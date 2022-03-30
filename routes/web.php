<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ClienteController;
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
    return view('auth.login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/nosotros', function () {
    return view('about');
})->name('about');  

//Route::get('/catalogo',  [LibroController::class]);  
Route::resource('libros',  LibroController::class);  
Route::resource('clientes',  ClienteController::class);  

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   
Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');

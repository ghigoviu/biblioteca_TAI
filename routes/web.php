<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticuloController;
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

/*
Route::get('/', function () {
    return view('index')->with();
});
*/

Route::get('/', [ArticuloController::class, "ver"]);

Route::get('catalogo', [ArticuloController::class, "vista"]);

Route::get('mostrarlibro/{id}', [LibroController::class, 'mostrar']);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
        return view('home');
        })->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/nosotros', function () {
    return view('about');
})->name('about');  

Route::resource('libros',  LibroController::class);  
Route::resource('clientes',  ClienteController::class);  

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   
Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

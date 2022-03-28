<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
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
    return view('index');
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

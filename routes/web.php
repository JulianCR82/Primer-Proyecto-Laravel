<?php

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

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('/contacto', function () {
    return view('contacto');
});



use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/personas', [PersonaController::class, 'index']);



Route::get('/productos',[ProductoController::class,'index']) ->name('productos.index');

Route::get('/categorias', [CategoriaController::class, 'index']) ->name('categorias.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');





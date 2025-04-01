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

Route::get('/personas', [PersonaController::class, 'index']);



Route::get('/productos',[ProductoController::class,'index']) ->name('productos.index');





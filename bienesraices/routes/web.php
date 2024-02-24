<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;
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
    return view('welcome');
});

//Route::get('/home', function(){return 'hola';});
Route::get('/home', [PropiedadController::class, 'home'])->name('propiedad.home');

Route::get('/propiedad/crear', [PropiedadController::class, 'create'])->name('propiedad.create');

Route::post('/propiedad/guardar', [PropiedadController::class, 'store'])->name('propiedad.store');

Route::get('/propiedad/editar/{id}', [PropiedadController::class, 'editar'])->name('propiedad.editar');

Route::put('/propiedad/actualizar/{id}', [PropiedadController::class, 'actualizar'])->name('propiedad.actualizar');

Route::get('/propiedad/eliminar/{id}', [PropiedadController::class, 'eliminar'])->name('propiedad.eliminar');

Route::get('/propiedad/destroy/{id}', [PropiedadController::class, 'destroy'])->name('propiedad.destroy');


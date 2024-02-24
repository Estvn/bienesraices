<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'show']) -> name('firstPage');

/*
Route::get('/clases/{nombre}/{apellido?}', function($nombre, $apellido=null){
    if(!$apellido){
        return 'El nombre enviado por la URL es: '.$nombre;
    }else{
        return 'El nombre enviado por la URL es: '.$nombre .' ' .$apellido;
    }
});
*/
Route::get('/clases/{nombre}/{apellido?}', [HomeController::class, 'inicio']) -> name('parametersRoute');

Route::get('/clases', function(){
    return 'prueba';
});
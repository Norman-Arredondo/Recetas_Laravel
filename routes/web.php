<?php

use Illuminate\Support\Facades\Route;

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

//--  /nosotros es de blade, Nombre del controlller, se tiene que agregar un método @método
// Va a ir al controlador y después al método de ese controlador

Route::get('/nosotros', 'RecetaController');

//Lo que hicimos antes de agregar el controlador
/*
Route::get('/nosotros', function () {
    return view('nosotros');
});
*/

//Otra forma
/*Route::get('/nosotros', function () {
    return "Desde Nosotros";
});

Pero la forma adecuada es hacer un controller
*Para crear algo lo mejor es hacerlo desde artisan
 * en consola: php artisan serve make:controller RecetaController
 *
 * Reglas: El nombre del controlador es una clase, por lo tanto siempre va en mayusculas la primer letra
 * los controladores de artisan se encuentran en la carpeta app/http/controller

 * */


/*Accedemos al controlador y le decímos qué método va a cargar*/

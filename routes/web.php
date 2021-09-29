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

Route::get('/', function() {
    return view('test'); //que es el formulario de contacto
});

//ruta a la que está señalando el formulario de contacto
Route::post("/contactar", "App\Http\Controllers\EmailController@contact")->name("contact");

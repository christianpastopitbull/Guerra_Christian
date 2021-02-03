<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;
use App\Http\Controllers\Libros;
use App\Http\Controllers\Editorial;


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

//Rutal Principal
Route::get('/',[Principal::class, 'index']);

//Rutal listar libros
Route::get('/lista/libros',[Libros::class, 'index']);

//Rutal listar EDITORIALES
Route::get('/lista/editorial',[Editorial::class, 'listado'])->name('editoriales');


//Rutal registro EDITORIALES
Route::get('/formulario/editorial',[Editorial::class, 'listadoFor'])->name('registroFor');

//Rutal registro EDITORIALES
Route::post('/formulario/registro',[Editorial::class, 'registroE'])->name('registro');

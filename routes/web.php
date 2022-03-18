<?php

use App\Http\Controllers\contactosController;
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

//#- Update para moverse en los botones
  Route::get('/', 'App\Http\Controllers\contactosController@inicio')->name('index');
  Route::get('/formulario', 'App\Http\Controllers\contactosController@formulario')->name('form');
  Route::get('/edit/{id_contactos}', 'App\Http\Controllers\contactosController@edit')->name('edit');
  Route::get('/captura', 'App\Http\Controllers\contactosController@captura')->name('captura');

//#- Insert
  Route::post('/captura',[contactosController::class,'store'])->name('store');

//#- Hacer Delete
  Route::get('/delete/{id_contactos}',[contactosController::class,'desactivar'])->name('desactivar');

//#- Solo desactivar registro  
  Route::get('/eliminar/{id_contactos}',[contactosController::class,'eliminar'])->name('eliminar');

//#- Update de todos los campos
  Route::post('/edit/{id_contactos}',[contactosController::class,'editar'])->name('editar');



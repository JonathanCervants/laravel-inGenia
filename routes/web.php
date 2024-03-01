<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TicketsController;
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
   return view('layout');   
});


Route::controller(CategoriaController::class)->group(function(){
   Route::get('/categorias','index')->name('categorias');
   Route::post('/categoria','store');
   Route::get('/categorias/edit/{slug}','edit')->name('categoria.edit');
   Route::post('/categoria/edit/{slug}','update');
});

Route::controller(TicketsController::class)->group(function(){
   Route::get('/tickets','index');
   Route::get('/ticket/registro','create')->name('ticket.registro');
   Route::post('/ticket/registro','store')->name('ticket.store');
   Route::get('/ticket/{slug}','show')->name('ticket.show');
   Route::get('/ticket/edit/{slug}','edit')->name('ticket.edit');
   Route::post('/ticket/edit/{slug}','update');

});





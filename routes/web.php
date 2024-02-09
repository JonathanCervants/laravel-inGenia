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
   return view('layout');   
});

Route::get('/categorias', function () {
   return view('categorias.index',['name'=>'ya despiertate!!']);   
});

// Route::get('/', function () {
//     return view('categorias.index',['name' =>"mi creador está trabajando"]);
// });

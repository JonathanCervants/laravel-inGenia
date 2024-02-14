<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
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

Route::get('/categorias', CategoriaController::class.'@'.'index')->name('categorias'); 

// Route::get('/categorias/crear', function(){
//    return view('categorias.create');
// })->name('categorias.create');

// Route::group(CategoriaController::class)
//     ->prefix('categorias')
//     ->as('categorias')
//     ->group(function () {
//         Route::get('', 'index')->name('categorias');
//         Route::get('/crear', 'ra')->name('categorias.create');
//        // Route::get('/bills/{bill}/invoice/pdf', 'invoice')->name('pdf.invoice');
//     });



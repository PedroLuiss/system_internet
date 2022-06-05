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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'login']);
Auth::routes();


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/estudiantedatos', [App\Http\Controllers\EstudiantesController::class, 'index'])->name('estudiantedatos.index');
    Route::get('/estudiantedatos/create', [App\Http\Controllers\EstudiantesController::class, 'create'])->name('estudiantedatos.create');

    /**---------------------------------------------------------Expedientes--------------------------------------------------------- */
    Route::get('/expedientes/ingenieria-de-sistemas', [App\Http\Controllers\ExpedientesController::class, 'ing_sistem_index'])->name('expedientes.ingsistemas.index');
    Route::get('/expedientes/ingenieria-de-sistemas/crear', [App\Http\Controllers\ExpedientesController::class, 'ing_sistem_create'])->name('expedientes.ingsistemas.create');
    /**---------------------------------------------------------End Expedientes--------------------------------------------------------- */

});


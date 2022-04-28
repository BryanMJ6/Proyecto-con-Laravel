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

Auth::routes();

Route::resource('equipos', App\Http\Controllers\EquipoController::class);

Route::resource('donantes', App\Http\Controllers\DonanteController::class)->middleware('auth');

Route::resource('terminos', App\Http\Controllers\TerminoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
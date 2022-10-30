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
Route::resource('cursos',App\Http\Controllers\CursoController::class)->middleware('auth');
Route::resource('usuarios',App\Http\Controllers\UsuarioController::class)->middleware('auth');
Route::resource('cursousuarios',App\Http\Controllers\CursousuarioController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

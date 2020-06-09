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
    /*$usuario = \App\Usuario::all();
    return $usuario;*/
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('paginas.sobre');
});

Route::resource('/usuario', 'UsuarioController');
Route::resource('/postagem', 'PostagemController');
Route::get('/usuario/destroy/{id}', 'UsuarioController@destroyConfirm')->name('usuario.destroy-confirm');
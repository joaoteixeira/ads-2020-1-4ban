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
Route::resource('/comentario', 'ComentarioController');
//Route::resource('/tag_post', 'Tag_has_postagemController');
Route::get('/usuario/destroy/{id}', 'UsuarioController@destroyConfirm')->name('usuario.destroy-confirm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

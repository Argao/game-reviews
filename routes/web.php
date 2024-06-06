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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/login','LoginController@login')->name('site.login');
Route::get('/meus-dados','MeusDadosController@meusDados')->name('site.meus-dados');
Route::get('/novo-usuario','NovoUsuarioController@novoUsuario')->name('site.novo-usuario');
Route::get('/novo-jogo','NovoJogoController@novoJogo')->name('site.novo-jogo');
Route::get('/jogo-info','JogoInfoController@jogoInfo')->name('site.jogo-info');


Route::fallback(function () {
    echo 'A rota acessada não existe';
});

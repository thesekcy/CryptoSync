<?php

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
Route::group(['middleware' =>['auth:admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('/login', 'AdminController@login')->name('admin');
	Route::post('/login', 'AdminController@postLogin')->name('loginAdm');
	Route::get('/logout', 'AdminController@logout')->name('logoutAdm');
});

Route::get('/', function () {
    return view('site');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/cadastro', 'user\CadastroController@index')->name('cadastro');;

	Route::get('/perfil','User\PerfilController@index')->name('perfil');
	Route::post('/perfil/create','User\PerfilController@store')->name('cadPerfil');

	Route::post('/contrato/create','User\ContratoController@store')->name('create-Contrato');
	Route::get('/contrato/list','User\ContratoController@list')->name('list-contrato')->middleware('auth');
	Route::get('/contrato','User\ContratoController@index')->name('contrato')->middleware('auth');
	Route::get('/contrato/list/contrato/{id}','User\ContratoController@contrato')->name('cont');
	Route::get('/contrato/list/contrato/print/{id}','User\ContratoController@print')->name('print');

	Route::get('/contrato/list/contrato','User\ContratoController@contrato')->name('contratoView');
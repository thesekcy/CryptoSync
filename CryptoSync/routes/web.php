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
Route::group(['middleware'=>'auth:admin'], function(){
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/admin/login', 'AdminController@login')->name('admin');
	Route::post('/admin/login', 'AdminController@postLogin')->name('admin');
	Route::get('/admin/logout', 'AdminController@logout')->name('admin');
});

Route::get('/', function () {
    return view('site');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){
	Route::get('/perfil','User\PerfilController@index')->name('perfil');
	Route::get('/contrato','User\ContratoController@index')->name('contrato');
});

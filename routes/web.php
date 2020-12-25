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

Route::get('/', function () {
    return view('main');
});
Route::get('/data-tamu', 'TamuController@index')->name('tamu.index');
Route::get('/createGuest', 'TamuController@createGuest')->name('tamu.create');
Route::post('/addGuest','TamuController@storeGuest')->name('tamu.store');
Route::post('/updateStatus/{id}','TamuController@update')->name('tamu.update');

Route::get('/import-form','TamuController@importForm')->name('import.form');
Route::post('/import','TamuController@import')->name('import');
Route::get('/export','TamuController@export')->name('export');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logged_in', 'Auth\LoginController@authenticate')->name('autentikasi');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

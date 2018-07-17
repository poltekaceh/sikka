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
    return view('login');
});

Route::post('register', 'AdminController@register')->name('register');
Route::post('post-login', array('as' => 'masuk', 'uses' => 'AdminController@masuk'));
// Route::get('logout', 'AdminController@logout');

Route::group(['middleware' => ['peran:user']], function () {

    Route::get('/index', 'AdminController@index');
    Route::get('/logout', 'AdminController@logout')->name('logout');

    // Route::resource('user','UserController');
    Route::get('pelatihan', 'PelatihanController@index')->name('pelatihan.index');
    Route::post('pelatihan', 'PelatihanController@store')->name('pelatihan.store');
});

// =================== DINAS ======================

Route::get('/dinas', function () {
    return view('Dinas.loginDinas');
});

Route::post('post-loginDinas', array('as' => 'masuk', 'uses' => 'DinasAdminController@masuk'));
Route::group(['middleware' => ['peran:dinas']], function () {

    Route::get('/dinas/index', 'DinasAdminController@index');
    Route::get('dinas/logout', 'DinasAdminController@logout')->name('dinas.logout');

    Route::resource('dinas/pelatihan', 'DinasPelatihanController', ['as' => 'dinas']);
    Route::get('dinas/pendaftar-pelatihan', 'DinasPelatihanController@showPendaftar')->name('dinas.pelatihan.pendaftar');
});

Route::get('/register', function () {
    return view('register');
});

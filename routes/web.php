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

Route::get('admin/','BerandaController@index');
// route::get('/fasumum','UmumController@index');

Route::resource('admin/fasumum','UmumController');
Route::resource('admin/faskamar', 'KamarController');
Route::resource('admin/faskamarmandi', 'KamarmandiController');
Route::resource('admin/lingkungan', 'LingkunganController');
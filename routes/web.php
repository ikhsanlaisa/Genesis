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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homepage', 'HomePageController@index');

Route::get('/daftarpanitia', 'PanitiaController@index');

Route::get('/daftardivisi', 'DivisiController@index');

Route::get('/tambahdivisi', 'DivisiController@create');

Route::post('/postdivisi', 'DivisiController@store');

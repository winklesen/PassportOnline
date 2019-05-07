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
    return view('welcome');
});

Auth::routes();

// User
Route::resource('/user','UserController');
Route::get('/deleteUser/{id}','UserController@destroy')->name('deleteUser');

Route::get('/home', 'PasportController@index')->name('home');

// Pasport
Route::resource('/pasport','PasportController');

// Route::get('/show/{id}','PasportController@show')->name('details');
Route::get('/show/{id}/{idUser}','PasportController@showPasport')->name('details');

Route::get('/delete/{id}','PasportController@destroy')->name('deletePasport');

Route::post('/update{id}','PasportController@update')->name('update');

// Route::get('/edit/{id}','PasportController@edit')->name('edit');

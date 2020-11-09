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
7*/ 

//drivers

Route::get('/conductores', 'DriversController@index')->name('drivers.index');
Route::get('/conductor/crear', 'DriversController@create')->name('drivers.create');
Route::post('/conductor/crear', 'DriversController@store')->name('drivers.store');
Route::get('/conductor/{driver}/editar','DriversController@show')->name('drivers.show');
Route::delete('/conductor/{driver}','DriversController@destroy')->name('drivers.destroy');
Route::put('/conductor/{driver}/editar','DriversController@update')->name('drivers.update');;
  






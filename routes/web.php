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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//drivers

Route::get('/conductores', 'DriversController@index')->name('drivers.index');
Route::get('/conductor/crear', 'DriversController@create')->name('drivers.create');
Route::post('/conductor/crear', 'DriversController@store')->name('drivers.store');
Route::get('/conductor/{driver}/editar','DriversController@show')->name('drivers.show');
Route::delete('/conductor/{driver}','DriversController@destroy')->name('drivers.destroy');
Route::put('/conductor/{driver}/editar','DriversController@update')->name('drivers.update');
Route::get('/conductor/{driver}/reporte-salidas-con-autobus','DriversController@showCars')->name('drivers.showCars');

Route::get('/conductor/{driver}/reporte-rutas-ejecutas','DriversController@showRoutes')->name('drivers.showRoutes');

//drivers

Route::get('/autobuses', 'CarsController@index')->name('cars.index');
Route::get('/autobus/crear', 'CarsController@create')->name('cars.create');
Route::get('/autobus/modelos/{model}', 'CarsController@toggleModel')->name('cars.toggleModel');

// cars
Route::post('/autobus/crear', 'CarsController@store')->name('cars.store');
Route::delete('/autobus/{car}','CarsController@destroy')->name('cars.destroy');
Route::put('/autobus/{cars}/editar','CarsController@update')->name('cars.update');
Route::get('/autobus/{car}/editar','CarsController@show')->name('cars.show');
Route::get('/autobus/{car}/status','CarsController@statusToogle')->name('cars.status');
Route::get('/autobus/{car}/salidas-autobus','CarsController@showExits')->name('cars.exits');
Route::get('/autobus/{car}/conductores','CarsController@showDrivers')->name('cars.drivers');


// address and stop

Route::get('/ciudades', 'AddressController@index')->name('address.index');
Route::get('/ciudades/create', 'AddressController@create')->name('address.create');
Route::get('/ciudades/paradas/{address}', 'StopsController@index')->name('stops.index');
 
Route::get('/paradas/{stop}/status', 'StopsController@toggleStatus')->name('stops.status');
Route::post('/ciudades/paradas/{address}/guardar', 'StopsController@store')->name('stops.store');


//states

Route::get('ciudades/municipios/{state}', 'StatesController@toggleMunicipalities');
Route::get('ciudades/parroquias/{municipalities}', 'MunicipalitiesController@toggleParishes');

//routes

Route::get('/rutas', 'RoutesController@index')->name('routes.index');
Route::get('/rutas/crear', 'RoutesController@create')->name('routes.create');
Route::get('/rutas/{route}/autobuses-utilizado-actual-ruta', 'RoutesController@showCars')->name('routes.showCars');

Route::get('/rutas/{route}/conductores-realiza-rutal-actual', 'RoutesController@showDrivers')->name('routes.showDrivers');

//user

Route::get('/usuarios', 'UsersController@index')->name('users.index');
Route::get('/usuarios/crear', 'UsersController@create')->name('users.create');
Route::get('/usuarios/{user}/actividades', 'UsersController@userBitacora')->name('users.bitacora');

Route::get('/usuarios/estatus/{user}', 'UsersController@statusToogle')->name('users.status');

// Exits

Route::get('/salida-autobuses', 'CarsExitController@index')->name('carsexit.index');


//bitacora

Route::get('/actividades', 'BitacorasController@index')->name('bitacoras.index');




















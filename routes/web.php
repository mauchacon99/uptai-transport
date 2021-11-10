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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//drivers

Route::get('/conductores', 'DriversController@index')->name('drivers.index');
Route::get('/direcciones/{id}', 'AddressController@getAddress');

Route::get('/conductor/crear', 'DriversController@create')->name('drivers.create');
Route::post('/conductor/crear', 'DriversController@store')->name('drivers.store');
Route::get('/conductor/{driver}/editar','DriversController@show')->name('drivers.show');
Route::delete('/conductor/{driver}/delete','DriversController@delete')->name('drivers.delete');
Route::post('/conductor/remove','DriversController@remove')->name('drivers.remove');
Route::post('/conductor/reciclar', 'DriversController@restore')->name('drivers.restore');
Route::put('/conductor/{driver}/editar','DriversController@update')->name('drivers.update');
Route::get('/conductor/{driver}/reporte-salidas-con-autobus','DriversController@showCars')->name('drivers.showCars');
Route::get('/conductor/{driver}/reporte-rutas-ejecutas','DriversController@showRoutes')->name('drivers.showRoutes');

Route::get('/respaldo/conductores', 'DriversController@onlyTrashed')->name('drivers.onlyTrashed');

// cars

Route::get('/respaldo/autobuses', 'CarsController@onlyTrashed')->name('cars.onlyTrashed');

Route::post('/autobuses/restaurar', 'CarsController@restore')->name('cars.restore');
Route::post('/autobuses/remove', 'CarsController@remove')->name('cars.remove');


Route::get('/autobuses', 'CarsController@index')->name('cars.index');
Route::get('/autobus/crear', 'CarsController@create')->name('cars.create');
Route::get('/autobus/modelos/{model}', 'CarsController@toggleModel')->name('cars.toggleModel');
Route::post('/autobus/crear', 'CarsController@store')->name('cars.store');
Route::delete('/autobus/{car}/delete','CarsController@delete')->name('cars.delete');

Route::delete('/autobus/{car}/destroy','CarsController@destroy')->name('cars.destroy');

Route::put('/autobus/{cars}/editar','CarsController@update')->name('cars.update');
Route::get('/autobus/{car}/editar','CarsController@show')->name('cars.show');
Route::get('/autobus/{car}/status','CarsController@statusToogle')->name('cars.status');
Route::get('/autobus/{car}/salidas-autobus','CarsController@showExits')->name('cars.exits');
Route::get('/autobus/{car}/conductores','CarsController@showDrivers')->name('cars.drivers');


// address and stop

Route::get('/ciudades', 'AddressController@index')->name('address.index');
Route::get('/ciudades/crear', 'AddressController@create')->name('address.create');
Route::post('/ciudades/store', 'AddressController@store')->name('address.store');
Route::get('/ciudades/editar/{address}', 'AddressController@edit')->name('address.edit');
Route::post('/ciudades/crear', 'AddressController@create')->name('address.create');
Route::get('/ciudades/paradas/{address}', 'StopsController@index')->name('stops.index');
Route::get('/paradas/{stop}/status', 'StopsController@toggleStatus')->name('stops.status');
Route::post('/ciudades/paradas/{address}/guardar', 'StopsController@store')->name('stops.store');
Route::delete('/ciudades/{address}/delete', 'AddressController@destroy')->name('address.destroy');
Route::post('/ciudades/restore', 'AddressController@restore')->name('address.restore');
Route::post('/ciudades/remove', 'AddressController@forceDelete')->name('address.forceDelete');

Route::get('/respaldo/ciudades', 'AddressController@onlyTrashed')->name('address.onlyTrashed');

Route::delete('/paradas/{stop}', 'StopsController@destroy')->name('stops.delete');


//states

Route::get('ciudades/municipios/{state}', 'StatesController@toggleMunicipalities');
Route::get('ciudades/parroquias/{municipalities}', 'MunicipalitiesController@toggleParishes');

//routes

Route::get('/rutas', 'RoutesController@index')->name('routes.index');
Route::get('/rutas/crear', 'RoutesController@create')->name('routes.create');
Route::get('/rutas/{route}/autobuses-utilizado-actual-ruta', 'RoutesController@showCars')->name('routes.showCars');

Route::get('/rutas/{route}/conductores-realiza-rutal-actual', 'RoutesController@showDrivers')->name('routes.showDrivers');


Route::post('/rutas/store', 'RoutesController@store')->name('routes.store');
//user

Route::get('/usuarios', 'UsersController@index')->name('users.index');
Route::get('/usuarios/crear', 'UsersController@create')->name('users.create');
Route::get('/usuarios/{user}/editar', 'UsersController@edit')->name('users.edit');
Route::put('/usuarios/{user}/update', 'UsersController@update')->name('users.update');
Route::get('/usuarios/{user}/actividades', 'UsersController@userBitacora')->name('users.bitacora');
Route::delete('/usuarios/{user}/delete', 'UsersController@delete')->name('users.delete');

Route::get('/usuarios/estatus/{user}', 'UsersController@statusToogle')->name('users.status');

// exits

Route::get('/salida-autobuses', 'CarsExitController@index')->name('carsexit.index');
Route::get('/salida-autobuses/crear', 'CarsExitController@create')->name('carsexit.create');
Route::post('/salida-autobuses/insert', 'CarsExitController@store')->name('carsexit.store');


//bitacora

Route::get('/actividades', 'BitacorasController@index')->name('bitacoras.index');


Route::resource('empleados', 'EmployeesController');
Route::post('/empleados/reciclar', 'EmployeesController@restore')->name('empleados.restore');
Route::post('/empleados/remove', 'EmployeesController@remove')->name('empleados.remove');
Route::get('/respaldo/empleados', 'EmployeesController@onlyTrashed')->name('empleados.onlyTrashed');


Route::get('/salidas-activas', 'CarsExitController@exitsCars');
// Route::delete('/empleados/{empleado}/destroyForce','EmployeesController@destroyForce')->name('empleados.destroyForce');
 

Route::get('/pdf/{collection}', 'PDFcontroller@index')->name('pdf.general');

Route::get('/pdf/{id}/{action}', 'PDFcontroller@detailsColletions');












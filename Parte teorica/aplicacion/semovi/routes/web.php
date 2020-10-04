<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('/index',[App\Http\Controllers\HomeController::class, 'home'])->name('index');


// ************************************Nuevo Vehículo**********************************************//
Route::any('/vehiculo/regstrar', 'App\Http\Controllers\Semovi\VehiculoController@index')->name('registrar_vehiculo_nuevo');
Route::post('/vehiculo/guardar','App\Http\Controllers\Semovi\VehiculoController@save')->name('guardar_vehiculo');

// ******************************************Asignar una multa*******************************************************//
Route::any('/multas','App\Http\Controllers\Semovi\MultaController@index')->name('multas');
Route::post('/multas/crear','App\Http\Controllers\Semovi\MultaController@crearMulta')->name('crear_multa');
Route::post('/multas/editar','App\Http\Controllers\Semovi\MultaController@editarMultas')->name('editar_multas');
Route::post('/multas/eliminar','App\Http\Controllers\Semovi\MultaController@eliminarMulta')->name('eliminar_multa');
Route::post('/multas/guardar','App\Http\Controllers\Semovi\MultaController@saveMulta')->name('guardar_multa');
// ******************************************Funciones de creación auxiliares*******************************************************//

Route::post('/multas/rfc','App\Http\Controllers\Semovi\MultaController@rfc')->name('crear_rfc');
Route::post('/multas/tipo_transmision','App\Http\Controllers\Semovi\MultaController@tipoTransmision')->name('asignar_tipo_transmision');
Route::post('/multas/vehiculo','App\Http\Controllers\Semovi\MultaController@asignarVehiculo')->name('asignar_vehiculo');
// ******************************************CRUD de Propietario*******************************************************//

Route::any('/propietario','App\Http\Controllers\Semovi\PropietarioController@index')->name('propietario');
Route::any('/propietario/crear','App\Http\Controllers\Semovi\PropietarioController@crearPropietario')->name('crear_propietario');
Route::post('/propietario/editar','App\Http\Controllers\Semovi\PropietarioController@editarPropietario')->name('editar_propietario');
Route::post('/propietario/guardar','App\Http\Controllers\Semovi\PropietarioController@savePropietario')->name('guardar_propietario');
Route::post('/propietario/editar/guardar','App\Http\Controllers\Semovi\PropietarioController@savePropietarioEdit')->name('guardar_propietario_edit');
// ******************************************Cambio de Propietario*******************************************************//
Route::any('/cambioPropietario','App\Http\Controllers\Semovi\CambioPropietarioController@index')->name('cambio_propietario');
Route::post('/cambioPropietario/guardar','App\Http\Controllers\Semovi\CambioPropietarioController@asignarPropietario')->name('asignar_propietario');
// ******************************************CRUD de Marca*******************************************************//
Route::any('/marca','App\Http\Controllers\Semovi\MarcaController@index')->name('marca');
Route::any('/marca/crear','App\Http\Controllers\Semovi\MarcaController@crearMarca')->name('crear_marca');
Route::post('/marca/editar','App\Http\Controllers\Semovi\MarcaController@editarMarca')->name('editar_marca');
Route::post('/marca/guardar','App\Http\Controllers\Semovi\MarcaController@saveMarca')->name('guardar_marca');
Route::post('/marca/editar/guardar','App\Http\Controllers\Semovi\MarcaController@saveMarcaEdit')->name('guardar_marca_edit');
// ******************************************CRUD de Modelo*******************************************************//
Route::any('/modelo','App\Http\Controllers\Semovi\ModeloController@index')->name('modelo');
Route::any('/modelo/crear','App\Http\Controllers\Semovi\ModeloController@crearModelo')->name('crear_modelo');
Route::post('/modelo/ver','App\Http\Controllers\Semovi\ModeloController@verModelo')->name('ver_modelo');
Route::post('/modelo/guardar','App\Http\Controllers\Semovi\ModeloController@saveModelo')->name('guardar_modelo');
// ******************************************CRUD de Motor*******************************************************//
Route::any('/motor','App\Http\Controllers\Semovi\MotorController@index')->name('motor');
Route::any('/motor/crear','App\Http\Controllers\Semovi\MotorController@crearMotor')->name('crear_motor');
Route::post('/motor/guardar','App\Http\Controllers\Semovi\MotorController@saveMotor')->name('guardar_motor');

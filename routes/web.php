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
    return view('welcome');
});
Route::get('/client', 'clientController@index')->name('client.index');
Route::post('/client', 'clientController@store')->name('client.store');
Route::get('/client/create', 'clientController@create')->name('client.create');
Route::get('/client/{client_id}', 'clientController@show')->name('client.show');
Route::put('/client/{client_id}', 'clientController@update')->name('client.update');
Route::get('/client/delete/{client_id}', 'clientController@destroy')->name('client.delete');

Route::get('/employee', 'employeeController@index')->name('employee.index');
Route::post('/employee', 'employeeController@store')->name('employee.store');
Route::get('/employee/create', 'employeeController@create')->name('employee.create');
Route::get('/employee/{employee_id}', 'employeeController@show')->name('employee.show');
Route::put('/employee/{employee_id}', 'employeeController@update')->name('employee.update');
Route::get('/employee/delete/{employee_id}', 'employeeController@destroy')->name('employee.delete');
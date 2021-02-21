<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::get('/','App\Http\Controllers\PageController@show');
Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/home','App\Http\Controllers\PageController@show');
Route::get('/employees','App\Http\Controllers\EmployeeController@index');
Route::get('/salaries','App\Http\Controllers\SalaryController@index');
Route::post('/search','App\Http\Controllers\EmployeeController@search');
Route::get('/employee/create','App\Http\Controllers\EmployeeController@create');
Route::post('/employee/save','App\Http\Controllers\EmployeeController@save');
Route::put('employee/{employee}/update','App\Http\Controllers\EmployeeController@update');
Route::get('employee/{employee}/show','App\Http\Controllers\EmployeeController@show');
Route::get('employee/{employee}/delete','App\Http\Controllers\EmployeeController@delete');
Route::get('employee/{employee}/edit','App\Http\Controllers\EmployeeController@edit');
Route::get('/salary/create','App\Http\Controllers\SalaryController@create');
Route::post('/salary/save','App\Http\Controllers\SalaryController@save');






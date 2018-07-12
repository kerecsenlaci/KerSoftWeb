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

Route::resource('/news', 'NewsController');

Route::resource('/gyik', 'GyikController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error_report', 'ErrorReportController@index')->name('error_report');

Route::post('/error_report', 'ErrorReportController@store')->name('error_report.store');

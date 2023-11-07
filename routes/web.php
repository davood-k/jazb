<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'KhademController@index')->name('index');
Route::get('/amaken', 'KhademController@amaken')->name('amaken');
Route::get('/person/show/{id}', 'KhademController@show');
Route::get('/basij', 'KhademController@basij')->name('basij');
Route::post('/khorooji', 'KhademController@khorooji')->name('khorooji');
Route::get('/tablighat', 'KhademController@tablighat')->name('tablighat');

// کنترلر نمره آزمون
Route::get('/azmoon', 'AzmoonController@index')->name('azmoon');
Route::get('/azmoons/store', 'AzmoonController@bayegan');
Route::put('/azmoon/{id}', 'AzmoonController@create');
Route::post('/person/edit/{id}', 'AzmoonController@show');
Route::post('/azmoon/{user_id}/sabt', 'AzmoonController@store');

// کنترلر کمیسیون
Route::get('/comision', 'ComisionController@index')->name('comision');
Route::put('/comision/{id}', 'ComisionController@create');
Route::get('/comisions/all', 'ComisionController@show');
Route::post('/comision/{id}/sabt', 'ComisionController@store');
Route::post('/comision/edit/{id}', 'ComisionController@edit');

Route::get('/person/create/{id}', 'KhademController@edit');
Route::post('/person/{id}/update/', 'KhademController@update');



Route::delete('/delete/{id}', 'AzmoonController@destroy');


/**
 * route admin for excel
 */
Route::get('/importexcel', 'KhademController@importexl')->name('importexcel');
Route::post('/import', 'KhademController@saveImport')->name('import');





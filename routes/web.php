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
Route::get('/tablighat', 'KhademController@tablighat')->name('tablighat');
Route::get('/information', 'KhademyarController@info')->name('information');
// کنترلر نمره آزمون
Route::get('/azmoon', 'AzmoonController@index')->name('azmoon');
Route::get('/azmoons/store', 'AzmoonController@bayegan');
Route::put('/azmoon/{id}', 'AzmoonController@create');
Route::post('/person/edit/{id}', 'AzmoonController@show');
Route::post('/azmoon/{user_id}/sabt', 'AzmoonController@store');

Route::get('khorooj', 'KhademyarController@index')->name('khorooj');
Route::post('khorooji', 'KhademyarController@export')->name('export');
Route::get('addperson', 'KhademyarController@add')->name('person');
Route::get('insert', 'KhademyarController@create')->name('insert');
Route::post('sendpersons', 'KhademyarController@store')->name('sendpersons');

Route::get('pagestring', 'KhademyarController@pagestr')->name('pagestring');



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

Route::get('/home', 'HomeController@index')->name('home');

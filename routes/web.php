<?php

use App\Khadem;
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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'KhademController@index');
Route::get('/amaken', 'KhademController@amaken');
Route::get('/basij', 'KhademController@basij');
Route::get('/tablighat', 'KhademController@tablighat');

// کنترلر نمره آزمون
Route::get('/azmoon', 'AzmoonController@index');
Route::put('/azmoon/{id}', 'AzmoonController@create');
Route::post('/azmoon/{id}/sabt', 'AzmoonController@store');

Route::get('/person/show/{id}', 'KhademController@show');
Route::get('/person/create/{id}', 'KhademController@edit');
Route::post('/person/{id}/update/', 'KhademController@update');



Route::delete('/delete/{khadems}', 'KhademController@destroy');


/**
 * route admin for excel
 */
Route::get('/importexl', 'KhademController@importexl')->name('importexl');
Route::post('/import', 'KhademController@saveImport')->name('import');





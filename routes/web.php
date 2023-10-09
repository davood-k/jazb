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
Route::get('/', 'KhademController@index');
// Route::get('/users/{user}/permissions', 'User\PermissionController@create')->name('users.permissions')->middleware('can:staff-user-permissions');
// Route::post('/users/{user}/permissions', 'User\PermissionController@store')->name('users.permissions.store')->middleware('can:show-users');
Route::get('/sample', 'KhademController@nomreh');


Route::get('/emtiaze', 'KhademController@nomreh');

Route::get('/emtiaz/{khadem}/edit', 'KhademController@show')->name('emtiaz.edit');
Route::get('/import', 'KhademController@index');
Route::post('/import', 'KhademController@saveImport')->name('import');

// Route::get('/import', 'DetailController@index');
// Route::post('/import', 'DetailController@saveImport')->name('import');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

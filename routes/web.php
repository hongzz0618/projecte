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

Route::get('/', 'HomeController@getHome');

Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create', 'CatalogController@getCreate');

Route::get('catalog/edit/{id}', 'CatalogController@getEdit');

Route::get('catalog/borrar/{id}', 'CatalogController@getDelete');

Route::get('editorial', 'EditorialController@getIndex');

Route::get('editorial/show/{id}', 'EditorialController@getShow');

Route::get('editorial/borrar/{id}', 'EditorialController@getDelete');

Route::get('editorial/create', 'EditorialController@getCreate');

Route::get('editorial/edit/{id}', 'EditorialController@getEdit');

Route::post('catalog', 'CatalogController@getInsert');
Route::post('editorial', 'EditorialController@getInsert');

Route::post('catalog/getUpdate/{id}', 'CatalogController@getUpdate');
Route::post('editorial/getUpdate/{id}', 'EditorialController@getUpdate');

Route::get('Staff', 'StaffController@getIndex');

Route::get('Staff/show/{id}', 'StaffController@getShow');

Route::get('Staff/borrar/{id}', 'StaffController@getDelete');

Route::get('Staff/create', 'StaffController@getCreate');

Route::get('Staff/edit/{id}', 'StaffController@getEdit');


Route::post('Staff', 'StaffController@getInsert');

Route::post('Staff/getUpdate/{id}', 'StaffController@getUpdate');

Route::get('menu', 'MenuController@getIndex');

Route::get('menu/show/{id}', 'MenuController@getShow');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login', '\App\Http\Controllers\Auth\LoginController@login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
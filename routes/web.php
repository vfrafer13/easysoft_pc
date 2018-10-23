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

Route::get('/', 'PageController@index')->name('pages');
Route::get('/contacto', 'PageController@contact')->name('contact');
Route::get('/cotizacion', 'PageController@estimate')->name('estimate');


Route::get('/clientes', 'ClientController@index')->name('clients');
Route::get('/servicios', 'ServiceController@index')->name('services');
Route::get('/servicios/{id}', 'ServiceController@show')->name('service_detail');

Route::get('/admin', 'PageController@index_admin')->name('index_admin');
Route::get('/admin/clients', 'ClientController@index_admin')->name('admin_clients');
Route::get('/admin/services', 'ServiceController@index_admin')->name('admin_services');
Route::get('/admin/slides', 'SlideController@index')->name('admin_slides');

Route::get('/admin/services/{id}/edit', 'ServiceController@edit')->name('service_edit');
Route::get('/admin/clients/{id}/edit', 'ClientController@edit')->name('client_edit');
Route::get('/admin/slides/{id}/edit', 'SlideController@edit')->name('slide_edit');

Route::get('/admin/services/create', 'ServiceController@create')->name('service_create');
Route::get('/admin/clients/create', 'ClientController@create')->name('client_create');
Route::get('/admin/slides/create', 'SlideController@create')->name('slide_create');

Route::resource('slides', 'SlideController');
Route::resource('services', 'ServiceController');
Route::resource('clients', 'ClientController');

Route::resource('users', 'UserController');
Auth::routes();

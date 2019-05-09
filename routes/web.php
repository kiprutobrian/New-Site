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


Route::get('/contact', 'PagesController@contact');
Route::get('/servicios', 'ImagesController@servicios');
Route::get('/servicios1', 'ImagesController@servicios1');
Route::get('/aliance', 'PagesController@aliance');
Route::get('/deinteres', 'PagesController@deinteres');
Route::get('/deinteres2', 'PagesController@deinteres2');
Route::get('/deinteres3', 'PagesController@deinteres3');
Route::get('/deinteres4', 'PagesController@deinteres4');
Route::get('/deinteres5', 'PagesController@deinteres5');
Route::get('/empresa', 'PagesController@empresa');
Route::get('/detalles', 'PagesController@detalles');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

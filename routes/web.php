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

Route::get('/', 'Frontend\PageController@showHomepage');
Route::get('/about', 'Frontend\PageController@showAbout');
Route::get('/product', 'Frontend\PageController@showProduct');
Route::get('/supplier', 'Frontend\PageController@showSupplier');
Route::get('/infrastructure', 'Frontend\PageController@showInfrastructure');
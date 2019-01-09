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
Route::get('/tentang-kami', 'Frontend\PageController@showAbout');
Route::get('/produk', 'Frontend\PageController@showProducts');
Route::get('/principal', 'Frontend\PageController@showPrinciple');
Route::get('/infrastruktur', 'Frontend\PageController@showInfrastructure');
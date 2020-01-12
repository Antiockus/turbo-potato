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

Route::get('/', 'standardPageController@index')->name('index');

Route::get('/about', 'standardPageController@about')->name('about');

Route::get('/contact', 'standardPageController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tickets', 'TicketController');

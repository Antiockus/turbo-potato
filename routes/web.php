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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tickets', 'TicketController');

Route::get('send_test_email', function () {
    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function ($message) {
        $message->to('d90656@urhen.com');
    });
});

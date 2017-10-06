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

//home
Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');

//faq
Route::get('faq', 'PagesController@faq');

//tickets
Route::resource('tickets', 'TicketController');
Route::get('create', 'TicketController@create');

Auth::routes();

Route::get('tickets', 'HomeController@index')->name('tickets');

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
Auth::LoginUsingId(2);

Route::resource('snippets', 'Web\SnippetController');
Route::resource('output', 'Web\OutputController');
Route::get('/', 'Web\HomeController@index')->name('home.index');
Route::get('/{snippet}', 'Web\HomeController@show')->name('home.show');
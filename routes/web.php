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

// Auth::loginUsingId(1);

Auth::routes();
Route::get('/', 'Web\HomeController@index')->name('home.index');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('snippets', 'Web\SnippetController');
	Route::get('snippets/{snippet}/edit/history', 'Web\SnippetHistoryController@show')->name('snippets.history');
	Route::get('output', 'Web\OutputController@index')->name('output.index');
	Route::get('profile', 'Web\ProfileController@index')->name('profile.index');
	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

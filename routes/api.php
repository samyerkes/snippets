<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::group(['middleware' => 'auth:api'], function () {
	Route::get('v1/snippets', 'API\SnippetController@index')->name('api.snippets.index');
    Route::post('v1/snippets', 'API\SnippetController@store')->name('api.snippets.store');
    Route::get('v1/snippets/{snippet}', 'API\SnippetController@show')->name('api.snippets.show');
    Route::put('v1/snippets/{snippet}', 'API\SnippetController@update')->name('api.snippets.update');
    Route::delete('v1/snippets/{snippet}', 'API\SnippetController@destroy')->name('api.snippets.destroy');
    

	Route::post('v1/output', 'API\OutputController@store')->name('api.output.store');
	Route::post('v1/profile/token', 'API\ProfileController@regnerateToken')->name('api.profile.token.regenerate');
});

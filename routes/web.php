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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'HomeController@index')->name('top_page');

Route::group(['namespace' => 'User'], function () {
    Route::group(['prefix' => 'comics', 'as' => 'comics.'], function () {
        Route::get('/', 'ComicController@index')->name('index');

        Route::get('/{comic_name}', 'ComicController@show')->name('show');
        Route::get('/{comic_name}/review/create', 'ReviewController@create')->name('show.review.create');
        Route::post('/{comic_name}/review/store', 'ReviewController@store')->name('show.review.store');
    });
});

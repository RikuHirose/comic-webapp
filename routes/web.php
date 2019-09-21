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

Route::get('comics', 'User\ComicController@index')->name('comics.index');

Route::get('comics/{comic_name}', 'User\ComicController@show')->name('comics.show');

Route::get('comics/{writer_name}',
'User\ComicController@writer')->name('comics.writer');

// Route::get('/home', 'HomeController@index')->name('home');

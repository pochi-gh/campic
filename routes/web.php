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

use App\Http\Controllers\ArticleController;

Route::get('/','ArticleController@index')->name('articles.index');
Route::resource('/articles','ArticleController')->except(['index','show'])->middleware('auth');
Route::resource('/articles','ArticleController')->only(['show']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

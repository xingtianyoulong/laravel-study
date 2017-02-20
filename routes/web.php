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

/**
 * Close route
 */
/**
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('now', function () {
    return date("Y-m-d H:i:s");
});

/**
 * MVC route
 */
Route::get('welcome', 'WelcomeController@index');

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('article', 'HomeController@index');

Route::get('article/{id}', 'ArticleController@show');

Route::post('comment', 'CommentController@store');

/**
 * Route group
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('article', 'ArticleController');
});

/**
 * Auth route
 */
Auth::routes();
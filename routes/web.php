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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::view('contact-us','contact-us');
Route::post('contact-us','ContactController@store');
Route::get('watches','ProductController@watches');
Route::get('watches/watch-tissot','ProductController@tissot');
Route::get('watches/watch-breitling','ProductController@breitling');
Route::get('watches/watch-omega','ProductController@omega');
Route::get('watches/watch-mathey-tissot','ProductController@mathey_tissot');
Route::get('clocks','ProductController@clocks');
Route::get('clocks/hilser','ProductController@hilser');
Route::get('clocks/hermle','ProductController@hermle');
Route::get('clocks/desktop','ProductController@desktop');
Route::get('search', 'ProductController@search');
Route::resource('admin','AdminController')->middleware(\App\Http\Middleware\AdminMiddleware::class);
Route::view('home','home');
Route::view('history-tissot','history-tissot');
Route::view('history-breitling','history-breitling');
Route::view('history-omega','history-omega');
Route::get('order','OrderController@index');
Route::post('order','OrderController@store');

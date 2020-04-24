<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
///////////////////////

Route::get('/articles','articlesController@index');
Route::get('/articles/create','articlesController@create')->middleware('auth')->middleware('can:admin');
Route::post('articles','articlesController@store')->middleware('auth')->middleware('can:admin');
Route::get('/articles/{article}','articlesController@show');
Route::get('/articles/{article}/edit','articlesController@edit')->middleware('auth')->middleware('can:admin');
Route::put('/articles/{article}','articlesController@update')->middleware('auth')->middleware('can:admin');
Route::delete('/articles/{id}','articlesController@destroy')->middleware('auth')->middleware('can:admin');


Route::get('/consultations','consultationsController@index')->middleware('auth')->middleware('can:admin');
Route::get('/consultations/create','consultationsController@create')->middleware('auth');
Route::post('consultations','consultationsController@store')->middleware('auth');
Route::get('/consultations/{consultation}','consultationsController@show')->middleware('auth')->middleware('can:admin');
Route::delete('/consultations/{id}','consultationsController@destroy')->middleware('auth')->middleware('can:admin');

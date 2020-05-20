<?php

use Illuminate\Support\Facades\Route;


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

///////////////////////
// Route::get('/articles/{id}','articlesController@getOne');

Route::get('/articles','articlesController@index')->name('Articles');
Route::get('/articles/create','articlesController@create')->name('create-article');
// ->middleware('can:admin');
Route::post('articles','articlesController@store')->name('store-article');
Route::get('/articles/{id}','articlesController@show')->name('show-article');
Route::get('/articles/edit/{id}','articlesController@edit')->name('edit-article');
Route::post('/articles/{id}','articlesController@update')->name('update-article');
Route::get('/articles/destroy/{id}','articlesController@destroy')->name('delete-article');


Route::get('/consultations','consultationsController@index')->name('Consultations');;
Route::get('/consultations/create','consultationsController@create')->name('Contact Us');
Route::post('consultations','consultationsController@store')->name('store-consultation');
Route::get('/consultations/{consultation}','consultationsController@show')->name('show-consultation');
Route::get('/consultations/destroy/{id}','consultationsController@destroy')->name('delete-consultation');
Route::get('/consultations/answer/{id}','consultationsController@answer')->name('answer-consultation');
Route::post('/consultations/{id}','consultationsController@storeAnswer')->name('store-answer');

//->middleware('auth')->middleware('can:admin')


Route::get('/deits','DeitsController@index')->name('Deits');
Route::get('/deits/create','DeitsController@create')->name('create-deit');
// ->middleware('can:admin');
Route::post('deits','DeitsController@store')->name('store-deit');
Route::get('/deits/{id}','DeitsController@show')->name('show-deit');;
Route::get('/deits/{id}/edit','DeitsController@edit')->name('edit-deit');;
Route::post('/deits/{id}','DeitsController@update')->name('update-deit');;
Route::get('/deits/destroy/{id}','DeitsController@destroy')->name('delete-deit');;

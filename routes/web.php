<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/list', 'PagesController@index');
Route::get('/add', 'PagesController@add');
Route::post('/store', 'PagesController@store');
Route::get('/edit/{id}', 'PagesController@edit');
Route::post('/update/{id}', 'PagesController@update');
Route::get('/delete_page/{id}', 'PagesController@delete_page');

//Route::get('items-lists', ['as'=>'items-lists','uses'=>'SearchController@index']);
//Route::get('/items-lists', 'Api\SearchController@index');
Route::get('/search', 'Api\SearchController@search');
//Route::post('create-item', ['as'=>'create-item','uses'=>'ItemSearchController@create']);
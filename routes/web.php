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

Route::get('full-text-search', 'FullTextSearchController@index');

Route::post('full-text-search/action', 'FullTextSearchController@action')->name('full-text-search.action');

Route::get('full-text-search/normal-search', 'FullTextSearchController@normal_search')->name('full-text-search.normal-search');

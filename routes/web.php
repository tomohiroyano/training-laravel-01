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
    Route::resource('items', 'ItemController');
Route::resource('categories', 'CategoryController');



Route::get('/items/create', 'ItemController@create')->name('items.create');
Route::get('/items/store', 'ItemController@store')->name('items.store');
Route::post('/items/store', 'ItemController@store')->name('items.store');

Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::get('/categories/store', 'CategoryController@store')->name('categories.store');
Route::post('/categories/store', 'CategoryController@store')->name('categories.store');






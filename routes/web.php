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

Route::get('/', 'HomeController@index');
Route::get('/store/{slug}', 'StoreController@index');
Route::get('/category/{slug}', 'CategoryController@index');
Route::get('/stores/{term?}', 'StoreController@allStore');
Route::get('/categories/{term?}', 'CategoryController@allCategories');

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

Route::get('/','MainController@welcome')->name("homepage");

Route::get('testing','MainController@testing')->name("test");

Route::get('index1','MainController@index')->name('index1');

Route::get('index2','MainController@index1')->name('index2');

Route::get('updates','MainController@updates')->name('updates');

Route::resource('brand', 'BrandController');

Route::resource('category', 'CategoryController');

Route::resource('subcategory', 'SubcategoryController');

Route::resource('item', 'ItemController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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



Route::get('testing','MainController@testing')->name("test");

Route::get('/','FrontendController@home')->name('mainpage');
Route::get('/signin', 'FrontendController@signin')->name('signin');

Route::get('/signup', 'FrontendController@signup')->name('signup');

Route::get('/itemdetail/{id}','FrontendController@itemdetail')->name('itemdetail');
Route::get('/itembysubcategory/{id}','FrontendController@itembysubcategory')->name('itembysubcategory');
Route::resource('user', 'UserController');

Route::resource('brand', 'BrandController');

Route::resource('category', 'CategoryController');

Route::resource('subcategory', 'SubcategoryController');



Route::resource('item', 'ItemController');
Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

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
Route::group(['namespace' => 'Shop', 'prefix' => 'shop'],function (){
    Route::resource('lists', 'ListController')->names('shop.list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/***
 * ADMIN
 */
Route::group(['namespace' => 'Shop\Admin', 'prefix' => 'admin/shop'],function (){
    $method = ['index', 'edit', 'store', 'update', 'create'];
    Route::resource('category', 'CategoriesController')->only($method)->names('shop.admin.categories');
});



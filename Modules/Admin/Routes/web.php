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
Route::get('admin', 'AuthController@index');
Route::post('admin/login','AuthController@create');


Route::group(['prefix'=>'admin','middleware'=>'admin'],function() {
   
   Route::get('dashboard','AdminController@index');

   //category
   Route::get('category','CategoryController@index');
   Route::get('category/create','CategoryController@create');
   Route::post('category/store','CategoryController@store');
   Route::get('category/edit/{id}','CategoryController@edit');
   Route::post('category/update','CategoryController@update');
   Route::get('category/delete/{id}','CategoryController@destroy');



    //article
   Route::get('article','ArticleController@index');
   Route::get('article/create','ArticleController@create');
   Route::post('article/store','ArticleController@store');
   Route::get('article/edit/{id}','ArticleController@edit');
   Route::post('article/update','ArticleController@update');
   Route::get('article/delete/{id}','ArticleController@destroy');


   Route::get('contact','ContactController@index');
   Route::get('contact/create','ContactController@create');
   Route::post('contact/store','ContactController@store');
   Route::get('contact/edit/{id}','ContactController@edit');
   Route::post('contact/update','ContactController@update');
   Route::get('contact/delete/{id}','ContactController@destroy');


   Route::get('logout','AuthController@destroy');
});

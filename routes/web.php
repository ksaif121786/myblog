<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
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

Route::get('/clear', function () {
    // return view('welcome');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});


Route::get('/',[HomeController::class,'index']);
Route::get('article-details/{id}',[ArticleController::class,'create']);
Route::get('article/{page}/{id}',[ArticleController::class,'show']);
Route::get('about-us',[HomeController::class,'about_us']);
Route::get('contact-us',[ContactController::class,'index']);
Route::post('contact-us',[ContactController::class,'store']);
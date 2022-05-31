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
//Rotte pagine statiche 
Route::get('/', 'PagesController@home') ->name('home');
Route::get('/contact', 'PagesController@contact') ->name('contact');

// Rotte resource per pagine dinamiche
Route::resource('comics', 'ComicsController');
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

Route::get('/','TourController@index')->name('home');
Route::get('/travel', 'TourController@travel')->name('travel.index');
Route::get('/travel/{travel}','TourController@show')->name('travel.show');


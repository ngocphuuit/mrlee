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
Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/{id}', 'BlogController@show');
Route::get('/category', 'CategoryController@index');
Route::get('/category/{slug}', 'CategoryController@show');
Route::get('/category/{slug}/albums/{id}', 'AlbumController@show');

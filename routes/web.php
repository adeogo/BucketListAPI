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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'PagesController@home')->name('home');

Auth::routes();



Route::middleware(['auth:api'])->group(function () {
  // Route::get('/bucketlist/{id}', 'BucketListController@show');
});

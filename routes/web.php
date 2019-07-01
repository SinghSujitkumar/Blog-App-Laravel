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


/*
Route::get('/hello', function () {
    return "Hello";
});
Route::get('/users/{id}/{name}', function ($name,$id) {
    return "This is user ".$name."with an id of".$id;
});
*/
Route::get('/','PagesController@index' );
Route::get('/about','PagesController@about' );
Route::get('/services','PagesController@services' );
Route::resource('posts', 'PostsController');
Route::resource('infos','InfosController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
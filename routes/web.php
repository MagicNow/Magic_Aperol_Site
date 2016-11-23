<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', ['as'   => 'home','uses' => 'HomeController@index']);
Route::get('/age', ['as'   => 'home','uses' => 'HomeController@ageGate']);

Route::group(['prefix' => 'admin'], function() {
	Route::get('/', ['as'=> 'admin.index','uses' => 'Admin\AdminController@index']);
    Route::get('login', ['as'=> 'admin.login','uses' => 'Admin\AdminController@index']);
    Route::post('login', ['uses' => 'Admin\AdminController@login']);
    Route::post('password/reset', ['as'=> 'admin.password','uses' => 'Admin\AdminController@changePassword']);
    Route::get('logout', ['as'=> 'admin.logout','uses' => 'Admin\AdminController@logout']);

    //USERS
    Route::get('users', ['as'=> 'admin.users','uses' => 'Admin\UsersController@index']);
    Route::get('users/create', ['as'=> 'admin.users.create','uses' => 'Admin\UsersController@create']);
    Route::get('users/edit/{id}', ['as'=> 'admin.users.edit','uses' => 'Admin\UsersController@edit']);
	Route::get('users/destroy/{id}', ['as'=> 'admin.users.destroy','uses' => 'Admin\UsersController@destroy']);
    Route::post('users/store/{id?}', ['as'=> 'admin.users.store','uses' => 'Admin\UsersController@store']);
	
	//POSTS

    Route::get('posts', ['as'=> 'admin.posts','uses' => 'Admin\PostsController@index']);
    Route::get('posts/status/{id}/{status}', ['as'=> 'admin.posts.status','uses' => 'Admin\PostsController@status']);

});



Route::group(['prefix' => 'api'], function() {

    Route::get('/posts', ['as'   => 'posts','uses' => 'ApiController@posts']);

});
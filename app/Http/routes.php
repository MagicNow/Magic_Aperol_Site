<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/api/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/instagram', ['as'=> 'api.instagram','uses' => 'ApiController@posts']);

Route::get('/', ['as' => 'base', 'uses' => 'HomeController@index']);
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@home']);
Route::post('/age', ['as' => 'age', 'uses' => 'HomeController@ageGate']);
Route::get('/getFotos', ['as' => 'getFotos','uses' => 'HomeController@getFotos']);

Route::group(['prefix' => 'admin'], function() {
	// Auth::routes();

    //USERS
    Route::get('users', ['as'=> 'admin.users','uses' => 'Admin\UsersController@index']);
	Route::get('users/destroy/{id}', ['as'=> 'admin.users.destroy','uses' => 'Admin\UsersController@destroy']);
    Route::post('users/store/{id?}', ['as'=> 'admin.users.store','uses' => 'Admin\UsersController@store']);

    //LOGIN
    Route::group(array('middleware' => 'auth'), function () {
        Route::get('register', 'Auth\AuthController@showRegistrationForm');
        Route::post('register', 'Auth\AuthController@register');
    });

	//POSTS
    Route::get('posts', ['as'=> 'admin.posts','uses' => 'Admin\PostsController@index']);
    Route::get('posts/status/{id}/{status}', ['as'=> 'admin.posts.status','uses' => 'Admin\PostsController@status']);
});



Route::group(['prefix' => 'api'], function() {

    Route::get('/posts', ['as'   => 'posts','uses' => 'ApiController@posts']);

});
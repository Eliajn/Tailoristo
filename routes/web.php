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



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/', 'FeedController@show')->name('home');

	Route::view('/post/store', '/post/addpost');

	Route::post('/post/store', 'PostController@store');

	Route::get('/showposts', 'PostController@show');

	Route::post('/profile/createprofile', 'ProfileController@store');

	Route::get('/profile', 'ProfileController@show');

	Route::view('/messages', '/message/messages');
	
	Route::post('/view', 'ViewController@store');

	Route::post('/like','LikeController@update')->name('likeUpdate');

	Route::post('/comments/store', 'CommentsController@store')->name('commentStore');

	Route::post('/follow/', 'FollowerController@update')->name('followUpdate');

});





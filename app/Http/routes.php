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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');



Route::group(['middleware' => 'is_admin'],function (){
    Route::get('/admin',function (){
        return view('/admin.index');
    });
    Route::get('/post/{id}','AdminPostController@post');
    Route::resource('/admin/users','AdminUsersController');
    Route::resource('/admin/posts','AdminPostController');
    Route::resource('/admin/categories','AdminCategoriesController');
    Route::resource('/admin/media','AdminMediaController');
    Route::resource('/post/comment/replies','CommentsRepliesController');
    Route::resource('/posts/comments','PostCommentsController');
});

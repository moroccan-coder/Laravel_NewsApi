<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/**
 * @User Related
 */

Route::get('authors','Api\UserController@index');
Route::get('author/{id}','Api\UserController@show');
Route::get('posts/author/{id}','Api\UserController@posts');
Route::get('comments/author/{id}','Api\UserController@comments');

// End User



/**
 * @Post related
 */

 Route::get('categories','Api\CategoryController@index');
 Route::get('posts/category/{id}','Api\CategoryController@posts');
 Route::get('posts','Api\PostController@index');
 Route::get('post/{id}','Api\PostController@show');
 Route::get('comments/post/{id}','Api\PostController@comments');
 // End Post



 // POST Requests Routes
 Route::post('register','Api\UserController@store');
 Route::post('token','Api\UserController@getToken');







 // -->  we use the Route inside middleware to ensure the authentication before adding data to db
Route::middleware('auth:api')->group(function() {

 Route::post('update-user/{id}','Api\UserController@update');
 Route::post('posts','Api\PostController@store');
 Route::post('post/{id}','Api\PostController@update');
 Route::delete('post/{id}','Api\PostController@destroy');


 Route::post('comments/post/{id}','Api\CommentController@store');

 Route::post('votes/post/{id}','Api\PostController@votes');

});

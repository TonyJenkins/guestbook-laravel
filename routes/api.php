<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'GuestBookRestController@getAllComments');
Route::get('/find/{id}', 'GuestBookRestController@getCommentById');
Route::get('/users', 'GuestBookRestController@getDistinctUsers');
Route::get('/comment_count', 'GuestBookRestController@getNumberOfComments');
Route::get('/average_length', 'GuestBookRestController@getAverageCommentLength');
Route::get('/longest_comment', 'GuestBookRestController@getLongestComment');
Route::delete('/delete/{id}', 'GuestBookRestController@deleteComment');
Route::post('/add', 'GuestBookRestController@addComment');
Route::put('/update', 'GuestBookRestController@updateComment');

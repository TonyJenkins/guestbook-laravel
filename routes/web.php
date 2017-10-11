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

Route::get('/', 'GuestBookWebController@displayGuestBook')->name('displayGuestBook');
Route::post('/', 'GuestBookWebController@addComment')->name('addComment');

Route::get('/delete/{id}', 'GuestBookWebController@deleteComment')->name('deleteComment');
Route::get('/update/{id}', 'GuestBookWebController@editComment')->name('editComment');
Route::post('/update/{id}', 'GuestBookWebController@saveComment')->name('saveComment');
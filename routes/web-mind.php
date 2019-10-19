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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::post('/getuser','UserController@login');
Route::get('/logout','UserController@logout');
Route::post('/getregister','UserController@register');
Route::post('/check_username','UserController@check_username');
Route::post('/check_email','UserController@check_email');

Route::group(['prefix' => 'how-to-buy'], function () {
    Route::get('/','BlogController@blog_list');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/','AboutController@about');
});

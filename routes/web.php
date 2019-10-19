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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ProductController@index_page');

Route::get('/check', function () {
    return view('shop.check_out');
});

Route::get('/manage_product', function () {
    return view('manage.product');
})->name('manage_product');

Route::get('/manage_cate', function () {
    return view('manage.cate');
})->name('manage_cate');

Route::get('/cart', function () {
    return view('shop.cart');
})->name('cart');

Route::group(['prefix' => 'shop'], function () {
    Route::group(['prefix' => 'catetalog'],function () {
        Route::get('all','ProductController@shop_list')->name('pro_all');
        Route::post('get_cart_list','ProductController@get_cart_list')->name('get_cart_list');
        Route::post('get_check_out','ProductController@get_check_out')->name('get_check_out');
        Route::post('add_item_to_cart','ProductController@add_item_to_cart')->name('add_item_to_cart');
        Route::post('delete_cart','ProductController@delete_cart')->name('delete_cart');
        Route::post('load_data_all','ProductController@load_data_all')->name('load_data_all');
        Route::post('add_cate','ProductController@add_cate')->name('add_cate');
        Route::post('update_cate','ProductController@update_cate')->name('update_cate');
        Route::post('delete_cate','ProductController@delete_cate')->name('delete_cate');
        Route::post('delete_product','ProductController@delete_product')->name('delete_product');
        Route::post('add_product','ProductController@add_product')->name('add_product');
        Route::post('get_product','ProductController@get_product')->name('get_product');
        Route::post('load_edit_pro','ProductController@load_edit_pro')->name('load_edit_pro');
        Route::post('edit_product','ProductController@edit_product')->name('edit_product');
        Route::post('update_qty','ProductController@update_qty')->name('update_qty');
        Route::post('set_session','ProductController@set_session')->name('set_session');
        Route::post('post_review','ProductController@post_review')->name('post_review');
        Route::post('get_post_review','ProductController@get_post_review')->name('get_post_review');
        Route::get('get_one_product/{id}','ProductController@get_one_product')->name('get_one_product');
        Route::get('update_cart_status','ProductController@update_cart_status')->name('update_cart_status');

    });

});

// Route::get('/admin', function () {
//     return view('manage.product');
// });
Route::get('/admin','ProductController@manage_product')->name('manage_product');



include('web-mind.php');

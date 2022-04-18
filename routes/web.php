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
// Route::get('/products/create', 'ProductsController@create')->name('createProduct');
// Route::post('/products/store', 'ProductsController@store')->name('storeProduct');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

//shop
Route::get('/shop', 'HomeController@shop')->name('shop.index');
Route::get('/shop/single-product', 'HomeController@shopShow')->name('shop.show');

//cart
Route::get('/cart', 'HomeController@cart')->name('cart.index');

//checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@checkoutSuccess')->name('checkout.success');

//order
Route::get('/orders', 'HomeController@orders')->name('orders');

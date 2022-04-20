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

use Illuminate\Support\Facades\Redirect;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

//shop
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/single-product/{product}', 'ShopController@showProduct')->name('singleProduct.show');

//cart
Route::get('/cart', 'HomeController@cart')->name('cart.index');

//checkout
Route::get('/checkout', 'HomeController@checkout')->name('checkout.index');
Route::get('/checkout/success', 'HomeController@checkoutSuccess')->name('checkout.success');

//order
Route::get('/orders', 'HomeController@orders')->name('orders');

Auth::routes();

Route::get('/logout' ,  function(){
   
     auth()->logout();
     session()->flush();
     return Redirect::to('/');

})->name('logout');


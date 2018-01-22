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

Route::get('/', function () {
    return view('welcome');
});

// Customer
Route::post('palvision/customer/insert/', 'CustomerController@store');

Route::get('palvision/customer/retrive/{id}', 'CustomerController@show');

Route::get('palvision/customer/update/{id}', 'CustomerController@update');

Route::get('palvision/customer/delete/{id}', 'CustomerController@destroy');

// Product

Route::get('palvision/products/insert/{id}', 'ProductController@store');

Route::get('palvision/products/retrive/{id}', 'ProductController@show');

Route::get('palvision/products/update/{id}', 'ProductController@update');

Route::get('palvision/products/delete/{id}', 'ProductController@destroy');

// sale
Route::post('palvision/sale/insert', 'SaleController@store');

Route::get('palvision/sale/retrive/{id}', 'SaleController@show');

Route::get('palvision/sale/update/{id}', 'SaleController@update');

Route::get('palvision/sale/delete/{id}', 'SaleController@destroy');

// shop
Route::get('palvision/shop/insert/{id}', 'ShopController@store');

Route::get('palvision/shop/retrive/{id}', 'ShopController@show');

Route::get('palvision/shop/update/{id}', 'ShopController@update');

Route::get('palvision/shop/delete/{id}', 'ShopController@destroy');

// vender

Route::get('palvision/vendor/insert/{id}', 'VendorController@store');

Route::get('palvision/vendor/retrive/{id}', 'VendorController@show');

Route::get('palvision/vendor/update/{id}', 'VendorController@update');

Route::get('palvision/vendor/delete/{id}', 'VendorController@destroy');

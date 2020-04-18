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

// Authentication

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');


//Page to go to by default
Route::get('/', 'HomeController@show');

//Regular pages
Route::get('home', 'HomeController@show');
Route::get('about', 'AboutController@show');
Route::get('FAQ', 'FAQController@show');
Route::get('wishlist', 'WishlistController@show');
Route::get('adminPage', 'AdminProfileController@show');

//Cart
Route::get('cart', 'CartController@show');
Route::get('product/{id}/cart', 'CartController@add');

Route::get('product/{id}', 'ProductController@show');
Route::get('search', 'SearchController@show');
Route::get('profile', 'ProfileController@show');
Route::get('purchase_history', 'PurchaseHistoryController@show');
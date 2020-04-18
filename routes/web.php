<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('cart')->group(function () {
    Route::post('/change-product-amount/{productId}', 'CartController@changeProductAmount')
        ->name('cart.changeProductAmount');
    Route::post('/add/{productId}', 'CartController@addProduct')->name('cart.add');
    Route::get('', 'CartController@index')->name('cart.index');
});

Route::get('/', 'MainController@index')->name('home');

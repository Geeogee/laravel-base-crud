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

Route::get('/', 'GuestController@home') -> name('home');
Route::get('guest/{id}', "GuestController@guest") -> name('guest');
Route::get('register/guest', "GuestController@newGuest") -> name('new_guest');
Route::post('store/guest', 'GuestController@storeGuest') -> name('store_guest');
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

Route::get('/captcha', 'CaptchaController@index')->name('captcha');
Route::post('/captcha', 'CaptchaController@check_captcha')->name('check_captcha');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@check_login')->name('check_login');

Route::get('/register', 'AuthController@register')->name('register');
Route::post('/register', 'AuthController@store')->name('store');

Route::get('/twofactor', 'AuthController@twofactor')->name('twofactor');
Route::post('/twofactor', 'AuthController@check_twofactor')->name('check_twofactor');

Route::get('/resetpwd', 'AuthController@resetpwd')->name('resetpwd');
Route::post('/resetpwd', 'AuthController@do_resetpwd')->name('do_resetpwd');

Route::get('/logout', 'AuthController@logout')->name('logout');

/////////////////////// frontend ///////////////////////////
Route::get('/', 'HomeController@index')->name('home');

Route::get('/setting', 'HomeController@setting')->name('setting');
Route::post('/setting', 'HomeController@store')->name('update_setting');

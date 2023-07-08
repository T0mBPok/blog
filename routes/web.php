<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'MainController@login')->name('login');

Route::get('/login', 'MainController@login')->name('login');

Route::get('/sign', 'MainController@sign')->name('sign');

Route::get('/user/{id}}', 'MainController@user')->name('user');

Route::post('/sign/check', 'MainController@sign_check')->name('sign-form');

Route::post('/login/check', 'MainController@login_check')->name('login-form');
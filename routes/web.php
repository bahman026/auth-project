<?php

use App\Http\Controllers\AuthController;
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

Route::name('Auth.')->group(function () {
    Route::name('Login.')->prefix('/login')->group(function () {
        Route::get('/', 'AuthController@login')->name('login');
        Route::post('/login', 'AuthController@loginSubmit')->name('submit');

    });

    Route::name('Register.')->prefix('/register')->group(function () {
        Route::get('/', 'AuthController@register')->name('register');
        Route::post('/submit', 'AuthController@registerSubmit')->name('submit');
    });

    

});

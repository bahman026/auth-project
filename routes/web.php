<?php

use App\Http\Controllers\LoginController;
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

Route::name('Auth.')->prefix('/login')->group(function () {
    Route::get('/', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@login')->name('submit');
    Route::post('/register', 'LoginController@login')->name('register');
});

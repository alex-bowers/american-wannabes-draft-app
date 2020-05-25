<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

// Twitter Login.
Route::get('/callback', 'SocialAuthTwitterController@callback');
Route::get('/redirect', 'SocialAuthTwitterController@redirect');

// Anything else for Vue router.
Route::get('/{any}', 'HomeController@index');

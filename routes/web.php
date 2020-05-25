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
Auth::routes();

// Twitter Login.
Route::get('/redirect', 'SocialAuthTwitterController@redirect');
Route::get('/callback', 'SocialAuthTwitterController@callback');

Route::middleware(['active'])->group(function () {
    Route::get('api/get-user/{user?}', 'API\UserController@getUser');
    Route::get('api/rosters/{user?}', 'API\RostersController@getRosters');
    Route::get('api/players', 'API\RostersController@getAvailablePlayers');
    Route::get('api/draft-board', 'API\PicksController@getDraftBoard');
});

Route::get('/{any}', 'HomeController@index');

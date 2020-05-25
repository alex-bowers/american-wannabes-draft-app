<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('draft-board', 'API\PicksController@getDraftBoard');
Route::get('get-user/{user?}', 'API\UserController@getUser');
Route::get('players', 'API\RostersController@getAvailablePlayers');
Route::get('rosters/{user?}', 'API\RostersController@getRosters');

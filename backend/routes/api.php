<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//Route::post('register', 'UserController@store')->name('users.store');

//Route::post('register', 'UserController@store');

Route::post('register', 'App\Http\Controllers\UserController@store')->name('users.store');

//Route::post('register', [UserController::class, 'store']);
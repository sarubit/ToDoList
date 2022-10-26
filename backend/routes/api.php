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

/*
comentarido fran- ROTA ESTRUTUTA -- route::metodo('nome-url','caminho-ur@funcao chamada')->name('apelido');
*/

Route::post('register', 'App\Http\Controllers\UserController@store')->name('users.store');
Route::post('login', 'App\Http\Controllers\UserController@login')->name('users.login');


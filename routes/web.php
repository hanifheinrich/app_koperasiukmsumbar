<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;
use app\Http\Controllers\AuthController;


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

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::post('/login','App\Http\Controllers\AuthController@auth')->middleware('guest');;
Route::get('/logout','App\Http\Controllers\AuthController@logout')->middleware('auth');

Route::get('/dashboard-admin', 'App\Http\Controllers\AdminController@dashboard')->middleware('auth');
Route::get('/profil', 'App\Http\Controllers\AdminController@profile')->middleware('auth');;
Route::get('/master-data', 'App\Http\Controllers\AdminController@index')->middleware('auth');;
Route::get('/detail-master-data/{id}', 'App\Http\Controllers\AdminController@show')->middleware('auth');;
Route::get('/arsip-pendirian', 'App\Http\Controllers\AdminController@arsippendirian')->middleware('auth');;
Route::get('/arsip-pad', 'App\Http\Controllers\AdminController@arsippad')->middleware('auth');;




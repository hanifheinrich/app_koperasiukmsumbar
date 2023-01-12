<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;


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

Route::get('/', function () {
    return view('login');
});


Route::get('/dashboard-admin', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/profil', 'App\Http\Controllers\AdminController@profile');
Route::get('/master-data', 'App\Http\Controllers\AdminController@masterdata');
Route::get('/detail-master-data', 'App\Http\Controllers\AdminController@detailmasterdata');
Route::get('/arsip-pendirian', 'App\Http\Controllers\AdminController@arsippendirian');
Route::get('/arsip-pad', 'App\Http\Controllers\AdminController@arsippad');




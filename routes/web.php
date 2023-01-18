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
Route::get('/','App\Http\Controllers\UserController@index')->middleware('guest');;
Route::get('/login','App\Http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::post('/login','App\Http\Controllers\AuthController@auth')->middleware('guest');;
Route::get('/logout','App\Http\Controllers\AuthController@logout')->middleware('auth');

Route::get('/dashboard-admin', 'App\Http\Controllers\AdminController@dashboard')->middleware('auth');
Route::get('/profil', 'App\Http\Controllers\AdminController@profile')->middleware('auth');;
Route::get('/master-data', 'App\Http\Controllers\AdminController@index')->middleware('auth');;
Route::get('/detail-master-data', 'App\Http\Controllers\AdminController@show')->middleware('auth');;
Route::get('/arsip-pendirian', 'App\Http\Controllers\AdminController@arsippendirian')->middleware('auth');;
Route::get('/arsip-pad', 'App\Http\Controllers\AdminController@arsippad')->middleware('auth');;


// Route::get('/master-koperasi-ukm', function(){
//     return view('master-koperasi-ukm',[
//         "title" => "Koperasi & UKM"
//     ]);
// });

Route::get('/arsip-pendirian', function () {
    return view('arsip-pendirian',[
        "title" => "Arsip Pendirian Koperasi & UKM"
    ]);
});

Route::get('/arsip-pad', function () {
    return view('arsip-pad',[
        "title" => "Arsip Perubahan Anggaran Dasar Koperasi & UKM"
    ]);
});


Route::get('/tambah-koperasi', function () {
    return view('tambah-koperasi',[
        "title" => "Tambah Koperasi & UKM"
    ]);
});

Route::get('/detail-koperasi', function () {
    return view('detail-koperasi',[
        "title" => "Detail Koperasi & UKM"
    ]);
});

Route::get('/tambah-koperasi', function () {
    return view('tambah-koperasi',[
        "title" => "Tambah Koperasi & UKM"
    ]);
});

Route::get('/detail-koperasi', function () {
    return view('detail-koperasi',[
        "title" => "Detail Koperasi & UKM"
    ]);
});


Route::get('/koperasi', function () {
    return view('user.koperasi',[
        "title" => "Daftar Koperasi dan UKM Kota"
    ]);
});

Route::get('/profil', function () {
    return view('profil',[
        "title" => "Profil Admin"
    ]);
});
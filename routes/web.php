<?php

use app\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('user.main');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin',[
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/master-koperasi-ukm', function(){
    return view('master-koperasi-ukm',[
        "title" => "Koperasi & UKM"
    ]);
});

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

Route::get('/daftar-koperasi', function () {
    return view('kabkota-admin',[
        "title" => "Daftar Koperasi dan UKMz"
    ]);
});

Route::get('/koperasi', function () {
    return view('user.koperasi',[
        "title" => "Daftar Koperasi dan UKM Kota"
    ]);
});

Route::get('/kota-admin', function () {
    return view('daftar-kota-admin',[
        "title" => "Daftar Koperasi dan UKM Kota"
    ]);
});

Route::get('/detail-pendirian', function () {
    return view('user.detail-pendirian',[
        "title" => "Daftar Koperasi dan UKM Kota"
    ]);
});

Route::get('/daftar-PAD', function () {
    return view('user.daftar-PAD',[
        "title" => "Daftar Koperasi dan UKM Kota"
    ]);
});

Route::get('/detail-pad', function () {
    return view('user.detail-pad',[
        "title" => "Daftar Koperasi dan UKM Kota"
    ]);
});
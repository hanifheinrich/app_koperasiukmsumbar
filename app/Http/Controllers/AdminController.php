<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use App\Models\Kabkota;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function dashboard(){
        return view('dashboard-admin',[
        "title" => "Dashboard Admin"
    ]);
  }

  public function profile(){
    return view('profile',[
        "title" => "Profil"
      ]);
  }

  public function index()
  {
    $kabkota = Kabkota::all();
    return view('master-koperasi-ukm',[
        "title" => "Koperasi & UKM",
        'Kabkota' => $kabkota
      ]);
  }

  public function show()
  {
    $wilayah = Wilayah::all();
    return view('kabkota-admin',[
        "title" => "Koperasi & UKM",
        'Wilayah' => $wilayah
      ]);
  }


  public function arsippendirian(){
    return view('arsip-pendirian',[
        "title" => "Arsip Pendirian Koperasi & UKM"
    ]);
  }

  public function arsippad(){
    return view('arsip-pad',[
        "title" => "Arsip Perubahan Anggaran Dasar Koperasi & UKM"
    ]);
  }
}

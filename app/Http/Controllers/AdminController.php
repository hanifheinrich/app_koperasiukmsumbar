<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
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

  public function masterdata()
  {
    $wilayah = Wilayah::all();
    return view('master-koperasi-ukm',[
        "title" => "Koperasi & UKM",
        'dataWilayah' => $wilayah
      ]);
  }

  public function detailmasterdata()
  {
    $wilayah = Wilayah::all();
    return view('detail-wilayah',[
        "title" => "Koperasi & UKM",
        'dataWilayah' => $wilayah
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

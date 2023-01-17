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
    return view('profil',[
        "title" => "Profil"
      ]);
  }

  public function index()
  {
    $wilayah = Wilayah::get();
    return view('master-koperasi-ukm',[
        "title" => "Koperasi & UKM",
        'Wilayah' => $wilayah
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

  public function destroy($id_koperasi)
  {
    if (Wilayah::destroy($id_koperasi))
    {
      session()->flash ('success', 'Koperasi dan UKM berhasil dihapus');
    }else{
      session()->flash ('failed', 'Koperasi dan UKM gagal dihapus');
    }

    return redirect()->back();
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

  // @param int $id_koperasi
  // @return Illuminate\Http\Request

  
}

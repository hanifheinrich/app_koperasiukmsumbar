<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index(){
        return view('user.main',[
        "title" => "Landing Page"
    ]);
  }

  public function koperasi(){
    return view('user.koperasi',[
        "title" => "Daftar Koperasi dan UKM"
      ]);
  }


}

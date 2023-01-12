<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    return view('master-koperasi-ukm',[
      "title" => "Koperasi & UKM"
    ]);
  }
}
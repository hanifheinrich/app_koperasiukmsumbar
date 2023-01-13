<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }

  public function auth(Request $request)
    {
      $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required']
      ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/dashboard-admin');
      }

      return redirect('/login');
    }
}

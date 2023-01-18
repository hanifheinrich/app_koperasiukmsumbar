<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authcontroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

  public function auth(Request $request)
    {
      //validasi inputan
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
      ]);

      
      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/dashboard-admin');
      }

      Session::flash('status', 'failed');
      Session::flash('message', 'login wrong');

      return redirect('/login');

    }

  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function user()
      {
          return view('/welcome', [
            'user' => Auth::user()
          ]);
      }
}

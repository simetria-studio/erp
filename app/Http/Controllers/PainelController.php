<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function dashboard()
    {
        // auth()->guard('user')->logout();
        return view('dashboard');
    }
}
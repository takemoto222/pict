<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top()
    {
        return view('top');
    }
    public function login_top()
    {
        return view('logout_top');
    }
}

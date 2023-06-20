<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeNonUserController extends Controller
{
    public function home()
    {
        return view('homeNonUser');
    }
}

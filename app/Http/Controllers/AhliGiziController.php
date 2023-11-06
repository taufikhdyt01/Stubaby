<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AhliGiziController extends Controller
{
    public function dashboard()
    {
        return view('ahliGizi.dashboard');
    }

}

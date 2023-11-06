<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IrtController extends Controller
{
    public function dashboard()
    {
        return view('irt.dashboard');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\User;
use App\Models\TiketKonsultasi;
use App\Models\Konten;

class IrtController extends Controller
{
    public function dashboard()
    {
        
        $articles = Konten::all();
        $user = auth()->user();
        $tiketKonsultasis = TiketKonsultasi::where('id_irt', $user->id)->get();
        $anak = $user->anak;
        return view('irt.dashboard', compact('anak', 'articles', 'tiketKonsultasis'));
    }

}

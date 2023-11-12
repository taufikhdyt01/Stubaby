<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiketKonsultasi;
use App\Models\Konten;
use Illuminate\Support\Facades\Auth;

class AhliGiziController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $selesaiCount = TiketKonsultasi::where('id_ahligizi', $user->id)
            ->where('status', 'Selesai')
            ->count();

        $pendingCount = TiketKonsultasi::where('id_ahligizi', $user->id)
            ->where('status', 'Pending')
            ->count();

        $articleCount = Konten::where('user_id', $user->id)->count();

        return view('ahliGizi.dashboard', [
            'selesaiCount' => $selesaiCount,
            'pendingCount' => $pendingCount,
            'articleCount' => $articleCount,
        ]);
    }

}

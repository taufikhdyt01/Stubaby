<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\TiketKonsultasi;
use Illuminate\Http\Request;

class TiketKonsultasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $tiketKonsultasis = TiketKonsultasi::where('id_ahligizi', $user->id)->get();

        return view('ahliGizi.konsultasi', ['tiketKonsultasis' => $tiketKonsultasis]);
    }

    public function chatKonsultasi($id)
    {
        $tiket = TiketKonsultasi::find($id);
        return view('ahliGizi.chatKonsultasi', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $tiket = TiketKonsultasi::findOrFail($id);
        $tiket->solusi = $request->input('solusi');
        $tiket->status = 'Selesai';
        $tiket->save();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\TiketKonsultasi;
use App\Models\PesanTiketKonsultasi;
use Illuminate\Http\Request;
use App\Events\SendMessageEvent;

class TiketKonsultasiController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'ahliGizi') {
            $tiketKonsultasis = TiketKonsultasi::where('id_ahligizi', $user->id)->get();
            return view('ahliGizi.konsultasi', ['tiketKonsultasis' => $tiketKonsultasis]);
        } elseif ($user->role === 'irt') {
            $tiketKonsultasis = TiketKonsultasi::where('id_irt', $user->id)->get();
            return view('irt.konsultasi', ['tiketKonsultasis' => $tiketKonsultasis]);
        }
    }

    public function chatKonsultasi($id)
    {
        $tiket = TiketKonsultasi::find($id);
        $chats = TiketKonsultasi::find($id)->chats;
        return view('ahliGizi.chatKonsultasi', ['tiket' => $tiket, 'chats' => $chats]);
    }

    public function chatKonsultasiIrt($id)
    {
        $tiket = TiketKonsultasi::find($id);
        $chats = TiketKonsultasi::find($id)->chats;
        return view('irt.chatKonsultasi', ['tiket' => $tiket, 'chats' => $chats]);
    }

    public function update(Request $request, $id)
    {
        $tiket = TiketKonsultasi::findOrFail($id);
        $tiket->solusi = $request->input('solusi');
        $tiket->status = 'Selesai';
        $tiket->save();

        return redirect()->back();
    }

    public function filteredKonsultasi(Request $request)
    {
        $tiketKonsultasis = TiketKonsultasi::query();

        // Terapkan filter berdasarkan input dari formulir
        if ($request->has('tanggal')) {
            $tiketKonsultasis->where('tanggal', $request->tanggal);
        }

        if ($request->has('status')) {
            $tiketKonsultasis->where('status', $request->status);
        }

        if ($request->has('search')) {
            $tiketKonsultasis->where('judul_tiket', 'like', '%' . $request->search . '%');
        }

        $tiketKonsultasis = $tiketKonsultasis->get();

        return view('ahligizi.konsultasi', ['tiketKonsultasis' => $tiketKonsultasis]);
    }

    public function kirimPesan(Request $request)
    {
        $pesanBaru = new PesanTiketKonsultasi();
        $pesanBaru->id_tiket_konsultasi = $request->id_tiket_konsultasi;
        $pesanBaru->pengirim_id = auth()->user()->id;
        $pesanBaru->penerima_id = $request->penerima_id;
        $pesanBaru->pesan = $request->pesan;

        $pesanBaru->save();

        // broadcast(new SendMessageEvent($pesanBaru))->toOthers();
        broadcast(new SendMessageEvent($pesanBaru));

        // Mengambil tiket terkini yang dikirim pesan
        $tiket = TiketKonsultasi::findOrFail($request->id_tiket_konsultasi);
        $chats = TiketKonsultasi::findOrFail($request->id_tiket_konsultasi)->chats;

        // Mengambil pesan-pesan terkini pada tiket tersebut
        $pesanTerkini = PesanTiketKonsultasi::where('id_tiket_konsultasi', $tiket->id)->get();

        // Mengembalikan view yang menampilkan tiket dan pesan terkini
        return view('ahliGizi.chatKonsultasi', compact('tiket', 'pesanTerkini','chats'));
    }

}

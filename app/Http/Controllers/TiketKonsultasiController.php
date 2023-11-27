<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\TiketKonsultasi;
use App\Models\PesanTiketKonsultasi;
use App\Models\User;
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
            $users = User::where('role', 'ahliGizi')->get();
            $tiketKonsultasis = TiketKonsultasi::where('id_irt', $user->id)->get();
            return view('irt.konsultasi', compact('tiketKonsultasis', 'users'));
        }
    }

    public function chatKonsultasi($id)
    {
        $user = Auth::user();
        $tiket = TiketKonsultasi::find($id);
        $chats = TiketKonsultasi::find($id)->chats;
        if ($user->role === 'ahliGizi') {
            return view('ahliGizi.chatKonsultasi', ['tiket' => $tiket, 'chats' => $chats]);
        } elseif ($user->role === 'irt') {
            return view('irt.chatKonsultasi', ['tiket' => $tiket, 'chats' => $chats]);
        }
    }

    public function update(Request $request, $id)
    {
        $tiket = TiketKonsultasi::findOrFail($id);
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
        $user = Auth::user();
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
        if ($user->role === 'ahliGizi') {
            return view('ahliGizi.chatKonsultasi', compact('tiket', 'pesanTerkini', 'chats'));
        } elseif ($user->role === 'irt') {
            return view('irt.chatKonsultasi', compact('tiket', 'pesanTerkini', 'chats'));
        }

    }

    public function buatTiket(Request $request)
    {
        $validatedData = $request->validate([
            'judul_tiket' => 'required|string',
            'pilih_ahli_gizi' => 'required|exists:users,id',
        ]);

        $tiket = TiketKonsultasi::create([
            'judul_tiket' => $validatedData['judul_tiket'],
            'status' => 'Pending', 
            'id_ahligizi' => $validatedData['pilih_ahli_gizi'],
            'id_irt' => auth()->id(), 
        ]);

        return redirect()->route('tiket.chat.irt', ['id' => $tiket->id]);
    }

}

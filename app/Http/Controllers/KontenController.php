<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;



class KontenController extends Controller
{
    public function index()
    {
    $user = auth()->user();
    $konten = Konten::where('user_id', $user->id)->get();

    return view('ahliGizi.konten', compact('konten'));
    }

    public function store(Request $request)
    {
        // Validasi input dan proses lainnya

        // Buat instance Konten
        $konten = new Konten([
            'judul' => $request->judul_artikel,
            'attachment' => $request->attachment,
            'content' => $request->isi_artikel,
            'media' => $request->upload_foto,
            'user_id' => auth()->user()->id, // Gunakan ID pengguna yang sedang login
        ]);

        // Simpan artikel
        $konten->save();

        // Redirect atau melakukan tindakan lainnya
    }

    public function show(Request $request, $id)
    {
        // Cari konten berdasarkan ID
    $konten = Konten::find($id);

    // Periksa apakah permintaan adalah AJAX (XHR request)
    if ($request->ajax()) {
        // Jika permintaan adalah AJAX, kembalikan hanya tampilan modal
        return view('ahliGizi.showKonten', compact('konten'));
    }

    // Jika bukan permintaan AJAX, kembalikan tampilan penuh
    return view('ahliGizi.showKonten', compact('konten'));
    }

}

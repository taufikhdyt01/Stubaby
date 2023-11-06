<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;



class KontenController extends Controller
{
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
}

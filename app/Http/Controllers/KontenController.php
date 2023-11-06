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

    public function editKonten($id)
{
    $konten = Konten::find($id); // Mengambil data konten berdasarkan ID

    return view('ahliGizi.editKonten', compact('konten'));
}

public function update(Request $request, $id)
{
    // Validasi input dan proses lainnya

    $konten = Konten::find($id); // Mengambil data konten berdasarkan ID

    $konten->judul = $request->input('judul_artikel');
    $konten->attachment = $request->input('attachment');
    $konten->content = $request->input('isi_artikel');
    
    // Simpan perubahan
    $konten->save();

    // Redirect atau melakukan tindakan lainnya
}


}

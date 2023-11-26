<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;

class AdminKontenController extends Controller
{
    public function index()
    {
    $user = auth()->user();
    $konten = Konten::all();
    

    return view('admin.Admin-Konten', compact('konten'));}

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

        // Redirect with a success message
        return redirect()->route('Admin-konten.index')->with('success', 'Artikel berhasil ditambahkan!');
    }

    public function editKonten($id)
{
    $konten = Konten::find($id); // Mengambil data konten berdasarkan ID

    return view('admin.editAdminKonten', compact('konten'));
}
    
public function update_X(Request $request, $id)
{
    // Validasi input dan proses lainnya

    $konten = Konten::find($id); // Mengambil data konten berdasarkan ID

    $konten->judul = $request->input('judul_artikel');
    $konten->attachment = $request->input('attachment');
    $konten->content = $request->input('isi_artikel');
    
    // Simpan perubahan
    $konten->save();

    // Redirect with a success message
    return redirect()->route('Admin-konten.index');
}
public function deleteKonten($id)
{
    $konten = Konten::find($id);

    if (!$konten) {
        return redirect()->route('Admin-konten.index')->with('error', 'Konten not found.');
    }

    $konten->delete();

    return redirect()->route('Admin-konten.index')->with('success', 'Konten deleted successfully.');
}

}


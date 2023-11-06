<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\Anak;

class AdminController extends Controller
{
    public function index()
    {
        $anak = Anak::all(); // Mengambil semua data anak dari model Anak

        return view('admin.Admin', compact('anak')); // Meneruskan data anak ke view 'Admin'
    }

    public function dashboard()
    {
        return view('admin.Admin');
    }
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
        ]);
    
        Anak::create($request->all());    

        $anak = Anak::all(); 
        return view('admin.Admin', compact('anak'))->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Admin::find($id); // Ganti dengan model yang sesuai
        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Validasi input
        ]);

        Admin::where('id', $id)->update($request->all()); // Ganti dengan model yang sesuai

        return redirect('admin.Admin', compact('anak'))->with('success', 'Data berhasil diperbarui');
    }

   
   
    public function delete($id)
    {
        $anak = Anak::find($id);
    
        if (!$anak) {
            return redirect()->route('admin.dashboard')->with('error', 'Anak tidak ditemukan.');
        }
    
        $anak->delete();
    
        return redirect()->route('admin.dashboard')->with('success', 'Anak berhasil dihapus.');
    }

}

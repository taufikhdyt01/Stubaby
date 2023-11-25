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
        $anak = Anak::find($id);

        return view('admin.edit', compact('anak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir' => 'required|date',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'catatan' => 'nullable',
        ]);

        $anak = Anak::find($id);

        if (!$anak) {
            return redirect()->route('admin.dashboard')->with('error', 'Anak not found.');
        }

        $anak->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Anak data updated successfully.');
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

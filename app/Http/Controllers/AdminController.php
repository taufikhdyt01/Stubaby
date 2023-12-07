<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Konten;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $anakCount = Anak::count();

        $articleCount = Konten::count();

        return view('admin.dashboard', [
            'anakCount' => $anakCount,
            'articleCount' => $articleCount,
        ]);
    }
    public function anak()
    {
        $users = User::where('role', 'irt')->get();
        $anak = Anak::all(); // Mengambil semua data anak dari model Anak

        return view('admin.Admin', compact('anak','users')); // Meneruskan data anak ke view 'Admin'
    }

    public function create()
    {
        $users = User::where('role', 'irt')->get();
        return view('admin.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir' => 'required',
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'catatan' => 'nullable',
            'user_id' => 'required|exists:users,id',
        ]);
    
        Anak::create($request->all());    

        $anak = Anak::all(); 
        return view('admin.Admin', compact('anak'))->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $users = User::where('role', 'irt')->get();
        $anak = Anak::find($id);

        return view('admin.edit', compact('anak','users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir' => 'required|date',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'catatan' => 'nullable',
            'user_id' => 'required|exists:users,id',
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
            return redirect()->route('admin.anak')->with('error', 'Anak tidak ditemukan.');
        }
    
        $anak->delete();
    
        return redirect()->route('admin.anak')->with('success', 'Anak berhasil dihapus.');
    }

}

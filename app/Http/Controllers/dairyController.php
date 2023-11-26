<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\User;

class dairyController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
    $user = auth()->user();

    // Retrieve anak records for the authenticated user
    $anak = $user->anak;
        return view('irt.diarykecil', compact('anak'));
    }

    public function create()
    {
        $users = User::all();
        return view('irt.addDiary', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_anak' => 'required',
            'tanggal_lahir' => 'required|date',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric',
            'catatan' => 'nullable',
            'user_id' => 'required|exists:users,id',
        ]);

        Anak::create($request->all());

        return redirect()->route('diarykecil.index')->with('success', 'Data anak berhasil ditambahkan.');
    }

    public function edit($id)
{
    $anak = Anak::find($id);
    $users = User::all();

    return view('irt.editdiary', compact('anak', 'users'));
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
        return redirect()->route('diarykecil.index')->with('error', 'Anak not found.');
    }

    $anak->update($request->all());

    return redirect()->route('diarykecil.index')->with('success', 'Anak data updated successfully.');
}


    public function delete($id)
    {
        $anak = Anak::find($id);

        if (!$anak) {
            return redirect()->route('diarykecil.index')->with('error', 'Anak not found.');
        }

        $anak->delete();

        return redirect()->route('diarykecil.index')->with('success', 'Anak berhasil dihapus.');
    }
}

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
}

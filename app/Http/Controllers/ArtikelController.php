<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Konten::all(); // Ambil semua data artikel dari database
        return view('irt.dashboard', compact('articles'));
    }
    public function show($id)
    {
        $articles = Konten::all();
        $x = Konten::findOrFail($id);

        return view('irt.bacaartikel', compact('x','articles'));
    }

    public function card()
    {
        $articles = Konten::all(); // Ambil semua data artikel dari database
        return view('irt.artikel', compact('articles'));
    }
}

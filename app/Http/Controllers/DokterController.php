<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
   public function index()
    {
        $dokters = Dokter::all(); 
        return view('admin.dokters.index', compact('dokters')); 
    }

    public function create()
    {
        return view('admin.dokters.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokters.index')
                         ->with('success', 'dokter berhasil ditambahkan.');
    }

    public function edit(Dokter $dokter)
    {
        return view('admin.dokters.edit', compact('dokter')); 
    }

    public function update(Request $request, Dokter $dokter)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $dokter->update($request->all());

        return redirect()->route('dokters.index')
                         ->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy(Dokter $dokter)
    {
        $dokter->delete();

        return redirect()->route('dokters.index')
                         ->with('success', 'Data dokter berhasil dihapus.');
    }
}

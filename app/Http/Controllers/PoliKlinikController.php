<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliKlinikController extends Controller
{
    public function index()
    {
        $polikliniks = Poliklinik::all(); 
        return view('admin.polikliniks.index', compact('polikliniks')); 
    }

    public function create()
    {
        return view('admin.polikliniks.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Poliklinik::create($request->all());

        return redirect()->route('polikliniks.index')
                         ->with('success', 'Poliklinik berhasil ditambahkan.');
    }

    public function edit(Poliklinik $poliklinik)
    {
        return view('admin.polikliniks.edit', compact('poliklinik')); 
    }

    public function update(Request $request, Poliklinik $poliklinik)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $poliklinik->update($request->all());

        return redirect()->route('polikliniks.index')
                         ->with('success', 'Data poliklinik berhasil diperbarui.');
    }

    public function destroy(Poliklinik $poliklinik)
    {
        $poliklinik->delete();

        return redirect()->route('polikliniks.index')
                         ->with('success', 'Data poliklinik berhasil dihapus.');
    }
}


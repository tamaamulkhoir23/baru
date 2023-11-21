<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;
use App\Models\Buah as ModelsBuah;

class buahcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buah =Buah::all();
        return view('databuah',[
            'buah' => $buah
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buahcreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'nullable',
            'nama' => 'required',
            'berat' => 'required',
        ]);

        Buah::create($request->all());

        return redirect()->route('databuah')
            ->with('success', 'buah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buah = Buah::find($id);
    
        if (!$buah) {
            return redirect()->route('databuah')->with('error', 'Data buah tidak ditemukan.');
        }
    
        return view('editbuah', compact('buah'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id' => 'nullable',
            'nama' => 'required',
            'berat' => 'required',
        ]);
    
        // Temukan data buah berdasarkan ID atau kunci unik lainnya
        $buah = Buah::find($id);
    
        if (!$buah) {
            return redirect()->route('databuah')->with('error', 'Data buah tidak ditemukan.');
        }
    
        // Update data buah
        $buah->update($validatedData);
    
        return redirect()->route('databuah')->with('success', 'Data buah berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan data buah berdasarkan ID atau kunci unik lainnya
        $buah = Buah::find($id);
    
        if (!$buah) {
            return redirect()->route('databuah')->with('error', 'Data buah tidak ditemukan.');
        }
    
        // Hapus data buah
        $buah->delete();
    
        return redirect()->route('databuah')->with('success', 'Data buah berhasil dihapus.');
    }
}

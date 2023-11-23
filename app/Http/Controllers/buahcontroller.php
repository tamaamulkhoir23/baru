<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buah;
use App\Models\Suhu;
use App\Models\Gas;



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
            'is_research'=>'nullable'
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

    // Mulai transaksi database
    DB::beginTransaction();

    try {
        // Hapus relasi suhu
        $buah->suhu()->delete();

        // Hapus relasi gas
        $buah->gas()->delete();

        // Hapus data buah
        $buah->delete();

        // Commit transaksi
        DB::commit();

        return redirect()->route('databuah')->with('success', 'Data buah beserta relasinya berhasil dihapus.');
    } catch (\Exception $e) {
        // Rollback transaksi jika terjadi kesalahan
        DB::rollBack();

        return redirect()->route('databuah')->with('error', 'Gagal menghapus data buah dan relasinya. Silakan coba lagi.');
    }
}

public function researchOn($id)
{
    $buah = Buah::find($id);

    if (!$buah) {
        return redirect()->route('databuah')->with('error', 'Data buah tidak ditemukan.');
    }

    $buah->update(['is_researched' => 1]);

    return redirect()->route('databuah')->with('success', 'Status penelitian untuk data buah berhasil diubah menjadi ON.');
}

public function researchOff($id)
{
    $buah = Buah::find($id);

    if (!$buah) {
        return redirect()->route('databuah')->with('error', 'Data buah tidak ditemukan.');
    }

    $buah->update(['is_researched' => 0]);

    return redirect()->route('databuah')->with('success', 'Status penelitian untuk data buah berhasil diubah menjadi OFF.');
}
}

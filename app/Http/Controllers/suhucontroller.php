<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suhu;
use App\Models\Gas;
use App\Models\Buah;

class suhucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suhu = Suhu::all();
        return view('datasuhu',[
            'suhu' => $suhu
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suhucreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'nullable',
            'nilaisuhu' => 'required',
        ]);

        Suhu::create($validatedData);

        return redirect()->route('datasuhu')->with('success', 'Data suhu berhasil ditambahkan.');
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
    public function edit(string $id)
    {
        $suhu = Suhu::find($id);
    
        if (!$suhu) {
            return redirect()->route('datasuhu')->with('error', 'Data suhu tidak ditemukan.');
        }
    
        return view('editsuhu', compact('suhu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'id' => 'nullable',
            'nilaisuhu' => 'required',
        ]);
    
        // Temukan data suhu berdasarkan ID atau kunci unik lainnya
        $suhu = Suhu::find($id);
    
        if (!$suhu) {
            return redirect()->route('datasuhu')->with('error', 'Data suhu tidak ditemukan.');
        }
    
        // Update data suhu
        $suhu->update($validatedData);
    
        return redirect()->route('datasuhu')->with('success', 'Data suhu berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $suhu = Suhu::findOrFail($id);
        $suhu->delete();
    
        return redirect()->route('datasuhu')->with('success', 'Data suhu berhasil dihapus.');
    }

    
    public function chartData()
{
    $suhuData = Suhu::all();

    return response()->json($suhuData);
}


    public function idx()
    {
        // Mengambil data suhu dari database
        $suhu = Suhu::all();
        $gas = Gas::all();
        $buah = Buah::all();
        // Menghitung jumlah data/baris dalam tabel suhu
        $jumlahDataSuhu = $suhu->count();
        $jumlahDataGas = $gas->count();
        $jumlahDataBuah = $buah->count();
        // Mengirimkan variabel $suhu dan $jumlahDataSuhu ke tampilan
        return view('dashboard', [
            'suhu' => $suhu,
            'jumlahDataSuhu' => $jumlahDataSuhu,
            'gas' => $gas,
            'jumlahDataGas' => $jumlahDataGas,
            'buah' => $buah,
            'jumlahDataBuah' => $jumlahDataBuah,
        ]);
    }
}

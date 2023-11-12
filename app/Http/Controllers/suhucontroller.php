<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suhu;

class suhucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suhu = suhu::all();
        return view('datasuhu',[
            'suhu' => $suhu
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
    public function getSuhuData()
    {
        $suhuData = Suhu::select('nilaisuhu')->get(); // Ganti 'nilai_suhu' dengan nama kolom yang sesuai di tabel 'suhus'

        return response()->json($suhuData);
    }

    public function idx()
    {
        // Mengambil data suhu dari database
        $suhu = suhu::all();
        // Menghitung jumlah data/baris dalam tabel suhu
        $jumlahDataSuhu = $suhu->count();
        // Mengirimkan variabel $suhu dan $jumlahDataSuhu ke tampilan
        return view('dashboard', [
            'suhu' => $suhu,
            'jumlahDataSuhu' => $jumlahDataSuhu,
        ]);
    }
}

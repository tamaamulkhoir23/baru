<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suhu;
use App\Models\buah;
use App\Models\Gas;

class ApiController extends Controller
{
    public function storeData(Request $request)
    {
        // Cari Buah berdasarkan ID atau cara lain
        $buah = Buah::with('suhu')->where('is_researched', true)->first();

        // Periksa jika Buah sudah di-research
        if ($buah) {
            // Buat instance Suhu dan Gas
            $suhu = new Suhu();
            $gas = new Gas();

            // Setel nilai-nilai berdasarkan request atau cara lain
            $suhu->id_buah = $buah->id;
            $gas->id_buah = $buah->id;
            $suhu->nilaisuhu = $request->nilai_suhu;
            $gas->nilaigas = $request->konsentrasi_gas;

            // Setel timestamp
            $currentTime = now();
            $suhu->created_at = $currentTime;
            $suhu->updated_at = $currentTime;
            $gas->created_at = $currentTime;
            $gas->updated_at = $currentTime;

            // Simpan data jika sudah di-research
            $suhu->save();
            $gas->save();

            return response()->json(['message' => 'Data stored successfully']);
        } else {
            return response()->json(['message' => 'Data not stored. Buah is not researched.']);
        }
    }
}

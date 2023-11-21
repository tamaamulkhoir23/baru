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
        // Process and store data here
        $suhu = new Suhu();
        $gas = new Gas();
        $suhu->nilaisuhu = $request->nilai_suhu;
        $gas->nilaigas = $request->konsentrasi_gas;

        $currentTime = now(); // This gets the current timestamp
        $suhu->created_at = $currentTime;
        $suhu->updated_at = $currentTime;
    
        $gas->created_at = $currentTime;
        $gas->updated_at = $currentTime;

        $suhu->save();
        $gas->save();

        return response()->json(['message' => 'Data stored successfully']);
    }
}

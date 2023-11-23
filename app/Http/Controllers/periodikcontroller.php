<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;
use App\Models\Gas;
use App\Models\Suhu;
class periodikcontroller extends Controller
{
    public function index()
    {
        $buahs = Buah::all();
        $gases = Gas::all();
        $suhus = Suhu::all();

        return view('dataperiodik', compact('buahs', 'gases', 'suhus'));
    }
}

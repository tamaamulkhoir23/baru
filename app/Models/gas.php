<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gas extends Model
{
    protected $table = 'gases'; // Nama tabel yang sesuai
    protected $fillable = [
        'namasensor',
        'jenisgas',
        'nilaigas',
        // Atribut-atribut lain yang sesuai
    ];
}

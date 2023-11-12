<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buah extends Model
{
    protected $table = 'buahs'; // Nama tabel yang sesuai
    protected $fillable = [
        'namabuah',
        'beratbuah',
        // Atribut-atribut lain yang sesuai
    ];
}

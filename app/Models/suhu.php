<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suhu extends Model
{
    protected $table = 'suhus'; // Nama tabel yang sesuai
    protected $fillable = [
        'namasensor',
        'nilaisuhu',
        // Atribut-atribut lain yang sesuai
    ];
}

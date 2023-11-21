<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suhu extends Model
{
    protected $fillable = ['nilaisuhu','created_at','updated_at'];

    public function buah()
    {
        return $this->belongsTo(Buah::class, 'id_buah');
    }
}

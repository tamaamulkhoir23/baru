<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $fillable = ['nama', 'berat', 'is_researched'];

    public $timestamps = false;

    public function suhu()
    {
        return $this->hasMany(Suhu::class, 'id_buah');
    }

    public function gas()
    {
        return $this->hasMany(Gas::class, 'id_buah');
    }

}

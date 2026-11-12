<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $fillable = [
        'nisn',
        'nama',
        'jenis_kelamin',
        'alamat',
        'rayon',
        'rombel',
        'no_telp',
    ];
}

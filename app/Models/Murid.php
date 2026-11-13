<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MuridController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Murid extends Model
{
    use HasFactory;

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

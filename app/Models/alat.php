<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat'; // 🔥 penting

    protected $fillable = [
        'nama_alat',
        'kategori_id',
        'stok',
    ];
}
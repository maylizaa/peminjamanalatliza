<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori'; // 🔥 tambahkan ini

    protected $fillable = ['nama_kategori'];

    public function alat()
    {
        return $this->hasMany(Alat::class);
    }
}
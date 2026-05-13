<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $fillable = ['nama_ruangan', 'lokasi'];

    public function alat()
    {
        return $this->hasMany(Alat::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    protected $fillable = ['nama_kondisi'];

    public function alat()
    {
        return $this->hasMany(Alat::class);
    }
}
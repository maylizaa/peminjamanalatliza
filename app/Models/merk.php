<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['nama_merk'];

    public function alat()
    {
        return $this->hasMany(Alat::class);
    }
}
<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesiswaanImage extends Model
{
    protected $fillable = ['gambar', 'kesiswaan_id'];

    public function kesiswaan()
    {
        return $this->belongsTo(Kesiswaan::class, 'kesiswaan_id');
    }
}

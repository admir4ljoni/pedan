<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesiswaan extends Model
{
    protected $fillable = ['jenis'];

    public function image()
    {
        return $this->hasOne(KesiswaanImage::class, 'kesiswaan_id');
    }
}

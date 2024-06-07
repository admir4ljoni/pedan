<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = ['nama_mapel'];

    public function guru()
    {
        return $this->belongsToMany(Guru::class, 'pivot__guru__mapels', 'id_mapel', 'id_guru');
    }
}

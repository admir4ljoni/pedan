<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['nama', 'gambar', 'nomor_hp', 'id_jabatan'];

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class, 'pivot__guru__mapels', 'id_guru', 'id_mapel');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }
}

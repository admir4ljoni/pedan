<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['nama'];

    public function profil()
    {
        return $this->hasOne(ProfilJurusan::class, 'jurusan_id');
    }

    public function visiMisi()
    {
        return $this->hasOne(VisiMisiJurusan::class, 'jurusan_id');
    }

    public function materi()
    {
        return $this->hasOne(MateriJurusan::class, 'jurusan_id');
    }

    public function prospek()
    {
        return $this->hasOne(ProspekJurusan::class, 'jurusan_id');
    }

    public function image()
    {
        return $this->hasOne(JurusanImage::class, 'jurusan_id');
    }
}

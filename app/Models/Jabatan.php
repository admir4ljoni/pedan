<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $fillable = ['nama_jabatan'];

    public function guru()
    {
        return $this->hasOne(Guru::class, 'id_jabatan');
    }
}

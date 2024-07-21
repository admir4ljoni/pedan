<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutImage extends Model
{
    protected $fillable = ['gambar', 'about_id'];

    public function about()
    {
        return $this->belongsTo(About::class, 'about_id');
    }
}

<?php

namespace App\Models;

use App\Posisi;
use Illuminate\Database\Eloquent\Model;

class Danin extends Model
{
    protected $fillable = [
        'nama',
        'slug',
        'gambar',
        'link',
        'kode',
        'informasi',
        'aktif',
        'posisi',
        'danin_id',
        'idnya',
    ];

    public function casts()
    {
        return [
            'posisi' => Posisi::class
        ];
    }

    public function images()
    {
        return $this->hasMany(ImageGalery::class, 'image_id');
    }
}

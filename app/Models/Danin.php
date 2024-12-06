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

    protected function casts()
    {
        return [
            'posisi' => Posisi::class
        ];
    }

    public function images()
    {
        return $this->hasMany(ImageGalery::class, 'image_id');
    }

    public function daninUtama()
    {
        return $this->whereNull('danin_id');
    }

    public function daninSubs()
    {
        return $this->hasMany(Danin::class, 'danin_id');
    }
}

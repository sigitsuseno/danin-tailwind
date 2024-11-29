<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Danin extends Model
{
    protected $fillable = [
        'nama',
        'bagian',
        'gambar',
        'link',
        'kode',
        'informasi',
        'aktif',
        'posisi',
        'danin_id',
        'idnya',
    ];
}

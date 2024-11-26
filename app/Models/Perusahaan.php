<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = [
       'app_id',
       'user_id',
       'cabang_id',
       'nama',
       'logo',
       'icon',
       'no_kontak',
       'email',
       'alamat',
       'urls',
    ];

    public function appSetting()
    {
        return $this->belongsTo(AppSetting::class, 'app_id');
    }

    public function pusat()
    {
        return $this->perusahaan()->whereNull('cabang_id');
    }

    public function perusahaan()
    {
        return $this->hasMany(self::class, 'cabang_id');
    }
    public function cabang()
    {
        return $this->perusahaan()->with('cabang');
    }

    public function urls()
    {
        $urls = [];
        foreach ($urls as $url) {
           $urls[] = json_decode($this->$url);
        }
        return $urls;
    }

}

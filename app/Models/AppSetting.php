<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    protected $fillable = [
        'app-name',
        'app-logo',
        'app-icon',
        'app-url',
        'app-meta',
        'app-ver',
    ];
    public function perusahaans()
    {
        return $this->hasMany(Perusahaan::class, 'app_id');
    }
}

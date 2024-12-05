<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGalery extends Model
{
    protected $table = "image_galeries";
    protected $fillable = [
        
        'name',
        'slug',
        'image',
        'image_thumb',
        'image_id',
    ];

    public function danin()
    {
        return $this->belongsTo(Danin::class, 'image_id');
    }
}

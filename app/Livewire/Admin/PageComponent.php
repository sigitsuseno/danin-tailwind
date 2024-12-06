<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use App\Models\ImageGalery;
use Livewire\Component;

class PageComponent extends Component
{

    public
    $id_image,
    $name,
    $slug,
    $image,
    $image_thumb,
    $image_id;
    public $id_ids; 

    public $id_gambar_dipilih;
    public function mount($id_id) 
    { 
        $this->id_ids = $id_id; 
    }
    public function render()
    {
        return view('livewire.admin.page-component', [
            'galeri_gambar' => ImageGalery::orderBy('id', 'desc')->get()
        ]);
    }

    public function pilihGambar($idgambar)
    {
        $semuaGambar = ImageGalery::find($idgambar);
        
        $this->id_image = $semuaGambar->id;
        

    }

}

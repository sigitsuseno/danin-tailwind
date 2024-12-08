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
    $link,
    $image_thumb,
    $image_id;
    public $id_ids; 

    public $id_gambar_dipilih;


    public $handle = 'default';

    public $galGam;

    public function mount($id_id) 
    { 
        $this->id_ids = $id_id; 

        $this->galGam = Danin::find($this->id_ids);
    }
    public function render()
    {
        return view('livewire.admin.page-component', [
            'galeri_gambar' => ImageGalery::orderBy('id', 'desc')->get()
        ]);
    }

    public function handleButton($menu)
    {
        $this->handle = $menu;
    }

    public function pilihGambar($idgambar)
    {
        $semuaGambar = ImageGalery::find($idgambar);
        
        $this->id_image = $semuaGambar->id;
        
    }

    public function gambarTerpilih($id)
    {

        $this->handle = 'buatComponen';
        $gambar = ImageGalery::find($id);

        $this->id_image = $gambar->id;
        $this->name = $gambar->name;
        $this->slug = $gambar->slug;
        $this->image = $gambar->image;
        $this->link = $gambar->link;
        $this->image_thumb = $gambar->image_thumb;
        $this->image_id = $gambar->image_id;

    }

    public function saveComponent()
    {
        $gambar = ImageGalery::find($this->id_image);


        $gambar->update([
            'link' => $this->link,
            'image_id' => $this->id_ids
        ]);

        $this->reset('link', 'image_id', 'id_image', 'name', 'slug', 'image', 'image_thumb');
        
        $this->handle = 'default';
    }

    public function editComponent($com_id)
    {

        $this->handle = 'editComponen';

        $gambar2 = ImageGalery::find($com_id);

        $this->id_image = $gambar2->id;
        $this->name = $gambar2->name;
        $this->slug = $gambar2->slug;
        $this->image = $gambar2->image;
        $this->link = $gambar2->link;
        $this->image_thumb = $gambar2->image_thumb;
        $this->image_id = $gambar2->image_id;

    }
    public function simpanEdit()
    {
        $gambar2 = ImageGalery::find($this->id_image);


        $gambar2->update([
            'link' => $this->link,
            'image_id' => $this->id_ids
        ]);

        $this->reset('link', 'image_id', 'id_image', 'name', 'slug', 'image', 'image_thumb');
        
        $this->handle = 'default';
    }
    public function saveRemove()
    {


        $gambar2 = ImageGalery::find($this->id_image);


        $kasihNol = '';

        $gambar2->update([
            'link' =>  " ",
            'image_id' =>  0
        ]);


        $this->reset('link', 'image_id', 'id_image', 'name', 'slug', 'image', 'image_thumb');
        
        $this->handle = 'default';
        
    }
}

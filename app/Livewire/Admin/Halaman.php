<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use Livewire\Component;

class Halaman extends Component
{
    public 
    $nama,
    $bagian,
    $gambar,
    $link,
    $kode,
    $informasi,
    $aktif,
    $posisi,
    $danin_id;

    public $handle = 'edit';
    public function render()
    {
        return view('livewire.admin.halaman', [
            'halamans' => Danin::where('bagian', 'page')->latest()->get()
        ]);
    }

    public function mount()
    {
        //
    }

    public function handleButton($menu)
    {
        $this->handle = $menu ;
    }


}

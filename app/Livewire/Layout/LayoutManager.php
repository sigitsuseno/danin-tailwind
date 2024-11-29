<?php

namespace App\Livewire\Layout;

use App\Models\Danin;
use Livewire\Component;

class LayoutManager extends Component
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
    $danin_id,
    $idnya;

    public $layout = [];
    public function render()
    {
        return view('livewire.layout.layout-manager', [
            'lay_out' => Danin::where('bagian', 'layout')->with('sec_link')
        ]);
    }

    public function mount()
    {
        $layout = ['layout'];
    }
}

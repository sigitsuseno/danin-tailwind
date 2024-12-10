<?php

namespace App\Livewire\Website;

use App\Models\Danin;
use Livewire\Component;

class ProdukDaftar extends Component
{

    public $danin_menu;

    public $jumlah_produk = 12;
    public function mount()
    {
        $this->danin_menu = Danin::with('daninSubs', 'images')->where('posisi', 'menu')->take($this->jumlah_produk)->get();

    }
    public function render()
    {

        return view('livewire.website.produk-daftar', [
            'danin_produk' => Danin::where('posisi', 'produk')->with('daninSubs', 'images')->take($this->jumlah_produk)->get()
        ]);
    }
}

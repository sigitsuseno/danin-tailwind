<?php

namespace App\Livewire\Website;

use App\Models\Danin;
use Livewire\Component;

class ProdukSingle extends Component
{
    public $core_id;

    public $modal_e = false;

    public $jumlah_produk = 5;
    public function render()
    {
        return view('livewire.website.produk-single', [
            'danin_page' => Danin::with('daninSubs', 'images')->find($this->core_id),
            'danin_produk' => Danin::where('posisi', 'produk')->with('daninSubs', 'images')->take($this->jumlah_produk)->get()
        ]);
    }

    public function mount($hal_id) 
    { 
        $this->core_id = $hal_id; 

    }

    public function tampilModal()
    {
        $this->modal_e = true;
    }
}

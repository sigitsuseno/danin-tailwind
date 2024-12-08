<?php

namespace App\Livewire\Website;

use App\Models\Danin;
use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        return view('livewire.website.beranda', [
            'beranda' => Danin::with('daninSubs', 'images')->where('posisi', 'menu')->get()
        ]);
    }
}

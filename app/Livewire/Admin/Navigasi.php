<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use Livewire\Component;

class Navigasi extends Component
{
    public function render()
    {
        return view('livewire.admin.navigasi', [
            'navis' => Danin::with('daninSubs', 'images')->where('posisi', 'menu')->get()
        ]);
    }
}

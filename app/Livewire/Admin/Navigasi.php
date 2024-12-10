<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use App\Models\Setting;
use Livewire\Component;

class Navigasi extends Component
{
    public function render()
    {
        return view('livewire.admin.navigasi', [
            'navis' => Danin::with('daninSubs', 'images')->where('posisi', 'menu')->get(),
            'set_ing' => Setting::find(1)
        ]);
    }

}

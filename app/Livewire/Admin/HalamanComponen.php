<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use Livewire\Component;

class HalamanComponen extends Component
{
    public function render()
    {
        
        return view('livewire.admin.halaman-componen', [
            'hal_com' => Danin::orderBy('id', 'desc')->get() 
        ]);
    }
    
}

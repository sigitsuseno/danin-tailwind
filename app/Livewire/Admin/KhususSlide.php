<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use Livewire\Component;

class KhususSlide extends Component
{
    public function render()
    {
        return view('livewire.admin.khusus-slide', [
            'slide_depan' => Danin::where('slug', 'slide-depan')->latest()->first()
        ]);
    }
}

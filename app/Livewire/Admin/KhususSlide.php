<?php

namespace App\Livewire\Admin;

use App\Models\Danin;
use Livewire\Component;

class KhususSlide extends Component
{
    public $subnya;
    public function render()
    {
        return view('livewire.admin.khusus-slide', [
            'slide_depan' => Danin::with('daninSubs', 'images')->where('slug', 'slide-depan')->latest()->first()
        ]);
    }
    // public function foreachSub()
    // {
    //     $subDanin = Danin::with('daninSubs')->where('slug', 'slide-depan')->latest()->first();

    //     foreach ($subDanin->daninSubs as $sub) {
    //          $this->subnya[] = $sub ;
    //     }

    // }
}

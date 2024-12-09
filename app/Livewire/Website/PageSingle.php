<?php

namespace App\Livewire\Website;

use App\Models\Danin;
use Livewire\Component;

class PageSingle extends Component
{
    public $core_id;

    public function render()
    {
        return view('livewire.website.page-single', [
            'danin_page' => Danin::with('daninSubs', 'images')->find($this->core_id)
        ]);
    }

    public function mount($hal_id) 
    { 
        $this->core_id = $hal_id; 

    }
}

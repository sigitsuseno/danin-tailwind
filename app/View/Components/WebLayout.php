<?php

namespace App\View\Components;

use App\Models\AppSetting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $app_set = AppSetting::find(1);

        return view('layouts.web', [
            'appSet' => $app_set
        ]);
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {

        if(auth()->user()->role === 'admin'){
            return view('layouts.admin.app');
        }
        else if(auth()->user()->role === 'user'){
            return view('layouts.user.app');
        }
        else {
            return view('layouts.app');
        }

    }
}

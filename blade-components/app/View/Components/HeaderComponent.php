<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderComponent extends Component
{
    public function __construct($data)
    {
       
    }

    public function render()
    {
        return view('components.header-component');
    }
}

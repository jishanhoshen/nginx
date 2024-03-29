<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $menu;
    public $logo;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menu = ['home' => 'Home', 'about' => 'About', 'contact' => 'Contact'];
        $this->logo = 'assets/images/logo.png';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}

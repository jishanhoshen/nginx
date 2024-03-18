<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card1 extends Component
{
    public $icon;
    public $title;
    public $description;
    public $buttonText;
    public $url;
    /**
     * Create a new component instance.
     */
    public function __construct($icon = "", $title, $description = "", $buttonText = "", $url = "")
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
        $this->buttonText = $buttonText;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card1');
    }
}

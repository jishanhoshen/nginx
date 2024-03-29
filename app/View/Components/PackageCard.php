<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PackageCard extends Component
{
    public $includes;
    public $excludes;
    public $title;
    public $description;
    public $price;
    public $side;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $price, $includes = [], $excludes = [], $side = 'right')
    {
        $this->includes = $includes;
        $this->excludes = $excludes;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->side = $side;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.package-card');
    }
}

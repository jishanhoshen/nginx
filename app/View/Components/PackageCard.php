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

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $price, $includes = [], $excludes = [])
    {
        $this->includes = $includes;
        $this->excludes = $excludes;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.package-card');
    }
}

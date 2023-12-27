<?php

namespace App\View\Components\product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class box extends Component
{
    public $image;
    public $title;
    public $desc;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($image, $title, $desc, $route)
    {
        $this->image = $image;
        $this->title = $title;
        $this->desc = $desc;
        $this->route = $route;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.box');
    }
}
<?php

namespace App\View\Components\About;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardReverse extends Component
{
    public $image;
    public $title;
    public $route;
    public $desc;

    /**
     * Create a new component instance.
     */
    public function __construct($image, $title, $desc, $route)
    {
        $this->image = $image;
        $this->title = $title;
        $this->route = $route;
        $this->desc = $desc;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.card-reverse');
    }
}
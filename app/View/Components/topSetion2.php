<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class topSetion2 extends Component
{
    public $image;
    public $desc;
    public $title;
    public $subTitle;
    public $theme;
    public $text;


    /**
     * Create a new component instance.
     */
    public function __construct($image, $title, $subTitle, $theme, $desc, $text)
    {
        $this->image = $image;
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->theme = $theme;
        $this->desc = $desc;
        $this->text = $text;

    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-setion2');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Types;

class popup extends Component
{
    /**
     * Create a new component instance.
     */
    public $navbar;
    public $uhd;
    public $mdc;

    public function __construct()
    {
        $this->navbar = Product::where('type_id', 1)->get();
        $this->uhd = Product::where('type_id', 2)->get();
        $this->mdc = Product::where('type_id', 3)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.popup');
    }
}
// @foreach ($uhd as $product)
// <a href="{{ route('user.product', $product->id) }}">
//     <div
//         class="py-2 px-4 border-b hover:bg-[#1780BB] hover:text-white duration-300 block max-lg:text-xs">
//         {{ $product->name }}
//     </div>
// </a>
// @endforeach

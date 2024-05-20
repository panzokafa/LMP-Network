<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;
use App\Models\Types;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $navbar;
    public function __construct()
    {

        // $this->products =
        // $this->navbar = Product::where('type_id', 1)->get();
        $this->navbar = Product::all();
        // $this->$uhd = Product::where('type_id', 2)->get();

        // $navbar = Product::all()->groupBy('type_id');
        // $productTypes = Types::whereIn('id', $product->keys())->get()->keyBy('id');

        // return view('components.nav.product', [
        //     'product' => $product,
        //     '$productTypes' => $productTypes,
        //     'mdc' => $mdc,
        //     'uhd' => $uhd]);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav.product', [
            'navbar' => $this->navbar,
        ]);
    }
}

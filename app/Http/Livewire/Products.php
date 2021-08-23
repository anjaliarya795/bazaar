<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- The whole world belongs to you. --}}
                <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-3">@livewire('product-card',["data"=>$product])</div>
                    @endforeach()
                </div>
                </div>
            </div>
        blade;
    }
}

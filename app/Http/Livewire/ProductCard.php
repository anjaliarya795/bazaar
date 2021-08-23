<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{

    
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- In work, do what you enjoy. --}}
                <div class="card">
                    <img src="" alt="" class="card-img-top" style="object-fit:contain;height:200px">
                    <div class="card-body">
                        <h2>{{$data->discount_price}}</h2>  <del>{{$data->price}}</del>
                        <h4>{{$data->p_title}}</h4>
                        <p class="small">{{$data->category->title}}</p>
                    </div>
                </div>
            </div>
        blade;
    }
}

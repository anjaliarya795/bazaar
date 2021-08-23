<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryList extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Stop trying to control. --}}
                <div class="list-group">
                    @foreach($category as $cat)
                        <a href="" class="list-group-item list-group-item-action">{{$cat->title}}</a>
                    @endforeach
                </div>
            </div>
        blade;
    }
}

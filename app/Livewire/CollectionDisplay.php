<?php

namespace App\Livewire;

use Livewire\Component;

class CollectionDisplay extends Component
{
    public $color;
    public $type;
    public $items;

    public function render()
    {
        return view('livewire.collection-display');
    }
}

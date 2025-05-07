<?php

namespace App\Livewire\Ui;

use Livewire\Component;

class Button extends Component
{

    public string $sizes = "h-10 px-4 py-2";
    public $className;

    public function render()
    {
        return view('livewire.ui.button');
    }
}

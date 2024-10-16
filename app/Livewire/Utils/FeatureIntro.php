<?php

namespace App\Livewire\Utils;

use Livewire\Component;

class FeatureIntro extends Component
{
    public $heading;
    public $description;
    public $pstyle;
    public $otherStyles;

    public function mount($heading, $description, $pstyle="w-2/5", $otherStyles="")
    {
        $this->heading = $heading;
        $this->description = $description;
        $this->pstyle = $pstyle;
        $this->otherStyles = $otherStyles;
    }

    public function render()
    {
        return view('livewire.utils.feature-intro');
    }
}

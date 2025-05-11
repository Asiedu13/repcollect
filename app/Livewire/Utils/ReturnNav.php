<?php

namespace App\Livewire\Utils;

use Livewire\Component;

class ReturnNav extends Component
{
    public $styles;

    public function mount($styles = null)
    {
        $this->styles = $styles;
    }

    public function render()
    {
        return <<<'HTML'
                <nav class=".text-accent flex gap-2 mt-4 {{$this->styles}}">
                    <svg class="animate-slideLeft" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-left"><path d="M6 8L2 12L6 16"/><path d="M2 12H22"/></svg>
                    <a href="{{route('dashboard')}}" wire:navigate>
                        <p>Back to dashboard</p>
                    </a>
                </nav>
        HTML;
    }
}

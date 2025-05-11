<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class button extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $size="default", public $className = 'something', public $type="normal",  public $variant = "default")
    {
        $sizes = [
            'sm' => "h-9 rounded-md px-3",
            'lg' => 'h-11 w-[inherit] rounded-md px-8',
            'icon' => 'h-10 w-10',
            'default' => "h-10 w-full px-4 py-2",

        ];
        $variants = [
            'link' => 'text-primary underline-offset-4 hover:underline',
            'ghost' => 'hover:bg-accent hover:text-accent-foreground',
            'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
            'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
            'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
            'default' => 'bg-primary text-primary-foreground hover:bg-primary/90'
        ];
        $this->variant = $variants[$variant];
        $this->size = $sizes[$size];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.button');
    }
}

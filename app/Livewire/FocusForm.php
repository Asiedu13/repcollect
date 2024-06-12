<?php

namespace App\Livewire;

use Exception;
use App\Models\focus;
use App\Models\Link;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class FocusForm extends Component
{
    #[Validate('required')]
    public $title;
    
    #[Validate('required')]
    public $description;

    // #[Validate('min:5')]
    public $desired_amount;

    #[Validate('required|min:1')]
    public $amount;
    

    public function save()
    {
        $this->validate();
        // dd($this->all());

       $newFocus = focus::firstOrNew([
            'title' => $this->title,
            'user_id' => auth()->id(),
            'description' => $this->description,
            'desired_amount' => $this->desired_amount,
            'cost' => $this->amount
        ]);

        $newFocus->save();

        $newLink = Link::firstOrNew([
            'focus_id' => $newFocus->id,
            'link' =>  Str::random(25)
        ]);

        $newLink->save();

        $this->reset();
        return redirect()->route('me.generate', ['url' => $newLink->link]);
    }

    public function render()
    {
        return view('livewire.focus-form');
    }
}
